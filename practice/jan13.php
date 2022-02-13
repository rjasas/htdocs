
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
</body>
</html>

<?php 
$z = "*";
for($i=1; $i<=5;$i++){
    for($j=1;$j<=$i;$j++){
         echo $z;
    }echo "<br>";
}

echo "<br>";
echo "<br>";
echo "<br>";





for($i=1; $i<=8; $i++){
    echo "<tr>";
    for ($x=1; $x<=8; $x++){
        echo "<td style=></td>";
    }
    echo "</tr>";
}

$n=11;
$num=1;
for($i=1; $i<=$n; $i++){
    for($j=1; $j<=$i; $j++){
        echo $num++." ";
    }
    echo "<br>";
}

for ($i=1; $i<8; $i++){
    for ($x=1; $x<6; $x++){
        if(($x==5 || $x==1) && $i<6 || ($x==3 && $i == 7) || ($i==6 && ($x==4 || $x==2))){
        echo "*";
    }else{
        echo "&nbsp";
    }
}
echo "<br>";
}

for ($i=1; $i<8; $i++){
    for ($x=1; $x<6; $x++){
        if(($x==1 || $x==2 || $x==3 || $x==4) && $i<1 || ($x==1 || $x==5 && $i == 2 || $i==3) || (($x==1 || $x==2 || $x==3 || $x==4) && $i<4)){
        echo "*";
    }else{
        echo "&nbsp";
    }
}
echo "<br>";
}

?>

<table style="border: 2px solid black">
    <?php 
    for ($i=1; $i<=10; $i++){
        echo "<tr style='border: 2px solid black'>";
        for ($x=1; $x<=10; $x++){
            echo "<td style='border: 2px solid black'>$i * $x = ".$i*$x."</td>";
        }
        echo "</tr>";
    }
    ?>
</table>



<table style="width: 270px; border: 2px solid black;">
    <?php 
    for ($i=1; $i<=8; $i++){
       echo "<tr>";
       for ($j=1; $j<=8; $j++){
           $total = $i + $j;
           if ($total%2==0){
            echo "<td style='height:30px; width:30px; background-color:#ffffff;'></td>";
           }else {
            echo "<td style='height:30px; width:30px; background-color:#000000;'></td>";
           }
           
       }
       echo "</tr>";
    }
    ?>
</table>