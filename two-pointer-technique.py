# Define your initial number and array
initial_number = 18
array = [2,7,11,15]

# Set the default numbers to the first and last one in the array
l = r = 0
number1 = array[l]
number2 = array[len(array)-r-1]

# Check if both numbers aren't equal to your initial number AND check if your numbers aren't equal
while number1 + number2 != initial_number and number1 != number2:
    # When the numbers your add are smaller than your initial number go one to the right (with number 1)
    if number1 + number2 < initial_number:
        l = l + 1
        number1 = array[l]
    # When the numbers your add are bigger than your initial number go one to the left (with number 2)
    elif number1 + number2 > initial_number:
        r = r + 1
        number2 = array[len(array)-r-1]

# Print an result if the pair is found or there is no pair at all
if number1 + number2 == initial_number:
    print("The number %d and %d from the list add up to %d." % (number1, number2, initial_number))
else:
    print("There are no numbers in the list that together add up to your initial number!")