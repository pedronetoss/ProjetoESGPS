<!DOCTYPE html>
<html>
<head>
<?php 
include 'sessao.php';
?>
	<meta charset="UTF-8">
	<title>Gestão Utilizadores</title>
	<link rel="stylesheet" href="estilosgestaoutilizadores.css">
	<link rel="stylesheet" href="bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap-theme.min.css">
	
</head>
<body>
<h1>Gestão de Utilizadores</h1>
<input type="search" name ="pesquisar" placeholder="Pesquisar">
<p>
<table border="1">
<tr>
<td>
	<h3>&nbsp;<b>Nome (Categoria)</b>&nbsp;</h3>
</td>
<td>
	<h3>&nbsp;<b>Data de Nascimento&nbsp;</b></h3>
</td>
<td>
	<h3><b>&nbsp;Email&nbsp;</b></h3>
</td>
<td>
	<h3><b>&nbsp;Telefone&nbsp;</b></h3>
</td>
<td>
	<h3><b>&nbsp;Login&nbsp;</b></h3>
</td>
</tr>
<?php
$busca_query = mysql_query("SELECT * FROM utilizadores") or die("erro ao selecionar");
			while ($dados = mysql_fetch_array($busca_query)) {
echo "<tr><td>".$dados['nome']." (".$dados['categoria'].")</td><td>".$dados['dataNascimento']."</td><td>".$dados['email']."</td><td>".$dados['telefone']."</td><td>".$dados['loginAtribuido']."</td></tr>" ;
			}
?>
</table>
<input type="submit" class="btn btn-default"  id = "cancelar" name ="cancelar" value="Cancelar">
<input type="submit" class="btn btn-default" id = "guardar" name ="guardarAlteracoes" value = "Guardar Alterações">

</body>
</html>