



<?php 

echo "<h2>Pirma užduotis</h2>";

// $num1 = rand(1, 10);
// $num2 = rand(1, 10);

// echo "Pirmas skaičius yra - $num1";
// echo "<br>";
// echo "Antras skaičius yra - $num2";
// echo "<br>";

// if ($num1 > $num2){
//     echo "Pirmas skaičius ($num1) yra didesnis už antrą skaičių ($num2).";
//     echo "<br>";
// } else if ($num1 < $num2) {
//     echo "Antras skaičius ($num2) yra didesnis už pirmą skaičių ($num1).";
// } else {
//     echo "Abus skaičiai lygūs!";
// }


echo "<h2>Antra užduotis</h2>";


for ($i=1; $i<11; $i++){
    echo $i;
    echo "<br>";
}


echo "<h2>Trečia užduotis</h2>";

// for ($i=1; $i<11; $i++){
// if ($i % 2 == 0){
//     echo $i;
//     echo "<br>";
// }
// }


echo "<h2>Ketvirta užduotis</h2>";

// for ($i=0; $i<5; $i++){
//     echo rand(1, 10);
//     echo "<br>";
// }


echo "<h2>Penkta užduotis</h2>";

    $i = 0;
    while ($i!=5){
    $i = rand(1, 10);
    echo $i;
    echo "<br>";
}

echo "<h2>Šešta užduotis</h2>";

    $array = [];

    while (count($array)<30){
        $num = rand(5, 25);
        array_push($array,$num);
    }
    var_dump($array);

    for ($i=1; $i<31; $i++){
        $num = rand(5, 25);
        array_push($array, $num);
    }
    var_dump($array);

    echo "<h2>Septinta užduotis</h2>";

    $array1 = [];
    while (count($array1)<rand(20, 30)){
        $num3 = rand(10, 30);
        array_push($array1, $num3);
    } 
    var_dump($array1);
    echo '<br>';
    echo 'Didžiausias masyvo elementas yra '.max($array1);


    echo "<h2>Aštunta užduotis</h2>";

    $letters = 'ABCD';
    $randletter = [];

    for ($i = 0; $i < 20; $i++){
        array_push($randletter, $letters[rand(0, 3)]);
    }
    var_dump($randletter);
    echo '<br>';

    print_r(array_count_values($randletter));

    $A = 0;
    $B = 0;
    $C = 0;
    $D = 0;

    foreach ($randletter as $randlet){
        if ($randlet == 'A'){
            $A++;
        }else if ($randlet == 'B'){
            $B++;
        }else if ($randlet == 'C'){
            $C++;
        }else{
            $D++;
        }
    }

    echo "Raidžių kiekis masyve yra: A: $A, B: $B, C: $C, D: $D";


    echo "<h2>Devinta užduotis</h2>";
    // 9. Parašyti funkciją pirminisSkaicius. Funkcija turi vieną kintamąjį. Turi būti patikrinimas, kad kintamasis yra skaičius. Funkcija turi grąžinti ar pateiktas skaičius yra pirminis( pirminis
    // // skaičius yra tas, kuris dalinasi tik iš savęs ir tik iš vieneto be liekanos.)


    function pirminisSkaicius($n){
        if(is_int($n)){
            if ($n == 1){
                return "Number is not a prime";
                } else {
                    $count = 0;
                    for ($i=1; $i<=$n; $i++){
                        if (($n % $i)==0) {
                            $count++;                    
                        } 
                    } 
                    if ($count < 3){
                        return "Number is a prime";
                    }else {
                        return "Number is not a prime";
                    }
                }            
            } else {
            return "Variable is not a number";
        }
    }

    echo pirminisSkaicius(1);


    



// <!-- 1. Palyginti du skaičius a ir b. Išvesti į konsolę, kuris didesnis arba jie lygūs.
// 2. Naudojant ciklą, išvesti į konsolę skaičius nuo 1 iki 10.
// 3. Naudojant ciklą, išvesti į konsolę skaičius nuo 0, 2, 4, 6, 8, 10.
// 4. Naudojant ciklą, sugeneruoti penkis atsitiktinius skaičius nuo 1 iki 10. Išvesti juos konsolėje.
// 5. Naudojant ciklą, spausdinti atsitiktinius skaičius nuo 1 iki 10. Paskutinis atspausdintas skaičius turi būti 5.
// 6. Sukurti masyvą, kurio ilgis 30, o reikšmės atsitiktiniai skaičiai nuo 5 iki 25.
// 7. Sukurti masyvą, kurio ilgis būtų atsitiktinis nuo 20 iki 30, o reikšmės būtų skaičiai nuo 10 iki 30. Surasti didžiausią masyvo reikšmę, nenaudojant sort funkcijos.
// 8. Sugeneruokite masyvą, kurio reikšmės atsitiktinės raidės A, B, C ir D, o ilgis 20. Suskaičiuokite kiek yra kiekvienos raidės.
//
// 10. Padaryti GET formą su vienu įvedimo laukeliu ir puslapio kvietimu į save. Įvedimas turi būti šešiaženklis skaičius. Gavę kintamąjį pakeiskite puslapio fono spalvą į kintamojo reikšmę.
// 11. Padaryti POST formą su vienu įvedimo laukeliu. Puslapis kreipiasi pats į save. Kintamieji turi patikrinti ar gauta reiškmė lygi 1 ir nukreipti į index1.php, jei lygi 2 nukreipti į index2.php, jei kitokia - grąžinti atgal ir išvesti, kad įvestas skaičius nėra nei vienetas, nei dvejetas.
// 12. Padaryti POST formą su vienu įvedimo laukeliu ir kreipumusi į puslapį slaptas.php. Slaptas.php turi patikrinti ar įvestas reikiamas slaptas žodis ir ar kreipimosi metodas yra POST. Jei taip, leidžia peržiūrėti slaptas.php turinį. Jei ne, gražina atgal į pradinį puslapį. -->



?>

<?php 

if(empty($_GET['number'])){
    $color = "";
}else{
    $color = $_GET['number'];
}

?>

<?php 

$warning = "";

if ($_POST){
    if ($_POST['number1'] == 1){
        header("Location: http://localhost/practice/jan28/index1.php");
    } else if ($_POST['number1'] == 2){
        header("Location: http://localhost/practice/jan28/index2.php");
    } else {
        $warning = "Įvestas skaičius nėra nei vienetas, nei dvejetas!";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: <?php echo "#".$color ?>">
    
<?php echo "<h2>Dešimta užduotis</h2>"; ?>
<form action="#" method="GET">
    <label for="number">Įveskite šešių skaičių kombinaciją:</label>
    <input type="number" name="number" min="100000" max="999999">
    <input type="submit">
</form>


<?php echo "<h2>Vienuolikta užduotis</h2>"; ?>
<p><?php echo $warning; ?></p>

<form action="#" method="POST">
    <label for="number">Įveskite skaičių:</label>
    <input type="number" name="number1" >
    <input type="submit">
</form>

<?php echo "<h2>Dvylikta užduotis</h2>"; ?>

<p><?php 

if(empty($_GET['error'])){
    echo "Raktažodis neįvestas";
} else if ($_GET['error'] == 1) {
    echo "Raktazodis neteisingas";
}

?></p>
<form action="http://localhost/practice/jan28/slaptas.php" method="POST">
    <label for="password">Įveskite raktažodį:</label>
    <input type="password" name="pass" >
    <input type="submit">
</form>

</body>
</html>