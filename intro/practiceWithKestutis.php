<?php 
/*1. Sukurkite 4 kintamuosius, kurie saugotų jūsų vardą, pavardę, gimimo metus ir šiuos 
metus (nebūtinai tikrus). Parašykite kodą, kuris pagal gimimo metus paskaičiuotų jūsų 
amžių ir naudodamas vardo ir pavardės kintamuosius atspausdintų tokį sakinį :
"Aš esu Vardenis Pavardenis. Man yra XX metai(ų)". */

$firstName = 'Ričardas';
$lastName = 'Jasas';
$birthday = 1990;
$today = date('Y');
$age = $today - $birthday;

// var_dump($age);

echo 'Aš esu '.$firstName.' '.$lastName.'. Man yra '.$age.' metai';

echo '<br>';
// 2. Naudokite funkcija rand(). Sukurkite du kintamuosius ir naudodamiesi funkcija rand()
// jiems priskirkite atsitiktines reikšmes nuo 0 iki 4. Didesnę reikšmę padalinkite iš 
// mažesnės. Atspausdinkite rezultatą jį suapvalinę iki 2 skaičių po kablelio

$number = rand(0, 4);
$number1 = rand(0, 4);

if ($number<$number1 && $number !=0){
    echo round(($number1/$number),2);
} else if ($number1<$number && $number1 !=0){
    echo round(($number/$number1),2);
} else if ($number1==$number){
    echo 'Skaičiai vienodi';
} else {
    echo 'Kažkuris skaičius yra 0';
}
echo '<br>';
// 3. Naudokite funkcija rand(). Sukurkite tris kintamuosius ir naudodamiesi funkcija rand()
// jiems priskirkite atsitiktines reikšmes nuo 0 iki 25. Raskite ir atspausdinkite kintąmąjį 
// turintį vidurinę reikšmę.

$a = 1;
$b = 2;
$c = 1;
// echo '<br>';
// echo '<br>';
// echo $a;
// echo '<br>';
// echo $b;
// echo '<br>';
// echo $c;
// echo '<br>';
// echo '<br>';


if (($a>=$b && $a<=$c)||($a<=$b && $a>=$c)){
    echo $a;
} else if (($b>=$a && $b<=$c)||($b<=$a && $b>=$c)){
    echo $b;
} else if (($c>=$a && $c<=$b)||($c<=$a && $c>=$b)){
    echo $c;
} 
echo '<br>';
echo '<br>';

// 4. Įvedami skaičiai -a, b, c –kraštinių ilgiai, trys kintamieji (naudokite rand() funkcija nuo 1 
// iki 10). Parašykite PHP programą, kuri nustatytų, ar galima sudaryti trikampį ir atsakymą 
// atspausdintų.

$krastineA = rand(0, 10);
$krastineB = rand(0, 10);
$krastineC = rand(0, 10);

if($krastineA+$krastineB>$krastineC && $krastineB+$krastineC>$krastineA && $krastineC+$krastineB>$krastineA){
    echo "Trikampis gausis";
} else {
    echo "Trikampis nesigaus";
}

echo '<br>';
echo '<br>';

// 5. Sukurkite keturis kintamuosius ir rand() funkcija sugeneruokite jiems
// reikšmes nuo 0 iki 2. Suskaičiuokite kiek yra nulių, vienetų ir dvejetų. (sprendimui 
// masyvo nenaudoti).

$kint1 = rand(0, 2);
$kint2 = rand(0, 2);
$kint3 = rand(0, 2);
$kint4 = rand(0, 2);

$sk1 = 0;
$sk2 = 0;
$sk3 = 0;

if ($kint1==0){
    $sk1++;
} else if ($kint1==1){
    $sk2++;
} else {
    $sk3++;
}

if ($kint2==0){
    $sk1++;
} else if ($kint2==1){
    $sk2++;
} else {
    $sk3++;
}

if ($kint3==0){
    $sk1++;
} else if ($kint3==1){
    $sk2++;
} else {
    $sk3++;
}

if ($kint4==0){
    $sk1++;
} else if ($kint4==1){
    $sk2++;
} else {
    $sk3++;
}

echo "Nuliu yra: ".$sk1.", vienetu yra: ".$sk2.", dvejetu yra: ".$sk3;

echo '<br>';
echo '<br>';

// 6. Naudokite funkcija rand(). Sugeneruokite atsitiktinį skaičių nuo 1 iki 6 ir jį atspausdinkite 
// atitinkame h tage. Pvz skaičius 3- rezultatas: <h3>3</h3>

