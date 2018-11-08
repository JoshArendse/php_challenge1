<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Challenge_1</title>
</head>
<body>

<?php

$break="<br>";

$name = "Bob";

$age = "thirty_five";

$job = "plumber";

$carMake = "Toyota";

$carColour = "RED";

$happy = true;

$time = "this many";
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

echo $name.$break;

echo $age.$break;

echo $job.$break;

echo $carMake.$break;

echo $carColour.$break;

echo $happy.$break;

echo $time.$break.$break.$break;
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

echo str_replace('thirty_five','35',$age).$break;
$age=str_replace('thirty_five','35',$age);

echo strtolower($carColour).$break;
$carColour=strtolower($carColour);

echo strlen($time);
$break;
$time=strlen($time);

$car=($carColour.$carMake);
$break;

$retire= 65-$age;
echo $retire.$break.$break;

$para= "$name is a $job. He drives a $car and works $time hours a day. He is $age years old and is $retire years from retirement. He is $happy with his life.";

echo $para;
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
    
</body>
</html>