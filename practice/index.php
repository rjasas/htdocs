<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice</title>
</head>
<body>
    <!-- Sugeneruoti stringa i html su dviem kintamaisiais-->
    <!-- Rezultatas paragrafe "Mano vardas Ricardas ir as esu is miesto Klaipeda" -->
    <?php 

    $name = "Ričardas";
    $city = "Klaipėda";
    $me = "Aš esu ";
    $from = " ir aš esu iš miesto: ";
    echo $me.$name.$from.$city;
    echo "<br>";
    echo "<p>Mano vardas ".$name." ir aš esu iš miesto: ".$city."</p>";
    $h1 = "PHP Practice";
    ?>
    
    <p>Mano vardas <?php echo $name; ?> ir aš esu iš miesto <?php echo $city ?></p>
    <br>
    <br>
    
   
    <!-- Panaudoti pavadinima "PHP Practice" kaip kintamaji ir ji ideti i h1 ir i a taga --> 
    <h1><?php echo $h1 ?></h1>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam molestias magnam illo sit totam facilis a animi eos amet <br> earum praesentium explicabo voluptatibus veniam corrupti repellat, illum dolor enim dolorum <a href="#"><?php echo $h1 ?></a>.</p>
    
    <?php
    if (!empty($_SERVER["HTTP_CLIENT_IP"])){
        $ipAdress = $_SERVER["HTTP_CLIENT_IP"];
    } else if (!empty($_SERVER["HTTP_X_FORWARDED_FOR"])){
        $ipAdress = $_SERVER["HTTP_X_FORWARDED_FOR"];
    } else {
        $ipAdress = $_SERVER["REMOTE_ADDR"];
    }

    $browser = $_SERVER["HTTP_USER_AGENT"]

    ?>

    <h3><?php echo $ipAdress; ?></h3>
    <h3><?php echo $browser; ?></h3>
    <?php
    print_r(error_get_last());
    ?>

    <h1>Elektros saskaita</h1>

    <ul>
        <li>For first 50 units - 3.5 EUR/unit</li>
        <li>For next 100 units - 4 EUR/unit</li>
        <li>For next 100 units - 35.2 EUR/unit</li>
        <li>For units above 250 - 6.5 EUR/unit</li>
    </ul>
    <?php 
    $units = 15623;
    $result = calculateBill($units);
    $resultStr = "Total amaount of ".$units." - ".$result." EUR";

    function calculateBill($units){
        $firstCost = 3.5;
        $secondCost = 4;
        $thirdCost = 5.2;
        $fourthCost = 6.5;

        if ($units<=50){
            $bill = $units*$firstCost;
        } else if ($units>50 && $units<=150) {
            $temp = $units*$firstCost;
            $remainingUnits = $units - 50;
            $bill = $temp + ($remainingUnits * $secondCost);
        } else if ($units>150 && $units<=250) {
            $temp = (50*$firstCost)+(100*$secondCost);
            $remainingUnits = $units - 150;
            $bill = $temp + ($remainingUnits*$thirdCost);
        } else {
            $temp = (50*$firstCost)+(100*$secondCost)+(100*$thirdCost);
            $remainingUnits = $units - 250;
            $bill = $temp + ($remainingUnits*$fourthCost);
        }

        return number_format((float)$bill, 2, ","," ");
    }
    
    ?>

    <p><?php echo $resultStr; ?></p>

    <?php 
    $birthday = strtotime("1990-09-01");
    $today = strtotime(date("Y-m-d"));
    $age = ($today - $birthday)/(60*60*24*365);
    $answer = "gali balsuoti";
    $name = "Petras ";
    if ($age >= 18) {
       echo $name.$answer;
    };
    ?>
    

    <p><?php echo $answer; ?></p>

    

</body>
</html>