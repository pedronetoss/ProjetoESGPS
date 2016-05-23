<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Alterar Utente</title>
	<link rel="stylesheet" href="registarUtente.css">
	<link rel="stylesheet" href="estilospgadmin.css">
	<link rel="stylesheet" href="bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap-theme.min.css">
	<?php include 'sessao.php'; ?>
</head>
<body>
<h1>Alterar Utente</h1>
<h2>Dados pessoais</h2>


<table border="0">

<tr colspan="5">
	<td >
		<img src="pessoa.png" alt="Pessoa"/>
	</td>
	<form action="">
	<td>
	<?php
 
$idUtente = $_GET['id'];
$busca_query = mysql_query("SELECT * FROM utentes WHERE idUtente = '$idUtente'") or die("erro ao selecionar");
$dadosute = mysql_fetch_array($busca_query);
		echo "<label for='inputNome'>Nome Completo</label>";
		echo "<input type='text' id='inputNome' name='Nome' size='40' value='".$dadosute['nome']."'>";
		

		echo "<p>";

		echo	"<label for='dataNascimento'>Data de Nascimento </label>";
		echo	"<input id='dataNascimento' type='date' value='".$dadosute['dataNascimento']."'>";
		echo	"<label for='sexo'>Sexo</label>";
		if ($dadosute['sexo'] == 'm' ){
			
				echo	"<input type='radio' id='sexo_m' name='sexo' value='m' checked='checked' /><label for='sexo_m'>Masculino</label>";
				echo    "<input type='radio' id='sexo_f' name=sexo' value='f' /><label for='sexo_'>Feminino</label>";
		}
		else {
			
				echo	"<input type='radio' id='sexo_m' name='sexo' value='m'  /><label for='sexo_m'>Masculino</label>";
				echo    "<input type='radio' id='sexo_f' name=sexo' value='f' checked='checked' /><label for='sexo_'>Feminino</label>";
		}
		 
		echo "</p>";
		echo "<p>";
			echo "<label for='inputMorada'>Morada:</label>";
			echo "<input type='text' id='inputMorada' name='Morada' size='40' value='".$dadosute['morada']."'>";
		echo "</p>";
		
		echo "<p>";
		
		echo "	<label for='numCodigoPostal'>Código Postal: </label>";
		echo "	<input id='CodigoPostal' maxlength='8' size='8' name='CodigoPostal' value='".$dadosute['codPostal']."'>";
		echo "	<label for='localidade'>Localidade: </label>";
		echo "	<input id='localidade' maxlength='20' size='20' value='".$dadosute['localidade']."'>";
		
		echo "</p>";
		echo "<p>";
			echo "<label for='nacionalidade'>Nacionalidade:</label>";
		echo "<select name='nacionalidade' value='".$dadosute['nacionalidade']."'>";
		echo "		<option value='AF'>Afeganistão‎</option>
				<option value='ZA'>África do Sul</option>
				<option value='AL'>Albânia</option>
				<option value='DE'>Alemanha</option>
				<option value='AD'>Andorra</option>
				<option value='AO'>Angola</option>
				<option value='AI'>Anguilla</option>
				<option value='AQ'>Antártida</option>
				<option value='AG'>Antígua e Barbuda</option>
				<option value='SA'>Arábia Saudita‎</option>
				<option value='DZ'>Argélia</option>
				<option value='AR'>Argentina</option>
				<option value='AM'>Armênia</option>
				<option value='AW'>Aruba</option>
				<option value='AU'>Austrália</option>
				<option value='AT'>Áustria</option>
				<option value='AZ'>Azerbaijão</option>
				<option value='BS'>Bahamas</option>
				<option value='BH'>Bahrein‎</option>
				<option value='BD'>Bangladesh</option>
				<option value='BB'>Barbados</option>
				<option value='BE'>Bélgica</option>
				<option value='BZ'>Belize</option>
				<option value='BJ'>Benin</option>
				<option value='BM'>Bermudas</option>
				<option value='BY'>Bielorrússia</option>
				<option value='BO'>Bolívia</option>
				<option value='BA'>Bósnia e Herzegovina</option>
				<option value='BW'>Botsuana</option>
				<option value='BR'>Brasil</option>
				<option value='BN'>Brunei</option>
				<option value='BG'>Bulgária</option>
				<option value='BF'>Burquina Faso</option>
				<option value='BI'>Burundi</option>
				<option value='BT'>Butão</option>
				<option value='CV'>Cabo Verde</option>
				<option value='KH'>Camboja</option>
				<option value='CA'>Canadá</option>
				<option value='QA'>Catar)</option>
				<option value='KZ'>Cazaquistão</option>
				<option value='EA'>Ceuta e Melilha</option>
				<option value='TD'>Chade</option>
				<option value='CL'>Chile</option>
				<option value='CN'>China </option>
				<option value='CY'>Chipre</option>
				<option value='VA'>Cidade do Vaticano</option>
				<option value='SG'>Cingapura</option>
				<option value='CO'>Colômbia</option>
				<option value='KM'>Comores</option>
				<option value='CG'>Congo - Brazzaville)</option>
				<option value='CD'>Congo - Kinshasa</option>
				<option value='KP'>Coreia do Norte</option>
				<option value='KR'>Coreia do Sul</option>
				<option value='CI'>Costa do Marfim</option>
				<option value='CR'>Costa Rica</option>
				<option value='HR'>Croácia</option>
				<option value='CU'>Cuba</option>
				<option value='CW'>Curaçao</option>
				<option value='DG'>Diego Garcia</option>
				<option value='DK'>Dinamarca</option>
				<option value='DJ'>Djibuti</option>
				<option value='DM'>Dominica</option>
				<option value='EG'>Egito</option>
				<option value='SV'>El Salvador</option>
				<option value='AE'>Emirados Árabes Unidos</option>
				<option value='EC'>Equador</option>
				<option value='ER'>Eritreia</option>
				<option value='SK'>Eslováquia</option>
				<option value='SI'>Eslovênia</option>
				<option value='ES'>Espanha</option>
				<option value='US'>Estados Unidos</option>
				<option value='EE'>Estônia</option>
				<option value='ET'>Etiópia</option>
				<option value='FJ'>Fiji</option>
				<option value='PH'>Filipinas</option>
				<option value='FI'>Finlândia</option>
				<option value='FR'>França</option>
				<option value='GA'>Gabão</option>
				<option value='GM'>Gâmbia</option>
				<option value='GH'>Gana</option>
				<option value='GE'>Geórgia</option>
				<option value='GI'>Gibraltar</option>
				<option value='GD'>Granada</option>
				<option value='GR'>Grécia</option>
				<option value='GL'>Groênlandia</option>
				<option value='GP'>Guadalupe)</option>
				<option value='GU'>Guam</option>
				<option value='GT'>Guatemala</option>
				<option value='GG'>Guernsey</option>
				<option value='GY'>Guiana</option>
				<option value='GF'>Guiana Francesa</option>
				<option value='GN'>Guiné</option>
				<option value='GW'>Guiné Bissau</option>
				<option value='GQ'>Guiné Equatorial</option>
				<option value='HT'>Haiti</option>
				<option value='NL'>Holanda</option>
				<option value='HN'>Honduras</option>
				<option value='HK'>Hong Kong</option>
				<option value='HU'>Hungria</option>
				<option value='YE'>Iêmen</option>
				<option value='BV'>Ilha Bouvet</option>
				<option value='AC'>Ilha de Ascensão</option>
				<option value='CP'>Ilha de Clipperton</option>
				<option value='IM'>Ilha de Man</option>
				<option value='NF'>Ilha Norfolk)</option>
				<option value='AX'>Ilhas Åland</option>
				<option value='KY'>Ilhas Caiman</option>
				<option value='IC'>Ilhas Canárias</option>
				<option value='CC'>Ilhas Coco</option>
				<option value='CK'>Ilhas Cook</option>
				<option value='UM'>Ilhas Distantes dos EUA</option>
				<option value='FO'>Ilhas Faro</option>
				<option value='FK'>Ilhas Malvinas</option>
				<option value='MP'>Ilhas Marianas do Norte</option>
				<option value='MH'>Ilhas Marshall</option>
				<option value='CX'>Ilhas Natal</option>
				<option value='PN'>Ilhas Pitcairn</option>
				<option value='SB'>Ilhas Salomão</option>
				<option value='TC'>Ilhas Turks e Caicos</option>
				<option value='VG'>Ilhas Virgens Britânicas</option>
				<option value='VI'>Ilhas Virgens dos EUA</option>
				<option value='IN'>Índia</option>
				<option value='ID'>Indonésia</option>
				<option value='IR'>Irão</option>
				<option value='IQ'>Iraque</option>
				<option value='IE'>Irlanda</option>
				<option value='IS'>Islândia</option>
				<option value='IL'>Israel‎</option>
				<option value='IT'>Itália</option>
				<option value='JM'>Jamaica</option>
				<option value='JP'>Japão</option>
				<option value='JE'>Jersey</option>
				<option value='JO'>Jordânia</option>
				<option value='XK'>Kosovo</option>
				<option value='KW'>Kuwait</option>
				<option value='LA'>Laos</option>
				<option value='LS'>Lesoto</option>
				<option value='LV'>Letônia</option>
				<option value='LB'>Líbano</option>
				<option value='LR'>Libéria</option>
				<option value='LY'>Líbia</option>
				<option value='LI'>Liechtenstein</option>
				<option value='LT'>Lituânia</option>
				<option value='LU'>Luxemburgo</option>
				<option value='MO'>Macau</option>
				<option value='MK'>Macedônia</option>
				<option value='MG'>Madagascar</option>
				<option value='MY'>Malásia</option>
				<option value='MW'>Malawi</option>
				<option value='MV'>Maldivas</option>
				<option value='ML'>Mali</option>
				<option value='MT'>Malta</option>
				<option value='MA'>Marrocos</option>
				<option value='MQ'>Martinica</option>
				<option value='MU'>Maurício</option>
				<option value='MR'>Mauritânia</option>
				<option value='YT'>Mayotte</option>
				<option value='MX'>México</option>
				<option value='MM'>Mianmar</option>
				<option value='FM'>Micronésia</option>
				<option value='MZ'>Moçambique</option>
				<option value='MD'>Moldávia)</option>
				<option value='MC'>Mônaco</option>
				<option value='MN'>Mongólia</option>
				<option value='ME'>Montenegro</option>
				<option value='MS'>Montserrat</option>
				<option value='NA'>Namíbia</option>
				<option value='NR'>Nauru</option>
				<option value='NP'>Nepal</option>
				<option value='NI'>Nicarágua</option>
				<option value='NE'>Níger</option>
				<option value='NG'>Nigéria</option>
				<option value='NU'>Niue</option>
				<option value='NO'>Noruega </option>
				<option value='NC'>Nova Caledônia</option>
				<option value='NZ'>Nova Zelândia</option>
				<option value='OM'>Omã</option>
				<option value='BQ'>Países Baixos Caribenhos</option>
				<option value='PW'>Palau</option>
				<option value='PS'>Palestina</option>
				<option value='PA'>Panamá</option>
				<option value='PG'>Papua-Nova Guiné</option>
				<option value='PK'>Paquistão</option>
				<option value='PY'>Paraguai</option>
				<option value='PE'>Peru</option>
				<option value='PF'>Polinésia Francesa</option>
				<option value='PL'>Polônia</option>
				<option value='PR'>Porto Rico</option>
				<option value='PT'>Portugal</option>
				<option value='KE'>Quênia</option>
				<option value='KG'>Quirguistão</option>
				<option value='KI'>Quiribati</option>
				<option value='GB'>Reino Unido</option>
				<option value='CF'>República Centro-Africana</option>
				<option value='DO'>República Dominicana</option>
				<option value='CM'>República dos Camarões</option>
				<option value='CZ'>República Tcheca</option>
				<option value='RE'>Reunião</option>
				<option value='RO'>Romênia)</option>
				<option value='RW'>Ruanda</option>
				<option value='RU'>Rússia</option>
				<option value='EH'>Saara Ocidental</option>
				<option value='PM'>Saint Pierre e Miquelon</option>
				<option value='WS'>Samoa</option>
				<option value='AS'>Samoa Americana</option>
				<option value='SM'>San Marino</option>
				<option value='SH'>Santa Helena</option>
				<option value='LC'>Santa Lúcia</option>
				<option value='BL'>São Bartolomeu</option>
				<option value='KN'>São Cristovão e Nevis</option>
				<option value='MF'>São Martinho</option>
				<option value='ST'>São Tomé e Príncipe</option>
				<option value='SN'>Senegal</option>
				<option value='SL'>Serra Leoa</option>
				<option value='RS'>Sérvia</option>
				<option value='SC'>Seychelles</option>
				<option value='SX'>Sint Maarten</option>
				<option value='SY'>Síria‎</option>
				<option value='SO'>Somália</option>
				<option value='LK'>Sri Lanka</option>
				<option value='SZ'>Suazilândia</option>
				<option value='SD'>Sudão</option>
				<option value='SS'>Sudão do Sul‎</option>
				<option value='SE'>Suécia</option>
				<option value='CH'>Suíça</option>
				<option value='SR'>Suriname</option>
				<option value='SJ'>Svalbard e Jan Mayen</option>
				<option value='TJ'>Tadjiquistão</option>
				<option value='TH'>Tailândia</option>
				<option value='TW'>Taiwan</option>
				<option value='TZ'>Tanzânia</option>
				<option value='TF'>Territórios Franceses do Sul</option>
				<option value='TL'>Timor-Leste</option>
				<option value'TG'>Togo</option>
				<option value='TK'>Tokelau</option>
				<option value='TO'>Tonga</option>
				<option value='TT'>Trinidad e Tobago</option>
				<option value='TA'>Tristão da Cunha</option>
				<option value='TN'>Tunísia)</option>
				<option value='TM'>Turcomenistão</option>
				<option value='TR'>Turquia</option>
				<option value='TV'>Tuvalu</option>
				<option value='UA'>Ucrânia</option>
				<option value='UG'>Uganda</option>
				<option value='UY'>Uruguai </option>
				<option value='UZ'>Uzbequistão</option>
				<option value='VU'>Vanuatu</option>
				<option value='VE'>Venezuela</option>
				<option value='VN'>Vietnã</option>
				<option value='WF'>Wallis e Futuna</option>
				<option value='ZM'>Zâmbia</option>
				<option value='ZW'>Zimbábue</option>
			</select>";
	echo "</p>";
	echo "<p>";
	echo "<label for='email'>E-mail</label>";
	echo "<input type='email' id='email' size='28' value='".$dadosute['email']."'>";
	echo "</p>";
	echo "<p>";
	echo "<label for='numSNS'>SNS</label>";
	echo "<input id='umSNS' maxlength='5' size='10' value='".$dadosute['sns']."'>";
	echo "<label for='numNIF'>NIF</label>";
	echo "<input id='numNIF' maxlength='9' size='10' value='".$dadosute['nif']."'>";
	echo "</p>";
	echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>";
