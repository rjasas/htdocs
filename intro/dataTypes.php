<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Duomenų tipai</title>
</head>
<body>
    <h1>Duomenų tipai</h1>

    <ol>
        <li>String <?php $string = "tekstas"; ?></li>
        <li>Integer <?php $integer = 10; //sveikasis skaičius ?></li>
        <li>Float <?php $float = 3.14159;  ?></li>
        <li>Boolean <?php $boolean = true; //arba false ?></li>
        <li>NULL <?php $null = NULL; //kintamasis be reikšmės ?></li>
        <li>Masyvas <?php $array = []; ?></li>
        <li>Objektas <?php $object  ?></li>
    </ol>

    <?php
    //////////////////////////////////////String funkcijos/////////////////////////////////////////////////////////////

    $text = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia autem nihil temporibus aut, minus beatae dicta sunt quo obcaecati praesentium doloremque repellat nulla maiores quos, debitis natus. Fugit, laudantium corporis!";

    //String length 
    echo "Sakinio ilgis yra ".strlen($text)."<br>";
    
    //word count
    echo "Zodziu yra ".str_word_count($text)."<br>";

    //reverse string
    echo strrev($text)." ";

    //Word search
    echo strpos($text, "quos");
    echo strpos($text, "Langas");
    var_dump(strpos($text, "Langas"));
    echo "<br>";

    //Replacing word

    echo str_replace("Lorem", "Labas", $text)."<br>";
    echo $text;
    echo "<br>";
    echo "<br>";
    

    //String to Integer || Float to Integer//////////////////////////////////////////

    $price = 1.99;
    $priceInt = (int)$price;
    echo $priceInt;
    
    echo "<br>";

    $height = "178.96";
    $heightInt = (int)$height;
    echo $heightInt;

    echo "<br>";

    $heightFloat = floatval($height);
    echo $heightFloat;

    /////////////////////////////////////////////////Matematika////////////////////////////////////////////

    echo "<br>";
    echo "<br>";

    echo pi();
    echo "<br>";

    echo "maziausias saicius yra ".min(12, 89, 456, 1, 56, 899);
    echo "<br>";

    echo "didziausias saicius yra ".max(12, 89, 456, 1, 56, 899);
    echo "<br>";

    echo sqrt($price);
    echo "<br>";

    echo abs(-99);
    echo "<br>";

    echo(round($price));
    echo "<br>";

    echo rand(0, 10)/10;
    echo "<br>";

    //Constants
    define("ROOT_FOLDER", "/scripts");

    $path = ROOT_FOLDER."/create";
    echo "<br>";

    //Operators//////////////////////////////////////
    ////////////////////////Aritmetiniai operatoriai///////////////////////////

    // + Sudetis / Addition
    // - Atimtis / Substraction
    // * Daugyba / Multiplication
    // / Dalyba / Division
    // % Liekana / Modulus
    // ** Kelimas laipsniu / Exponentaition

    /////////////////priskyrimo operatorius/////////////////////////////

    // = priskiriame reiksme
    // += priskiriam reiksme su sudetimi a+=b ty a = a+b
    // -= / a-=b ty a=a-b
    // *= / a*=b ty a = a*b
    // /= / a/=b ty a=a/b
    // %= / a%=b ty a=a%b

    ////////////Palyginimo operatoriai////////////////

    // == lygus (equal)
    // === identiski (identical),atitinka ir reiksme ir tipas.
    // != nelygu
    // <> nelygu
    // !== nera identiski
    // > daugiau
    // < maziau
    // >= daugiau arba lygu. NE TAS PATS kaip => (tai yra rodykle)
    // <= maziau arba lygu
    // <=> spaceship

    $a = 5;
    $b = 6;
    echo ($a <=> $b); //grazins -1
    echo "<br>";

    $c = 15;
    $d = 15;
    echo($c <=> $d); //grazins 0
    echo "<br>";

    $e = 100;
    $f = 1;
    echo ($e <=> $f); //grazins 1
    echo "<br>";

    var_dump($e <=> $f);
    echo "<br>";

    //padidinimo - sumazinimo operatoriai ////////////////////////////

    echo $a++; //post incerement
    echo "<br>";

    echo ++$a; //pre increment
    echo "<br>";

    $b--;
    --$b;

    // Loginiai operatoriai/////////////////////////

    // and - && abi salygos yra true
    // or - || viena is salygu yra true
    // xor viena is salygu yra true, bet ne abi
    // ! - not(nera) !true == false
    
    //String operatoriai

    // . sudeda du stringus
    // .= sujungia du stringus
    // $tekstas1 .= $tekstas2;


    ?>

    <h3><a href="conditionalStatements.php">Salygos</a></h3>

</body>
</html>