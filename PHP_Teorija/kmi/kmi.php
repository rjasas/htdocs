<?php 

$ugis = $svoris = $kmi = $firstResult = "";
if ($_GET){
    $ugis = $_GET['ugis'];
    $svoris = $_GET['svoris'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KMI</title>
</head>
<body>
    
<h2>Jūsų KMI (kūno masės indeksas</h2>

<form method="$_GET">
    <label for="weight">Jūsų svoris:</label>
    <input type="text" name="svoris">
    <br>
    <label for="height">Jūsų ūgis:</label>
    <input type="text" name="ugis">
    <br>
    <input type="submit">
</form>

</body>
</html>

<?php 
$kmi = $svoris/(($ugis*$ugis));
echo $kmi;
if ($kmi<18.5){
    echo "<tr><td style= width 60 px; height 60 px; background-color: red;>Jūsų svoris nepakankamas</td></tr>";
} else if ($kmi>=18.50 && $kmi<25){
    echo "<tr><td style= width 60 px; height 60 px; background-color: green;>Jūsų svoris normalus</td></tr>";
} else if ($kmi>=25 && $kmi<30){
    echo "<tr><td style= width 60 px; height 60 px; background-color: yellow;>Jūs turite ansvorį</td></tr>";
} else if ($kmi>=30){
    echo "<tr><td style= width 60 px; height 60 px; background-color: red;>Nutukimas!</td></tr>";
}

?>

<!-- Pavyzdžiui:

Svoris:60kg
Ūgis: 1,55m.

Skačiavimas:

1) 60kg/1,55m = 38,7.
2) 38,7/1,55m = 24,9.

Atsakymas: KMI= 24,9 (Normalus) -->



<!-- KMI	Reikšmė
mažiau kaip 18.5	nepakankamas svoris
18.5 ir daugiau, mažiau kaip 25	normalus svoris
25 ir daugiau, mažiau kaip 30	antsvoris
30 ir daugiau	nutukimas -->