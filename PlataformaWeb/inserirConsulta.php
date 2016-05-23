<?php
include 'ligarbd.php';

$medico = $_POST['nomemedico'];
$prioridade = $_POST['prioridade'];
$especialidade = $_POST['Especialidade'];
$dataConsulta = $_POST['data_cons'];
$horaConsulta = $_POST['hora_cons'];
$motivoConsulta =$_POST['motivoConsulta'];
$sintomas = $_POST['sintomas'];
$diagnostico =$_POST['diagnostico'];
$inputExames =$_POST['inputExames'];
$prescricao =$_POST['prescricao'];
$nomePaciente=$_POST['nomePaciente'];
$snsUtente=$_POST['snsUtente'];



$busca_query = mysql_query("SELECT * FROM utilizadores WHERE nome = '$medico'") or die("erro ao selecionar");
$dadosute = mysql_fetch_array($busca_query);

$idMedico = $dadosute['idUser'];

$sql = "INSERT INTO consulta (idMedico, snsUtente, prioridade, especialidade, dataConsulta, horaConsulta, motivoConsulta, sintomas, diagnostico, exames, prescricao) values ('$idMedico','$snsUtente', '$prioridade', '$especialidade', '$dataConsulta', '$horaConsulta', '$motivoConsulta', '$sintomas', '$diagnostico' ,'$inputExames', '$prescricao')";

$resultado = mysql_query( $sql ); 
echo"<script language='javascript' type='text/javascript'>alert('Consulta Registada com Sucesso');window.location.href='listagem.php';</script>";


?>