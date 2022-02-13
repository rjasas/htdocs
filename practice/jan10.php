<?php
// TASK1 List of colors
$colors = [
    "red",
    "green",
    "blue",
];

//Task2 facts about countries

$countries = [
    "Lithuania" => "Vilnius",
    "Italy" => "Rome",
    "Sweden" => "Stockhol",
    "Latvia" => "Riga",
    "Poland" => "Warsaw",
    "Germany" => "Berlin",
];

//Task3 average temperature five highest and five lowest temperatures.

$monthTemp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73, 68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";

$tempArray = explode(", ", $monthTemp);
// var_dump($tempArray);
$tempArrayLength = count($tempArray);
// var_dump($tempArrayLength);
$totalTemp = 0;
foreach ($tempArray as $temp){
    $totalTemp += $temp;
    //$totalTemp += (int)$temp;
}
// var_dump($totalTemp);
$avgTemp = $totalTemp/$tempArrayLength;
// var_dump($avgTemp);

sort($tempArray);
// var_dump($tempArray);

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
    <h3>Task 1 Color list</h3>

    <ul>
        <?php
        foreach($colors as $color){
            echo "<li>$color</li>";
        }
        ?>
    </ul>

    <h3>Task 2 Capitals of Countries</h3>
    <?php 
    foreach($countries as $country => $capital){
        echo "<p> The capital of $country is $capital.</p>";
    }

    ?>
    <h3>Task 3 Average temperatures</h3>
    <?php echo "<p>Average temperature is $avgTemp.</p>";
    echo "<p>Five lowest temperatures are: ";
    for ($i = 0; $i<5; $i++){
        echo $tempArray[$i];
        if ($i == 4){
            echo ".</p>";
        } else {
            echo ", ";
        }
    }

    echo "<p>Five highest temperatures are: ";
    for ($i =($tempArrayLength-5); $i<$tempArrayLength; $i++){
    echo $tempArray[$i];
        if ($i == $tempArrayLength-1){
            echo ".</p>";
        } else {
            echo ", ";
        }
    }
    // Sukurkite asocijuota masyva su 5 asmenimis ir ju amziumi. Ispausdinkite kiekvieno asmens varda ir jo amziu i html.
    // Suraskite jauniausia ir seniausia asmeni
    // Suraskite amziaus vidurki
    // Padarykite lentele, kur butu Vardas, Amzius ir Gimimo metai. Metai turi buti suskaiciuoti!!!

    $asmenys = [
        "Jonas" => "18",
        "Petras" => "28",
        "Juozas" => "22",
        "Saulius" => "35",
        "Algis" => "33",
    ];

    foreach($asmenys as $asmuo => $amzius){
        echo "<h4>Vardas: $asmuo, amžius: $amzius</h4>";
    }

    echo "--------------------------------";

    // asort($asmenys);

    // $jauniausiasName = array_key_first($asmenys);
    // $jauniausiasAmzius = reset($asmenys);
    // echo "<p>Jauniausias asmuo yra $jauniausiasName ir jo amžius yra $jauniausiasAmzius metai/ų.</p>";

    // $vyriausiasName = array_key_last($asmenys);
    // $vyriausiasAmzius = end($asmenys);
    // echo "<p>Vyriausias asmuo yra $vyriausiasName ir jo amžius yra $vyriausiasAmzius metai/ų.</p>";

    echo "<p>Vyriausias asmuo yra ".array_search(max($asmenys), $asmenys).", ".max($asmenys)."</p>"; 
    echo "<p>Jauniausias asmuo yra ".array_search(min($asmenys), $asmenys).", ".min($asmenys)."</p>";

    $avgAge = array_sum($asmenys)/count($asmenys);
    echo "<p>Vidutinis amzius yra: $avgAge metu.";

    ?>

    <table>
        <tr>
            <th>Vardas</th>
            <th>Amzius</th>
            <th>Gimimo metai</th>
        </tr>
        <?php foreach ($asmenys as $asmuo => $amzius){
            $birthYear = date('Y') - $amzius;
            echo "<tr><td>$asmuo</td><td>$amzius</td><td>$birthYear</td></tr>";
        } ?>
    </table>




</body>
</html>