$skaicius = rand(1, 6);

echo "<h3>".$skaicius."</h3>";
echo '<br>';
echo '<br>';
// 7. Naudokite funkcija rand(). Atspausdinkite 3 skaičius nuo -10 iki 10. Skaičiai mažesni už 
// 0 turi būti žali, 0 - raudonas, didesni už 0 mėlyni.

$spalvotas = rand(-10, 10);
$spalvotas1 = rand(-10, 10);
$spalvotas2 = rand(-10, 10);

if ($spalvotas<0){
    echo "<font color=green>$spalvotas</font>";
} else if ($spalvotas==0){
    echo "<font color=red>$spalvotas</font>";
} else if ($spalvotas>0){
    echo "<font color=blue>$spalvotas</font>";
}
echo '<br>';
if ($spalvotas1<0){
    echo "<font color=green>$spalvotas1</font>";
} else if ($spalvotas1==0){
    echo "<font color=red>$spalvotas1</font>";
} else if ($spalvotas1>0){
    echo "<font color=blue>$spalvotas1</font>";
}
echo '<br>';
if ($spalvotas2<0){
    echo "<font color=green>$spalvotas2</font>";
} else if ($spalvotas2==0){
    echo "<font color=red>$spalvotas2</font>";
} else if ($spalvotas2>0){
    echo "<font color=blue>$spalvotas2</font>";
}

echo '<br>';
echo '<br>';

// 8. Įmonė parduoda žvakes po 1 EUR. Perkant daugiau kaip už 1000 EUR taikoma 3 % 
// nuolaida, daugiau kaip už 2000 EUR - 4 % nuolaida. Parašykite programą, kuri skaičiuos 
// žvakių kainą ir atspausdintų atsakymą kiek žvakių ir kokia kaina perkama. Žvakių kiekį 
// generuokite rand() funkcija nuo 5 iki 3000.

$kiekis = rand(5, 3000);

if ($kiekis > 2000) {
    $kaina = $kiekis * 0.96;
    echo "Perkamas kiekis yra: $kiekis, bendra kaina: $kaina";
} else if ($kiekis > 1000){
    $kaina = $kiekis * 0.97;
    echo "Perkamas kiekis yra: $kiekis, bendra kaina: $kaina";
} else {
    echo "Perkamas kiekis yra: $kiekis, bendra kaina: $kiekis";
}

echo '<br>';
echo '<br>';

// 9. Naudokite funkcija rand(). Sukurkite tris kintamuosius su atsitiktinėm reikšmėm nuo 0 iki 
// 100. Paskaičiuokite jų aritmetinį vidurkį. Ir aritmetinį vidurkį atmetus tas reikšmes, 
// kurios yra mažesnės nei 10 arba didesnės nei 90. Abu vidurkius atspausdinkite. 
// Rezultatus apvalinkite iki sveiko skaičiaus.

$reiksme1 = rand(0, 100);
$reiksme2 = rand(0, 100);
$reiksme3 = rand(0, 100);

$vidurkis = ($reiksme1+$reiksme2+$reiksme3)/3;
echo "Skaiciai yra: $reiksme1, $reiksme2, $reiksme3";
echo '<br>';
echo "Ju vidurkis yra: $vidurkis";
echo '<br>';
$suma = 0;
$reiksmiuKiekis = 0;
if ($reiksme1 >= 10 && $reiksme1 <= 90){
    $suma += $reiksme1;
    $reiksmiuKiekis++;
}

if ($reiksme2 >= 10 && $reiksme2 <= 90){
    $suma += $reiksme2;
    $reiksmiuKiekis++;
}

if ($reiksme3 >= 10 && $reiksme3 <= 90){
    $suma += $reiksme3;
    $reiksmiuKiekis++;
}

if ($reiksmiuKiekis !==0){
    $vidurkis2 = round($suma/$reiksmiuKiekis);
    echo "Skaiciu vidurkis atmetus reiksmes mazesnes uz 10 ir didesnes uz 90 yra: $vidurkis2";
} else {
    echo 'Visi trys skaiciai yra mazesni uz 10 arba didesni uz 90';
}

echo '<br>';
echo '<br>';

// 10. Padarykite skaitmeninį laikrodį, rodantį valandas, minutes ir sekundes. Valandom, 
// minutėm ir sekundėm sugeneruoti panaudokite funkciją rand(). Sugeneruokite skaičių 
// nuo 0 iki 300. Tai papildomos sekundės. Skaičių pridėkite prie jau sugeneruoto laiko. 
// Atspausdinkite laikrodį prieš ir po sekundžių pridėjimo ir pridedamų sekundžių skaičių





