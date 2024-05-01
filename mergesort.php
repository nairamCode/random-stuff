<html>
    <head>
        <title>Mergesort Algorithm</title>
    </head>
    <body>
        <?php
        $unsorted_array = [10,9,8,7,6,5,4,3,2,1];

        echo("Your unsorted array looks like this: <br>");
        for ($i = 0; $i < count($unsorted_array); $i++)
        {
            echo("$unsorted_array[$i] ");
        }
        echo("<br>");
        
        $sorted_array = mergesort_split($unsorted_array);

        echo("Your sorted array looks like this: <br>");
        for ($i = 0; $i < count($sorted_array); $i++)
        {
            echo("$sorted_array[$i] ");
        }
        
        function mergesort_split($array)
        {
            if (count($array) == 1)
            {
                return $array;
            }
            
            $array_left = array_slice($array, 0, count($array)/2);
            $array_right = array_slice($array, count($array)/2);
            
            $array_left = mergesort_split($array_left);
            $array_right = mergesort_split($array_right);
            
            return mergesort_merge($array_left, $array_right);
        }
        
        function mergesort_merge($array_left, $array_right)
        {
            $new_array = array();
            
            while (count($array_left) > 0 && count($array_right) > 0)
            {
                if ($array_left[0] > $array_right[0])
                {
                    $new_array[] = $array_right[0];
                    $array_right = array_slice($array_right, 1);
                }
                else
                {
                    $new_array[] = $array_left[0];
                    $array_left = array_slice($array_left, 1);
                }
            }
            while (count($array_left) > 0)
            {
                $new_array[] = $array_left[0];
                $array_left = array_slice($array_left, 1);
            }
            while (count($array_right) > 0)
            {
                $new_array[] = $array_right[0];
                $array_right = array_slice($array_right, 1);
            }
            return $new_array;
        }
        ?>
    </body>
</html>