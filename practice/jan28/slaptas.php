<?php echo "<h2>Dvylikta užduotis</h2>"; ?>

<?php
$slaptazodis = "raktas";

if ($_POST){
    if($_POST['pass'] !== $slaptazodis){
        header("Location: http://localhost/practice/jan28/testas.php/?error=1");
    }
} else {
    header("Location: http://localhost/practice/jan28/testas.php");
}
?>

<?php echo "<h1> Hello world! SLAPTAS</h1>"; ?>