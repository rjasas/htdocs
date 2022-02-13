<?php 

if(1<0) {
    echo "kodas veikia";
} else if (1==5) {
    echo "kodas neveikia";
} else {
    echo "si eilute niekada nebus isspausdinta";
}

$color = "green";

switch ($color) {
    case "red":
        echo "STOP";
        break;
    case "yellow":
        echo "WAIT";
        break;
    case "green":
        echo "GO";
        break;
    default:
        echo "Invalid color";
};


?>