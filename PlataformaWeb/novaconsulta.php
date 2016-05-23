<!DOCTYPE html>
<html>
<head>

<?php 
include 'sessao.php';
?>
	<meta charset="UTF-8">
	<title>Nova Consulta</title>
		<link rel="stylesheet" href="estilospgadmin.css">
	<link rel="stylesheet" href="bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap-theme.min.css">
	
</head>
<body>
<h1>Nova Consulta</h1>
Dados Consulta
<form action="inserirConsulta.php" method="POST">

<p>
<table border="0">
<tr>
		<td>
			<label for="inputNomeUtente">Utente:</label>
		</td>
		<td>
			<input type="text" id="inputNomeUtente" name="nomePaciente" size="60">
		</td>
	</tr>
	<tr>
		<td>
			<label for="inputSnsUtente"  name="snsUtente">SNS Utente</label>
		</td>
		<td>
			<input type="text" id="inputSnsUtente" name="snsUtente" size="9" maxlength="9">
		</td>
	</tr>
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
		<td><label for="motivoConsulta">Motivo Consulta: </label></td><td><input id="motivoConsulta" size="60" name="motivoConsulta"></td>
		</tr>
	<tr>
		<td><label for="sintomas">Sintomas: </label></td><td><input id="sintomas" size="60" name="sintomas"></td>
		</tr>
		<tr>
		<td><label for="diagnostico"> Diagnostico: </label></td><td><input style="height:100px"; id="diagnostico" size="60" name="diagnostico"> </td>

		</tr>
	<tr>	
    
    
    <!--$sql = "SELECT exameimg FROM utentes WHERE id=$id";
  $result = mysql_query("$sql");
  $row = mysql_fetch_assoc($result);
  mysql_close($link);

  header("Content-type: image/jpeg");
  echo $row['exameimg'];-->
  
  
		<td><label for="inputExames">Upload Exames</label></td>
		<td><input type="file" id="inputExames" name="inputExames" size="80"></td>
	</tr>
	<tr>	
		<td><label for="precricao"> Prescrição: </label></td><td><input style="height:100px; id="diagnostico" size="60" name="prescricao"> </td>
		
	</tr>

</table>	
	
		<input type="submit" value="Submeter">
		<input type="reset" value="Cancelar">
	</p>
	</form>

</body>
</html> 