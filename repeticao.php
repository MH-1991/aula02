<?php
$contador = 0;
while($contador < 5){
    echo $contador."<br>";
    $contador++;
}
//--------------------------------------
do{
    echo $contador."<br>";
    $contador++;
}while($contador < 5);
//--------------------------------------
for($i=0;$i<=5;$i++){
    echo $i.",";
}

?>