echo "[+]Escolher Fotografia";
echo "</td>";
	
echo "<td>
		<label for='numCC'>Cartão de Cidadão</label>
		<input id='numCC' maxlength='8' size='10' value='".$dadosute['ccBI']."'>
	</td>";
echo "</tr>";
 
echo "<tr>
	<td>
	</td>
	<td>
		<label for='numTelemovel'>Nº de Telemóvel</label>
		<input id='numTelemovel' maxlength='9' size='10' value='".$dadosute['telemovel']."'>
		<label for='Telefone'>Telefone</label>
		<input type='Telefone' maxlength='9' size='10' value='".$dadosute['telefone']."'>
	</td>
</tr>";

echo "<tr>
	
</tr>

</table>	
<table border='0'>
<h2>Dados Familiares</h2>
<form action=''>
<tr>
	<td>
		<label for='inputNome'>Responsável</label>
		<input type='text' id='responsavel' name='Responsavel' size='20'>
	</td>
</tr>
<tr>
	
	<td>
		<label for='parentesco'>Parentesco</label>
		<input type='text' id='parentesco' name='Parentecto' size='10'>
		
	</td>
</tr>
<tr>
	<label for='inputTelefone'>Telefone </label>
	<input type='text' id='telefone' name='Telefone' size='9'>
