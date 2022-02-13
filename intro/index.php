<?php
$title = "2 pamoka";
$username = "Ricardas";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Title</h1>
    <h1><?php echo $title ?></h1>
    <h3>Hello, <?php echo $username ?></h3>
    <ol>
        <h4>Ką gali PHP</h4>
        <li>Kurti dinaminius puslapius</li>
        <li>CRUD - Create, Read, Update, Delete duomenų bazėje</li>
        <li>Surinkti formos duomenis</li>
        <li>Šifruoti duomenis</li>
        <li>Galime vartotojui pateikti failus, paveiksliukus, išsiųsti el. laišką ir kt.</li>
    </ol>
    <a href="dataTypes.php">Duomenų tipai</a>
    <br>
    <br>
    <a href="dates.php">DATOS</a>
    <br>
    <a href="practiceWithKestutis.php">Praktika su Kestuciu</a>
    <?php
    
    echo "Mokomės php <br>";
    echo "Būtina padėti kabliataškį <br>";
    ECHO "";
    ecHO "";

    //kintamieji yra case-sensitive!!!

    #kitas komentaras

    $name = "Ričardas";
    
    echo $name;

    // $lastName;
    // $last_name;

    function name (){
        $age = 15;
        $name = "Juozas";
        // global $name;
        echo $name;
    }

    name ();

    echo $name


    ?>
</body>
</html>