// 1. Sugeneruokite masyvą iš 10 elementų, kurio elementai būtų masyvai iš 5 elementų su 
// reikšmėmis nuo 5 iki 25.

$mainArray = [
    $firstArray = [
        "pirmas" => rand(5, 25),
        "antras" => rand(5, 25),
        "trecias" => rand(5, 25),
        "ketvirtas" => rand(5, 25),
        "penktas" => rand(5, 25),
    ],
    $secondArray = [
        "pirmas" => rand(5, 25),
        "antras" => rand(5, 25),
        "trecias" => rand(5, 25),
        "ketvirtas" => rand(5, 25),
        "penktas" => rand(5, 25),
    ],
];

var_dump($mainArray);


// 2. Naudodamiesi 1 uždavinio masyvu:
// a. Suskaičiuokite kiek masyve yra elementų didesnių už 10;
// b. Raskite didžiausio elemento reikšmę;
// c. Suskaičiuokite kiekvieno antro lygio masyvų su vienodais indeksais sumas (t.y. 
// suma reikšmių turinčių indeksą 0, 1 ir t.t.)
// d. Visus masyvus “pailginkite” iki 7 elementų
// e. Suskaičiuokite kiekvieno iš antro lygio masyvų elementų sumą atskirai ir sumas 
// panaudokite kaip reikšmes sukuriant naują masyvą. T.y. pirma naujo masyvo 
// reikšmė turi būti lygi mažesnio masyvo, turinčio indeksą 0 dideliame masyve, 
// visų elementų sumai
// 3. Sukurkite masyvą iš 10 elementų. Kiekvienas masyvo elementas turi būti masyvas su 
// atsitiktiniu kiekiu nuo 2 iki 20 elementų. Elementų reikšmės atsitiktinai parinktos raidės 
// iš intervalo A-Z. Išrūšiuokite antro lygio masyvus pagal abėcėlę (t.y. tuos kur su raidėm).
// 4. Išrūšiuokite trečio uždavinio pirmo lygio masyvą taip, kad elementai kurių masyvai 
// trumpiausi eitų pradžioje. Masyvai kurie turi bent vieną “K” raidę, visada būtų didžiojo 
// masyvo visai pradžioje.
// 5. Sukurkite masyvą iš 10 elementų. Masyvo reikšmes užpildykite pagal taisyklę: 
// generuokite skaičių nuo 0 iki 5. Ir sukurkite tokio ilgio masyvą. Jeigu reikšmė yra 0 
// masyvo nekurkite. Antro lygio masyvo reikšmes užpildykite atsitiktiniais skaičiais nuo 0 
// iki 10. Ten kur masyvo nekūrėte reikšmę nuo 0 iki 10 įrašykite tiesiogiai.
// 6. Paskaičiuokite 5 uždavinio masyvo visų reikšmių sumą ir išrūšiuokite masyvą taip, kad 
// pirmiausiai eitų mažiausios masyvo reikšmės arba jeigu reikšmė yra masyvas, to masyvo 
// reikšmių sumos.
// 7. Sukurkite masyvą iš 10 elementų. Jo reikšmės masyvai iš 10 elementų. Antro lygio 
// masyvų reikšmės masyvai su dviem elementais value ir color. Reikšmė value vienas iš 
// atsitiktinai parinktų simbolių: #%+*@裡, o reikšmė color atsitiktinai sugeneruota spalva 
// formatu: #XXXXXX. Pasinaudoję masyvų atspausdinkite “kvadratą” kurį sudarytų 
// masyvo reikšmės nuspalvintos spalva color.
// 8. Sugeneruokite 101 elemento masyvą su atsitiktiniais skaičiais nuo 0 iki 300. Reikšmes 
// kurios tame masyve yra ne unikalios pergeneruokite iš naujo taip, kad visos reikšmės 
// masyve būtų unikalios. Išrūšiuokite masyvą taip, kad jo didžiausia reikšmė būtų masyvo 
// viduryje, o einant nuo jos link masyvo pradžios ir pabaigos reikšmės mažėtų. 
// Paskaičiuokite pirmos ir antros masyvo dalies sumas (neskaičiuojant vidurinės). Jeigu 
// sumų skirtumas (modulis, absoliutus dydis) yra didesnis nei | 30 | rūšiavimą kartokite. 
// (Kad sumos nesiskirtų viena nuo kitos daugiau nei per 30)


?>
