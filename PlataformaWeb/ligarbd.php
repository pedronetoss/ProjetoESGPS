<?php
//Ligacao a base de dados
$bd_util="admin";
$bd_pw="";
$bd="hospital_albert_einstein";
$bd_con = mysql_connect("localhost", "$bd_util", "$bd_pw") or die("Erro na abertura!");
mysql_select_db("$bd", $bd_con);

//echo "Ligação estabelecida";
?>