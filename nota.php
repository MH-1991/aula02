<?php
//Tudo o que eu escrever nesta linha não sera compilado
#Tambem comenta a linha toda
/*
Tudo que eu digitar aqui 
nao sera interpretado pelo php 
Indenpendente de quebras de linha
*/ 
$media = 10;//esta linha esta comentada so no final

if($media>=7){
    echo "Aprovado";
}
else if($media>=4){
    echo "Recuperação";
}
else{
    echo "Reprovado";
}

?>