<!DOCTYPE html>
<html>
<head>

	<meta charset="UTF-8">
	<link rel="stylesheet" href="estilospgadmin.css">
	<link rel="stylesheet" href="bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap-theme.min.css">
	<title>Ver Consulta</title>
	<?php 
include 'sessao.php';
?>
</head>
<body>
<h1>Ver Consulta</h1>
Dados Consulta
<form action="">

<p>
<table border="0">
<tr>


	<td><label for="inputNomeMedico">Medico:</label></td>
		<td><input type="text" id="inputNome" name="nomemedico" size="60"></td></tr>
	<tr>
	<td><label for="prioridade">Prioridade: <td><input type="text" id="inputPrioridade" name="prioridade" size="25" </label>
    &nbsp; <label for="especialidade">Especialidade:<input type="text" id="inputEspecialidade" name="Especialidade" size="25"  </label> </td> </tr> </td>
</tr>
<tr>
<td><label for="data_cons">Data consulta:</td> <td> <input type="date" name="data_cons">  
&nbsp; <label for="hora_cons">Hora consulta: <input type="time" name="hora_cons"> </td>
<td>&nbsp;</td>
</tr>
<tr>
		<td><label for="motivoConsulta">Motivo Consulta: </label></td><td><input id="motivoConsulta" size="60"></td>
		</tr>
	<tr>
		<td><label for="sintomas">Sintomas: </label></td><td><input id="sintomas" size="60"></td>
		</tr>
		<tr>
		<td><label for="diagnostico"> Diagnostico: </label></td><td><input style="height:100px; id="diagnostico" size="60"> </td>

		</tr>
	<tr>	
		<td><label for="precricao"> Prescrição: </label></td><td><input style="height:100px; id="diagnostico" size="60"> </td>
		
	</tr>
    <tr>	
		<td><label for="inputExames">Exames</label></td>
		<td><image src="imagens/exame1.jpg">&nbsp;<image src="imagens/exame2.jpg"></td>
	</tr>

</table>	
	
		<input type="submit" value="Voltar">

	</p>


</body>
</html> 