<?php
include 'ligarbd.php'; 

$nome =$_POST['Nome'];
$dateNascimento =$_POST['DataNasc'];
$sexo =$_POST['sexo'];
$morada = $_POST['Morada'];
$codPostal = $_POST['CodigoPostal'];
$localidade = $_POST['Localidade'];
$nacionalidade = $_POST['Nacionalidade'];
$email = $_POST['Email'];
$sns = $_POST['SNS'];
$nif = $_POST['NIF'];
$cc = $_POST['CC'];
$telemovel = $_POST['Telemovel'];
$telefone = $_POST['Telefone'];
$responsavel = $_POST['Responsavel'];
$parentesco = $_POST['Parentesco'];
$telefoneresp = $_POST['TelefoneResp'];
$moradaresp = $_POST['MoradaResp'];
$observacoes = $_POST['Observacoes'];


$sql = "INSERT INTO utentes (nome, dataNascimento, sexo, morada, codPostal, localidade, nacionalidade, telemovel, telefone, email, sns, nif, ccBI) values ('$nome','$dateNascimento', '$sexo', '$morada', '$codPostal', '$localidade', '$nacionalidade', '$telemovel', $telefone ,'$email', '$sns', $nif, '$cc')";

$resultado = mysql_query( $sql );
echo"<script language='javascript' type='text/javascript'>alert('Utente Registado com Sucesso');window.location.href='administracaoAdmin.php';</script>";

?>