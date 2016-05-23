<?php
include 'ligarbd.php'; 

$nome =$_POST['Nome'];
$dateNascimento =$_POST['dataNascimento'];
$sexo =$_POST['sexo'];
$morada = $_POST['Morada'];
$codPostal = $_POST['CodigoPostal'];
$localidade = $_POST['Localidade'];
$nacionalidade = $_POST['nacionalidade'];
$email =$_POST['Email'];
$telefone = $_POST['Telefone'];
$categoria = $_POST['categoria'];
$username = $_POST['username'];
$password = $_POST['password'];



$sql = "INSERT INTO utilizadores (nome, dataNascimento, sexo, morada, codPostal, localidade, nacionalidade, email, telefone,categoria, loginAtribuido, password) values ('$nome','$dateNascimento', '$sexo', '$morada', '$codPostal', '$localidade', '$nacionalidade','$email', '$telefone', '$categoria', '$username', '$password' )";

$resultado = mysql_query( $sql );
echo"<script language='javascript' type='text/javascript'>alert('Utilizador Registo com Sucesso');window.location.href='administracaoAdmin.php';</script>";
                    
//header("Location:administracaoAdmin.php");

?>