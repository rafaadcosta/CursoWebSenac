<?php
$host="185.27.134.223";
$user="if0_37184956";
$senha="WEhsKpoJe8P6D0";
$nomeBanco="contatos";

$conexao=mysqli_connect($host,$user,$senha,$nomeBanco);

if($conexao){
    
}else{
    echo("erro de conexão !");
    die();
}

?>