<!DOCTYPE html>
<html>
<head>
<?php 
include 'sessao.php';
?>
	<meta charset="utf-8">
	<title> Listagem de Utentes </title>
	<link rel="stylesheet" href="estilos2.css">
</head>

<body>
<h1>Listagem dos Utentes da Clinica</h1>
<form action="registarUtente.php">
	<input type="search" id="inputPesquisa" name="Pesquisar" placeholder="Pesquisar">
	<input type="button" id="pesquisar" name="pesquisar" value="Pesquisar">

	<input type="submit" id="criarUtente" name="criarUtente" value="Criar Utente"> 
<br>
<br>
<style>
	table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
}
</style>
<body>
</form>
<form action="">
<table style="width:100%">
  <tr>
    <th>Nome Utente</th>
    <th>Número Utente</th>		
    <th>SNS</th>
	<th>CC</th>
	<th>Última Visita</th>
	<th></th>
  </tr>
<?php

$busca_query = mysql_query("SELECT * FROM utentes") or die("erro ao selecionar");
			while ($dados = mysql_fetch_array($busca_query)) {
echo "<tr><td>".$dados['nome']."</td><td>".$dados['idUtente']."</td><td>".$dados['sns']."</td><td>".$dados['ccBI']."</td><td></td><td><a href='alterarUtente.php?id=".$dados['idUtente']."'>Editar</a></td></tr>" ;
			}
?>
 
</form>


</form>
</body>
</html>
