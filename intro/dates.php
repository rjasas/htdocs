<?php 

echo date("Y.m.d");
echo "<br>";

echo date("l");
echo "<br>";

echo date("Y");
echo "<br>";

echo date("M");
echo "<br>";

echo date("d");
echo "<br>";

//dinaminis puslapio copyright


//laikas

echo date("H:i:s"); //jei naudojame h (12h), tai sekundes bus "sa"
echo "<br>";
echo date("h:i:sa");
echo "<br>";
echo "<br>";

//String to time

$birthday = "1999/01/01";

$birthdayDate = strtotime($birthday);

// var_dump($birthdayDate);
echo date("Y.m.d", $birthdayDate);
echo "<br>";
echo "<br>";

$tomorrow = strtotime("+20 month, 20 days"); //next month; +12 month;
echo date("Y.m.d", $tomorrow);
echo "<br>";
echo "<br>";

$today = date("Y-m-d");
$christmas = strtotime("2022-12-25");
// echo "<br>";
$dateFormat = "Y-m-d";
echo ($christmas-strtotime($today))/(60*60*24);
// var_dump ($christmas);

echo "<br>";
echo "<br>";



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>&copy; 2021-<?php echo date("Y") ?></p>
</body>
</html>