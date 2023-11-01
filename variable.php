<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $name = "Kapil";
    $phone = 9846767411;
    $item = "Chicken Burger";
    $price = 103.75;
    $ordered = "True";
    $email = "kapil.k@gmail.com";
    $quantity = 5;
    $total = $quantity * $price;

    echo "Hi there! Am i talking to {$name}; <br>";
    echo "Hi Sir, We are calling to You, to confirm the order; <br>";
    echo "Can u verify your Contact Details; <br>";
    echo "So, this is ur contact no. {$phone} and ur email is {$email}; <br>";
    echo "Sir, Have u ordered this item called {$item}; <br>";
    echo "And the Price of the Order is {$price} INR and the quantity u ordered is {$quantity} items; <br>";
    echo "Would u like to confirm the order; <br>";
    echo "Would u like to order any other items?; <br>";
    echo "The total cost of the order u placed is {$total};"
?> 
</body>
</html>
