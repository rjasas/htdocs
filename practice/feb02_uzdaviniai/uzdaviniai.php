<?php 

// echo "<h2>Pirma užduotis</h2>";
// 1. Sugeneruoti keturis atsitiktinius skaičius nuo 0 iki 100. Atspausdinti juos į ekraną.

// for ($i=0; $i<4; $i++){
//     echo rand(0, 100);
//     echo "<br>";
// }


// echo "<h2>Antra užduotis</h2>";
// 2. Sugeneruoti keturis atsitiktinius skaičius nuo 0 iki 100. Išvesti juos į ekraną. Visus 

//     $a = rand(0, 100);
//     $b = rand(0, 100);
//     $c = rand(0, 100);
//     $d = rand(0, 100);
//     echo 'a='.$a.' b='.$b.' c='.$c.' d='.$d.'<br>';

//         if ($a % 2 !== 0){
//             $a = $a * 2;
           
//         }
//         if ($b % 2 !== 0){
//             $b = $b * 2;
            
//         }
//         if ($c % 2 !== 0){
//             $c = $c * 2;
            
//         }
//         if ($d % 2 !== 0){
//             $d = $d * 2;
            
//         }
//         echo 'a='.$a.' b='.$b.' c='.$c.' d='.$d.'<br>';



    echo "<h2>Trečia užduotis</h2>";
    // 3. Sugeneruoti atsitiktinį skaičių nuo 1 iki 7. Atitinkamai pagal skaičių parašyti kokia tai savaitės diena.

    // $day = rand(1, 7);
    // if ($day == 1){
    //     echo 'Pirmadienis';
    // }if ($day == 2){
    //     echo "Antradienis";
    // }if ($day == 3){
    //     echo 'Trečiadienis';
    // }if ($day == 4){
    //     echo "Ketvirtadienis";
    // }if ($day == 5){
    //     echo 'Penktadienis';
    // }if ($day == 6){
    //     echo "Šeštadienis";
    // }if ($day == 7){
    //     echo 'Sekmadienis';
    // }    

    echo "<h2>Ketvirta užduotis</h2>";
    //     4. Trečią uždavinį perdaryti taip, kad rodytų, kokia tai savaitės diena (1-5 – darbo diena, 6-7 
    // – savaitgalis).

    // $day = rand(1, 7);
    // if ($day == 1){
    //     echo 'Pirmadienis - darbo diena';
    // }if ($day == 2){
    //     echo 'Antradienis - darbo diena';
    // }if ($day == 3){
    //     echo 'Trečiadienis - darbo diena';
    // }if ($day == 4){
    //     echo 'Ketvirtadienis - darbo diena';
    // }if ($day == 5){
    //     echo 'Penktadienis - darbo diena';
    // }if ($day == 6){
    //     echo 'Šeštadienis - laisvadienis';
    // }if ($day == 7){
    //     echo 'Sekmadienis - laisvadienis';
    // }  


    echo "<h2>Penkta užduotis</h2>";
    //     5. Sugeneruoti keturis atsitiktinius skaičius nuo 0 iki 100. Skaičiai dalūs iš 3 turi būti 
    // atvaizduoti žaliai, turintys dalybos iš trijų liekaną vienetą – geltonai, turintys dalybos iš 
    // trijų liekaną dvejetą – raudonai.

    // for($i=0; $i<4; $i++){
    //     $num = rand(0, 100);

    //     if ($num%3 == 0){
    //         echo "<span style=\"color: green;\">$num</span>";
    //         echo "<br>";
    //     } else if ($num%3 == 1){
    //         echo "<span style=\"color: yellow;\">$num</span>";
    //         echo "<br>";
    //     } else if ($num%3 == 2){
    //         echo "<span style=\"color: red;\">$num</span>";
    //         echo "<br>";
    //     }
    // }

    echo "<h2>Šešta užduotis</h2>";
    // 6. Išvesti į ekraną skaičius nuo 0 iki 100.

    // for ($i=0; $i<101; $i++){
    //     echo $i;
    //     echo "<br>";
    // }

    echo "<h2>Septinta užduotis</h2>";
    // 7. Išvesti į ekraną visus lyginius skaičius nuo 0 iki 200.

    // for($i=0; $i<201; $i++){
    //     if ($i %2 == 0){
    //         echo $i;
    //         echo "<br>";
    //     }
    // }

    echo "<h2>Aštunta užduotis</h2>";
    //     8. Septinto uždavinio sąlygoje atspausdintus skaičius „pataisyti“, kad dalūs iš 6 būtų 
    // atvaizduoti mėlynai.

    // for($i=0; $i<201; $i++){        
    //     if($i!=0 && $i%6==0){
    //         echo "<span style=\"color: yellow;\">$i</span>";
    //         echo "<br>";
    //     } else {
    //         echo $i;
    //     }
    // }

    echo "<h2>Devinta užduotis</h2>";
    // 9. Generuoti atsitiktinius skaičius nuo 1 iki 50 tol, kol sugeneruotas skaičius bus dalus iš 5.+

    // $num = -1;

    // while ($num%5!=0){
    //     $num = rand(1,50);
    //     echo $num;
    //     echo "<br>";
    // }
    

    echo "<h2>Dešimta užduotis</h2>";
    //     10. Generuoti atsitiktinius skaičius nuo 1 iki 100 tol, kol sugeneruotas skaičius bus dalus iš 5
    // arba iš 11.
    
    //  $num = -1;

    // while ($num%5!=0 && $num%11!=0){
    //     $num = rand(1, 100);
    //     echo $num;
    //     echo "<br>";
    // }


    echo "<h2>Vienuolikta užduotis</h2>";
    // 11. Generuoti atsitiktinius skaičius nuo 1 iki 10 tol, kol jų suma bus lygi arba didesnė 150.

    // $sum = 0;

    // while ($sum<=150){
    //     $i = rand(1, 10);
    //     $sum = $sum + $i;
    // }
    // echo $sum;
        

    echo "<h2>Dvylikta užduotis</h2>";
    // 12. Generuoti atsitiktinius skaičius nuo 1 iki 10 tol, kol jų suma bus lygi arba didesnė 120. Suskaičiuoti kiek skaičių buvo sugeneruota.

    // $sum = 0;
    // $sk = 0;

    // while ($sum<=120){
    //     $i = rand(1, 10);
    //     $sum = $sum + $i;
    //     $sk++;
    // }  
    // echo $sk;
    // echo "<br>";

    
    echo "<h2>Trylikta užduotis</h2>";
    // 13. Generuoti atsitiktinius skaičius nuo 1 iki 15 tol, kol jų suma bus lygi arba didesnė 175.
    // Surasti didžiausią ir mažiausią skaičių.

    // $sum = 0;
    // $arr = [];

    // while ($sum<=175){
    //     $i = rand(1, 10);                    
    //     $sum = $sum + $i;
    //     array_push($arr, $i);
    // }
    
    // echo min($arr);
    // echo "<br>";
    // echo max($arr);
   
    



    echo "<h2>Keturiolikta užduotis</h2>";
    // 14. Generuoti atsitiktinius skaičius nuo 1 iki 15 tol, kol jų suma bus lygi arba didesnė 200.
    // Surasti skaičių vidurkį.

    // $sum2 = 0;
    // $kiekis = 0;

    // while($sum2<=200){
    //     $i = rand(1, 10);
    //     $sum2 = $sum2 + $i;
    //     $kiekis++;
    // }
    // $vidurkis = $sum2/$kiekis;
    // echo $vidurkis;
    // echo "<br>";
    // echo $sum2;
    // echo "<br>";
    // echo $kiekis;


    echo "<h2>Penkiolikta užduotis</h2>";
    // 15. Sukurti masyvą, kurio ilgis būtų 100, o reikšmės – skaičiai nuo 1 iki 100.

    // $arr = [];

    // for ($i=0; $i<=100; $i++){
    //     array_push($arr, $i);
    // }
    // print_r($arr);
    // echo "<br>";


    echo "<h2>Šešiolikta užduotis</h2>";
    // 16. Sukurti masyvą, kurio ilgis būtų 100, o reikšmės – atsitiktiniai skaičiai nuo 10 iki 25.

    // $arr = [];

    // for ($i=0; $i<=100; $i++){
    //     array_push($arr, rand(10, 25));        
    // }
    // print_r($arr);
    // echo "<br>";


    echo "<h2>Septyniolikta užduotis</h2>";
    // 17. Sukurti atsitiktinio ilgio masyvą, nuo 40 iki 60, kurio reikšmės būtų skaičiai nuo 1 iki 
    // masyvo ilgio.

    // $randm = rand(40, 60);
    // $arr = [];

    // for($i=0; $i<$randm; $i++){
    //     array_push($arr, rand(1, $randm-1));
    // }
    // print_r($arr);

    echo "<h2Aštoniolikta užduotis</h2>";
    // 18. Sukurti atsitiktinio ilgio masyva, kurio ilgis nuo 80 iki 120, o reikšmės – atsitiktiniai skaičiai 
    // nuo 5 iki 47.

    // $arr = [];
    
    //     for ($i=1; $i<=rand(80, 120); $i++){
    //         $arr = rand(5, 47);
    //     }
    
    // print_r($arr);


    echo "<h2>Devyniolikta užduotis</h2>";
    // 19. Sukurti masyvą, kurio ilgis 100, o reikšmės – raidės D, E, F, G, H.

    // $arr = [];
    // $letters = 'DEFGH';

    // for($i=0; $i<100; $i++){
    //     array_push($arr, $letters);
    // }

    // print_r($arr);

    echo "<h2>Dvidešimta užduotis</h2>";
    // 20. Sukurti masyvą, kurio ilgis 100, o reikšmės – raidės M,N,O,P. Suskaičiuoti, kurios raidės 
    // buvo daugiausia.

        // $arr = [];
        // $letters = ['M','N','O','P'];
        // $m = $n = $o = $p = 0;

        // for($i=0; $i<101; $i++){
        //     array_push($arr, $letters[rand(0, 3)]);
        // }
        // for($i=0; $i<count($arr); $i++){
        //     if ($arr[$i] == 'M'){
        //         $m++;
        //     }else if($arr[$i] == 'N'){
        //         $n++;
        //     }else if($arr[$i] == 'O'){
        //         $o++;
        //     }else if($arr[$i] == 'P'){
        //         $p++;
        //     } else {
        //     }
        // }
        
        // echo $m;
        // echo "<br>";
        // echo $n;
        // echo "<br>";
        // echo $o;
        // echo "<br>";
        // echo $p;
        // echo "<br>";

        // if ($m>$n && $m>$o && $m>$p){
        //     echo 'Daugiausiai raidžių yra "M" ir jų kiekis yra: '.$m;
        // }else if ($n>$m && $n>$o && $n>$p){
        //     echo 'Daugiausiai raidžių yra "N" ir jų kiekis yra: '.$n;
        // }else if ($o>$n && $o>$m && $o>$p){
        //     echo 'Daugiausiai raidžių yra "O" ir jų kiekis yra: '.$o;
        // }else if ($p>$n && $p>$o && $p>$m){
        //     echo 'Daugiausiai raidžių yra "P" ir jų kiekis yra: '.$p;
        // } else {
        //     echo "Yra vienodas raidžių kiekis";
        // }

    // print_r($arr);


    echo "<h2>21 užduotis</h2>";
    // 21. Sugeneruoti masyvą, kurio ilgis 100, o reikšmės – masyvai, kurių ilgis 10, o reikšmės 
    // skaičiai nuo 1 iki 10 ([1,2,3,4,5,6,7,8,9,10]).

    // $arr = [];
    
    // for ($i=0; $i<100; $i++){
    //     for($x=0; $x<10; $x++){
    //         $arr[$i][$x]=$x+1;
    //     }
    // }
    // echo '<pre>';
    // print_r($arr);


    echo "<h2>22 užduotis</h2>";
    // 22. Sugeneruoti masyvą, kurio ilgis 100, o reikšmės – masyvai, kurių ilgis 10, o reikšmės 
    // atsitiktiniai skaičiai nuo 1 iki 17.

    // $arr = [];

    // for($i=0; $i<100; $i++){
    //     for($x=0; $x<10; $x++){
    //         $arr[$i][$x]=rand(1, 17);
    //     }
    // }
    // echo '<pre>';
    // print_r($arr);


    echo "<h2>23 užduotis</h2>";
    // 23. Sugeneruoti masyvą, kurio ilgis 100, o reikšmės – masyvai, kurių ilgis atsitiktinis nuo 5 iki 
    // 18, o reikšmės – skaičiai nuo 1 iki masyvo ilgio.

    // $arr = [];
    // $arr1 = rand(5,18);

    // for($i=0; $i<100; $i++){
    //     for($x=0; $x<$arr1; $x++){
    //         $arr[$i][$x]=$arr1;
    //     }
    // }
    // echo '<pre>';
    // print_r($arr);


    echo "<h2>24 užduotis</h2>";
    // 24. Sugeneruoti masyvą, kurio ilgis 100, o reikšmės – masyvai, kurių ilgis atsitiktinis nuo 5 iki 
    // 18, o reikšmės – atsitiktiniai skaičiai nuo 5 iki 30.

    // $arr = [];
    // $arr1 = rand(5,18);

    // for($i=0; $i<100; $i++){
    //     for($x=0; $x<$arr1; $x++){
    //         $arr[$i][$x]=rand(5, 30);
    //     }
    // }
    // echo '<pre>';
    // print_r($arr);


    echo "<h2>25 užduotis</h2>";
    // 25. Sugeneruoti masyvą, kurio ilgis 100, o reikšmės – masyvai, kurių ilgis atsitiktinis nuo 5 iki 
    // 18, o reikšmės – atsitiktiniai skaičiai nuo 5 iki 75. Surasti didžiausią skaičių visame didžiajame 
    // masyve.
    

    // $arr1 = [];
    // $sk = [];

    // for($i=0; $i<100; $i++){
    //     for($x=0; $x<rand(5, 18); $x++){
    //         $arr1[$i][$x]=rand(5, 75);
    //     }
    // }

    // foreach ($arr1 as $masyvai){
    //     array_push($sk, max($masyvai));
    // }
    
    // // echo '<pre>';
    // // print_r($arr1);
    // echo "<br>";
    // echo 'Didžiausias skaičius yra:'.max($sk);


    echo "<h2>26 užduotis</h2>";
    // 26. Sugeneruoti masyvą, kurio ilgis 100, o reikšmės – masyvai, kurių ilgis atsitiktinis nuo 5 iki 
    // 18, o reikšmės – atsitiktiniai skaičiai nuo 5 iki 75. Surasti mažiausią skaičių visame didžiajame 
    // masyve ir kiek kartų jis pasikartojo.

    // $arr2 = [];

    // for($i=0; $i<100; $i++){        
    //     for($x=0; $x<rand(5, 18); $x++){
    //         $arr2[$i][$x]=rand(5, 75);
    //     }
    // }

    // $minsk = [];

    // foreach($arr2 as $skaiciai){
    //     array_push($minsk, min($skaiciai));
    // }

    // echo "Minimaliausias skaicius yra: ".min($minsk);

    // $minimalus = min($minsk);
    // $kiekis = 0;

    // foreach($arr2 as $arr){
    //     foreach($arr as $number){
    //         if($number == $minimalus){
    //             $kiekis++;
    //         }            
    //     }
    // }
    // echo '<br>';
    // echo "Maziausiu skaiciu kiekis masyve yra: $kiekis";
    
    // echo '<pre>';
    // print_r($arr2);


    echo "<h2>27 užduotis</h2>";
    // 27. Sugeneruoti masyvą, kurio ilgis 100, o reikšmės – masyvai, kurių ilgis 10, o reikšmės 
    // atsitiktiniai skaičiai nuo 1 iki 17. Išrykiuoti vidinių masyvų reikšmes didėjančia tvarka.

    // $arr = [];

    // for($i=0; $i<100; $i++){
    //     for($x=0; $x<10; $x++){
    //         $arr[$i][$x]=rand(1, 17);
    //     }        
    // }

    // $sorted = [];

    // foreach($arr as $arry){
    //     sort($arry);
    //     array_push($sorted, $arry);
    // }
        
    // echo '<pre>';
    // print_r($sorted);


    echo "<h2>28 užduotis</h2>";
    // 28. Sugeneruoti masyvą, kurio ilgis 100, o reikšmės – masyvai, kurių ilgis 10, o reikšmės 
    // atsitiktiniai skaičiai nuo 1 iki 17. Perrikiuoti vidinius masyvus pagal vidinių masyvų reikšmių 
    // sumas didėjančia tvarka.

    // $arr = [];

    // for($i=0; $i<100; $i++){
    //     for($x=0; $x<10; $x++){
    //         $arr[$i][$x]=rand(1, 17);
    //     }        
    // }

    // for($i=0; $i<count($arr); $i++){
    //     for($x=0; $x<count($arr); $x++){
    //         if(array_sum($arr[$i])<array_sum($arr[$x])){
    //             $temp = $arr[$i];
    //             $arr[$i] = $arr[$x];
    //             $arr[$x] =  $temp;
    //         }
    //     }
    // }

    // foreach($arr as $arry){
    //     echo array_sum($arry)." ";
    // }

    // echo '<pre>';
    // print_r($arr);


    echo "<h2>29 užduotis</h2>";
    // 29. Sugeneruoti masyvą, kurio ilgis 100, o reikšmės – masyvai, kurių ilgis 10, o reikšmės 
    // atsitiktiniai skaičiai nuo 1 iki 17. Iš dvimačio masyvo sukurti vieną vienmatį masyvą – visas 
    // dvimačio masyvo masyvų reikšmes perkelti į naują masyvą.

    // $arr = [];

    // for($i=0; $i<100; $i++){
    //     for($x=0; $x<10; $x++){
    //         $arr[$i][$x]=rand(1, 17);
    //     }        
    // }

    // $newArray = [];

    // foreach($arr as $arr1){
    //     foreach($arr1 as $num){
    //         array_push($newArray, $num);
    //     }
    // }

    // $arr2[] = call_user_func_array('array_merge', $arr);

    // echo '<pre>';
    // print_r($newArray);


    echo "<h2>30 užduotis</h2>";
    // 30. Papildyti 29 uždavinį taip, kad surastų skaičių vidurkį ir palygintų jį su vidurinia reikšme, 
    // kuris didesnis. Jei elementų yra nelyginis skaičius, pvz 9, tai vidurinė reikšmė bus 5-as 
    // elementas, jei elementų yra lyginis skaičius, pvz 8, tai vidurinė reikšmė bus 4-os ir 5-os reikšmės 
    // aritmetinis vidurkis.

    // $average = array_sum($newArray)/count($newArray);
    // $mid = 0;

    // if(count($newArray)%2!=0){
    //     $mid = $newArray[floor(count($newArray)/2)];
    // } else {
    //     $mid = (($newArray[count($newArray)/2]) + ($newArray[(count($newArray)/2)-1]))/2;
    // }

    // if($average < $mid){
    //     echo "Vidurkis yra mazesnis uz vidurine reiksme.";
    // } else if($average > $mid){
    //     echo "Vidurkis yra didesnis uz vidurine reiksme.";
    // }else{
    //     echo "Abi reiksmes lygios.";
    // }

    // echo "<br>";
    // var_dump($mid);
    // echo "<br>";
    // echo $average;
    // echo "<br>";
    // echo '<pre>';
    // print_r($newArray);



    echo "<h2>31 užduotis</h2>";
    // 31. Parašykite funkciją, kurios argumentas būtų tekstas, kuris yra įterpiamas į h1 tagą.

    // function bigH($text) {
    //     echo '<h1>'.$text.'</h1>';
    // }

    // $text = "Hello world!";
    // bigH("Labas");
    

    echo "<h2>32 užduotis</h2>";
    // 32. Parašyti funkciją, kuri priima du kintamuosius. Patikrina ar jie yra skaičiai. Grąžina tų 
    // skaičių sumą.

    // $num1 = 2;
    // $num2 = 22;

    // function plius($num1, $num2){
    //     if(is_int($num1) && is_int($num2)){
    //         return $num1+$num2;
    //     } else {
    //         exit;
    //     }
    // }

    // echo plius($num1, $num2);


    echo "<h2>33 užduotis</h2>";
    // 33. Parašyti funkciją, kuri priima du kintamuosius. Patikrina ar jie yra skaičiai. Palygina tuos du 
    // skaičius ir grąžina rezultatą ar pirmas skaičius yra didesnis, ar antras, ar jie yra lygūs.

    // $num1 = rand(1, 10);
    // $num2 = rand(1, 10);

    // function size($num1, $num2){
    //     if(is_numeric($num1) && is_numeric($num2)){
    //         if($num1>$num2){
    //             return 'Skaičius: '.$num1.' yra didesnis už skaičių: '.$num2;
    //         } else if($num1<$num2){
    //             return 'Skaičius: '.$num1.' yra mažesnis už skaičių: '.$num2;
    //         } else {
    //             return "Abu skaičiai yra lygūs!";
    //         }
    //     } else {
    //         return "Reikšmės nėra skaičiai!";
    //     }
    // }

    // echo size($num1, $num2);


    echo "<h2>34 užduotis</h2>";
    // 34. Parašyti funkciją, kuri priimtų vieną kintamajį. Turi patikrinti ar tai yra skaičius ir ar tai yra 
    // keturženklis skaičius. Turi būti grąžinamas rezultatas ar tie metai yra keliemieji.

    // $year = rand(1000, 2040);
    // $year = 2100;

    // function year($year){
    //     if(is_int($year)){
    //         if(strlen($year)==4){
    //             if($year%400==0 || $year%100==0){
    //                 return "Metai nekeliamieji";
    //             } else if ($year%4==0){
    //                 return "Metai keliamieji";
    //             } else {
    //                 return "Metai nekeliamieji";
    //             }
    //         } else {
    //             return "Netinkamas metų ilgis";
    //         }
    //     } else {
    //         return "Reikšmė nėra skaičius!";            
    //     }
    // }
    // echo $year;
    // echo "<br>";
    // echo year($year);


    echo "<h2>35 užduotis</h2>";
    // 35. Parašyti funkciją, kuri priimtų vieną kintamajį. Turi būti patikrinimas ar tas kintamasis yra 
    // skaičius. Funkcija turi grąžinti skaičių, kur įvesto skaičiaus skaitmenys būtų išrikiuoti didėjimo 
    // tvarka.
        
    // function sk($sk){
    //     if(is_numeric($sk)){
    //        $temp = str_split($sk);
    //        sort($temp);
    //        $a = implode($temp);
    //        return $a;
    //     } else {
    //         return "Reikšmė nėra skaičius!";            
    //     }
    // }
    
    // echo sk("dasda");


    echo "<h2>36 užduotis</h2>";
    // 36. Parašykite funkciją, kuri skaičiuotų, iš kiek sveikų skaičių jos argumentas dalijasi be liekanos 
    // (išskyrus vienetą ir patį save) Argumentą užrašykite taip, kad būtų galima įvesti tik sveiką 
    // skaičių.

    // function counting($b){
    //     if(is_int($b)){
    //         $count = 0;
    //         for($i=2; $i<$b; $i++){                
    //             if($b%$i==0){
    //                 $count++;
    //             }
    //         } 
    //         return $count;
    //     }else{
    //         return "Reiksme nera skaicius!";
    //     }
    // }

    // echo counting(2583);


    echo "<h2>37 užduotis</h2>";
    // 37. Parašyti funkciją telefonoNumeris, kuri priima vieną kintamąjį. Turi būti patikrinimas, kad 
    // kintamasis yra masyvas, kad jo visi elementai yra skaičiai ir, kad jo ilgis yra 10. Funkcija turi 
    // grąžinti telefono numerį tokiu formatu - "(XXX) XXX-XXXX".

    function nr($nr){
        if(is_array($nr) && count($nr)==10){
            foreach($nr as $value){
                if($value>9 || !is_int($value)){
                    return "Skaicius nera vienzenklis arba yra su kableliu.";
                }
            }
            return "($nr[0]$nr[1]$nr[2]) $nr[3]$nr[4]$nr[5]-$nr[6]$nr[7]$nr[8]$nr[9]";
        } else {
            return "Numeris nėra įvestas";
        }
    }

    echo nr([879645321]);


    echo "<h2>38 užduotis</h2>";
    // 38. Parašyti funkciją pirminisSkaicius. Funkcija turi vieną kintamąjį. Turi būti patikrinimas, kad 
    // kintamasis yra skaičius. Funkcija turi grąžinti ar pateiktas skaičius yra pirminis( pirminis
    // skaičius yra tas, kuris dalinasi tik iš savęs ir tik iš vieneto be liekanos.)

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

    echo "<h2>39 užduotis</h2>";
    // 39. Parašyti funkciją - lygineSuma. Funkcijos parametrai - du kintamieji. Testų reikalavimai -
    // abu kitamieji turi būti arba skaičiai arba masyvai(negali būti vienas skaičius, kitas masyvas).
    // Jei kintamieji skaičiai, grąžinti skaičių sumą, jei kintamieji masyvai - grąžinti masyvų ilgių 
    // sumą. Jei suma nelyginė - grąžinti tekstą, kad suma nelyginė.



    echo "<h2>40 užduotis</h2>";
    // 40. Funkcija turi priimti du kintamuosius. Vienas turi būti skaičius, kitas masyvas su skaičiais ir 
    // minimum 7 elementais. Funkcija turi grąžinti true, jei skaičius yra masyve, ir false, jei nėra tokio 
    // skaičiaus masyve.
    echo "<h2>41 užduotis</h2>";
    // 41. Parašyti funkciją, kuri priimtų vieną kintamąjį. Atliktų testą ar kintamasis yra tekstas. Išvestų 
    // tekstą į ekraną „<p>“ tag‘e.

    // function text($text){
    //     if(is_string($text)){
    //         return "<p>".$text."</p>";
    //     }else{
    //         return "Is not a string";
    //     }
    // }

    // echo text("Hello world!");


    echo "<h2>42 užduotis</h2>";
    // 42. Parašyti funkciją, kuri priimtų vieną kintamąjį. Atliktų testą ar kintamasis yra tekstas.
    // Funkcija turi išvesti tekstą į ekraną ir dar papildomai parodyti jo ilgį. 
    
    // function text($text){
    //     if(is_string($text)){
    //         return "<p>".$text."</p> "."Teksto ilgis yra: ".strlen($text);
    //     }else{
    //         return "Is not a string";
    //     }
    // }
    // echo text("Hello world!");


    echo "<h2>43 užduotis</h2>";
    // 43. Parašyti funkciją, kuri priimtų vieną kintamąjį. Atliktų testą ar kintamasis yra tekstas. Jei 
    // teksto ilgis lyginis – tekstą išvestų žalios spalvos, jei nelyginis – mėlynos.

    function text($text){
        if(is_string($text) && strlen($text)%2==0){
            return "<p style=\"color: green;\">".$text."</p>"."<p style=\"color: green;\">"."Teksto ilgis yra: ".strlen($text)."</p>";
        }if(is_string($text) && strlen($text)%2!=0){
            return "<p style=\"color: red;\">".$text."</p>"."<p style=\"color: red;\">"."Teksto ilgis yra: ".strlen($text)."</p>";
        }else{

        }return "Is not a string";
    }
    echo text("Hello world");

    echo "<h2>44 užduotis</h2>";
    // 44. Parašyti funkciją, kuri priimtų vieną kintamąjį. Atliktų testą ar kintamasis yra tekstas.
    // Funkcija turi atspausdinti tekstą, kur mažosios raidės pakeistos į didžiasias ir atvirkščiai.

    function letters($letters){
        if(is_string($letters)){
            if($letters==strtolower($letters) && $letters==strtoupper($letters)){
                return strtoupper($letters);
             } // }else if($letters==strtoupper($letters)){
            //     return strtolower($letters);
            // }
        }
    }

    echo letters("Hello World");


    echo "<h2>45 užduotis</h2>";
    // 45. Parašyti funkciją, kuri priimtų vieną kintamąjį. Atliktų testą ar kintamasis yra tekstas. Jei 
    // kintamasis yra tekstas, jo ilgis turi būti daugiau, kaip 20 simbolių. Suskaičiuoti, kiek tekste yra 
    // ‚a‘ raidžių.
    echo "<h2>46 užduotis</h2>";
    // 46. Parašyti funkciją, kuri priimtų vieną kintamąjį. Atliktų testą ar kintamasis yra tekstas.
    // Suskaičiuoti kiek tekste yra mažųjų ir kiek didžiųjų raidžių.    
    echo "<h2>47 užduotis</h2>";
    // 47. Parašyti funkciją, kuri priimtų du kintamuosius. Atliktų testą ar kintamieji yra tekstai.
    // Palyginti kuris tekstas yra ilgesnis.
    echo "<h2>48 užduotis</h2>";
    // 48. Parašyti funkciją, kuri priimtų du kintamuosius. Atliktų testą ar kintamieji yra tekstai.
    // Palyginti kuris tekstas yra turi daugiau didžiųjų raidžių.
    echo "<h2>49 užduotis</h2>";
    // 49. Parašyti funkciją, kuri priimtų vieną kintamąjį. Atliktų testą ar kintamasis yra tekstas.
    // Funckija turi grąžinti tekstą, kur žodžiai būtų sukeisti vietomis, tai yra pirmas žodis taptų 
    // paskutinis, antras – priešpaskutinis ir t.t. Pačių žodžių keisti nereikia.
    echo "<h2>50 užduotis</h2>";
    // 50. Parašyti funkciją, kuri priimtų vieną kintamąjį. Atliktų testą ar kintamasis yra tekstas.
    // Kiekvienam simboliui sugeneruoti atsitiktinę spalvą ir atvaizduoti pagražintą spalvotą tekstą.


?>

<?php 

$a = [1, 2, 3, 4, 5, 6, 7, 8];

$a[4]

?>