</tr>
<tr>
	<td>
		<label for='morada'>Morada</label>
		<input type='text' id='morada' name='Morada' size='20'>
	</td>
</tr>
	
	
</form>
</table>";

	

echo "<table>
<tr>
	<td colspan='4' align='center'><h4>Dados Clinicos</h4></td>
</tr>	
<tr>

	<td><label for='tipoSanguineo'>Tipo Sanguineo </label></td>
	<td><input type='text' id='tipoSanguineo' name='tipoSanguineo' size='9'></td>
	<td><label for='patologias'>Patologias </label>
	<td><input type='text' id='patologias' name='patologias' size='9'></td>
</tr>
</table>
<br>
<br>
<table border='1'>
<tr>
	<td colspan='5' align='center'> <h4>Historico Consultas</h4></td>
</tr>
<tr>
	<td>Data</td>
	<td>Especialidade</td>
	<td>Medico</td>
	<td>Motivo</td>
	<td>Consultar</td>	
</tr>

<tr>
	<td colspan='5' align='right'><input type='button' value='Nova Consulta'  onclick='novaconsulta.html'></td>
</tr>
</table>
<br>
<br>
<br>
<input type='submit' value='Editar'>
<input type='reset' value='Cancelar' onclick='listagem.php'>";
?>
</body>
</html> 