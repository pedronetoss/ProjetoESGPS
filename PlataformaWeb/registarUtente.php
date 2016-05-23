<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Registar Utente</title>
	<link rel="stylesheet" href="estilospgadmin.css">
	<link rel="stylesheet" href="bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap-theme.min.css">
</head>
<image src="logo.jpg">
<body>
<h1>Registar Utente</h1>


<form action="inserirUtente.php" method="POST">

<p>
<table border="0">
<tr>

	<td>
		<h2>Dados pessoais</h2>
	</td>
<tr>
	<td>
	<img src="escolher fotografia.png" id="blah" />
	
	</td>
	<td>
		<label for="inputNome">Nome Completo</label>
		<input type="text" id="inputNome" name="Nome" size="40">

		<p>

			<label for="dataNascimento">Data de Nascimento </label>
			<input id="dataNascimento" type="date" name="DataNasc">
			<label for="sexo">Sexo</label>
			<input type="radio" id="sexo_m" name="sexo" value="m" /><label for="sexo_m">Masculino</label>
			<input type="radio" id="sexo_f" name="sexo" value="f" /><label for="sexo_f">Feminino</label>
			
		</p>
		<p>
			<label for="inputMorada">Morada:</label>
			<input type="text" id="inputMorada" name="Morada" size="40" >
		</p>
		
		<p>
		
			<label for="numCodigoPostal">Código Postal: </label>
			<input id="CodigoPostal" maxlength="8" size="8" name="CodigoPostal">
			<label for="localidade" >Localidade: </label>
			<input id="localidade" maxlength="20" size="20" name="Localidade">
		</p>
		<p>
			<label for="nacionalidade">Nacionalidade:</label>
			<select name="Nacionalidade">
				<option value="AF">Afeganistão‎</option>
				<option value="ZA">África do Sul</option>
				<option value="AL">Albânia</option>
				<option value="DE">Alemanha</option>
				<option value="AD">Andorra</option>
				<option value="AO">Angola</option>
				<option value="AI">Anguilla</option>
				<option value="AQ">Antártida</option>
				<option value="AG">Antígua e Barbuda</option>
				<option value="SA">Arábia Saudita‎</option>
				<option value="DZ">Argélia</option>
				<option value="AR">Argentina</option>
				<option value="AM">Armênia</option>
				<option value="AW">Aruba</option>
				<option value="AU">Austrália</option>
				<option value="AT">Áustria</option>
				<option value="AZ">Azerbaijão</option>
				<option value="BS">Bahamas</option>
				<option value="BH">Bahrein‎</option>
				<option value="BD">Bangladesh</option>
				<option value="BB">Barbados</option>
				<option value="BE">Bélgica</option>
				<option value="BZ">Belize</option>
				<option value="BJ">Benin</option>
				<option value="BM">Bermudas</option>
				<option value="BY">Bielorrússia</option>
				<option value="BO">Bolívia</option>
				<option value="BA">Bósnia e Herzegovina</option>
				<option value="BW">Botsuana</option>
				<option value="BR">Brasil</option>
				<option value="BN">Brunei</option>
				<option value="BG">Bulgária</option>
				<option value="BF">Burquina Faso</option>
				<option value="BI">Burundi</option>
				<option value="BT">Butão</option>
				<option value="CV">Cabo Verde</option>
				<option value="KH">Camboja</option>
				<option value="CA">Canadá</option>
				<option value="QA">Catar)</option>
				<option value="KZ">Cazaquistão</option>
				<option value="EA">Ceuta e Melilha</option>
				<option value="TD">Chade</option>
				<option value="CL">Chile</option>
				<option value="CN">China </option>
				<option value="CY">Chipre</option>
				<option value="VA">Cidade do Vaticano</option>
				<option value="SG">Cingapura</option>
				<option value="CO">Colômbia</option>
				<option value="KM">Comores</option>
				<option value="CG">Congo - Brazzaville)</option>
				<option value="CD">Congo - Kinshasa</option>
				<option value="KP">Coreia do Norte</option>
				<option value="KR">Coreia do Sul</option>
				<option value="CI">Costa do Marfim</option>
				<option value="CR">Costa Rica</option>
				<option value="HR">Croácia</option>
				<option value="CU">Cuba</option>
				<option value="CW">Curaçao</option>
				<option value="DG">Diego Garcia</option>
				<option value="DK">Dinamarca</option>
				<option value="DJ">Djibuti</option>
				<option value="DM">Dominica</option>
				<option value="EG">Egito</option>
				<option value="SV">El Salvador</option>
				<option value="AE">Emirados Árabes Unidos</option>
				<option value="EC">Equador</option>
				<option value="ER">Eritreia</option>
				<option value="SK">Eslováquia</option>
				<option value="SI">Eslovênia</option>
				<option value="ES">Espanha</option>
				<option value="US">Estados Unidos</option>
				<option value="EE">Estônia</option>
				<option value="ET">Etiópia</option>
				<option value="FJ">Fiji</option>
				<option value="PH">Filipinas</option>
				<option value="FI">Finlândia</option>
				<option value="FR">França</option>
				<option value="GA">Gabão</option>
				<option value="GM">Gâmbia</option>
				<option value="GH">Gana</option>
				<option value="GE">Geórgia</option>
				<option value="GI">Gibraltar</option>
				<option value="GD">Granada</option>
				<option value="GR">Grécia</option>
				<option value="GL">Groênlandia</option>
				<option value="GP">Guadalupe)</option>
				<option value="GU">Guam</option>
				<option value="GT">Guatemala</option>
				<option value="GG">Guernsey</option>
				<option value="GY">Guiana</option>
				<option value="GF">Guiana Francesa</option>
				<option value="GN">Guiné</option>
				<option value="GW">Guiné Bissau</option>
				<option value="GQ">Guiné Equatorial</option>
				<option value="HT">Haiti</option>
				<option value="NL">Holanda</option>
				<option value="HN">Honduras</option>
				<option value="HK">Hong Kong</option>
				<option value="HU">Hungria</option>
				<option value="YE">Iêmen</option>
				<option value="BV">Ilha Bouvet</option>
				<option value="AC">Ilha de Ascensão</option>
				<option value="CP">Ilha de Clipperton</option>
				<option value="IM">Ilha de Man</option>
				<option value="NF">Ilha Norfolk)</option>
				<option value="AX">Ilhas Åland</option>
				<option value="KY">Ilhas Caiman</option>
				<option value="IC">Ilhas Canárias</option>
				<option value="CC">Ilhas Coco</option>
				<option value="CK">Ilhas Cook</option>
				<option value="UM">Ilhas Distantes dos EUA</option>
				<option value="FO">Ilhas Faro</option>
				<option value="FK">Ilhas Malvinas</option>
				<option value="MP">Ilhas Marianas do Norte</option>
				<option value="MH">Ilhas Marshall</option>
				<option value="CX">Ilhas Natal</option>
				<option value="PN">Ilhas Pitcairn</option>
				<option value="SB">Ilhas Salomão</option>
				<option value="TC">Ilhas Turks e Caicos</option>
				<option value="VG">Ilhas Virgens Britânicas</option>
				<option value="VI">Ilhas Virgens dos EUA</option>
				<option value="IN">Índia</option>
				<option value="ID">Indonésia</option>
				<option value="IR">Irão</option>
				<option value="IQ">Iraque</option>
				<option value="IE">Irlanda</option>
				<option value="IS">Islândia</option>
				<option value="IL">Israel‎</option>
				<option value="IT">Itália</option>
				<option value="JM">Jamaica</option>
				<option value="JP">Japão</option>
				<option value="JE">Jersey</option>
				<option value="JO">Jordânia</option>
				<option value="XK">Kosovo</option>
				<option value="KW">Kuwait</option>
				<option value="LA">Laos</option>
				<option value="LS">Lesoto</option>
				<option value="LV">Letônia</option>
				<option value="LB">Líbano</option>
				<option value="LR">Libéria</option>
				<option value="LY">Líbia</option>
				<option value="LI">Liechtenstein</option>
				<option value="LT">Lituânia</option>
				<option value="LU">Luxemburgo</option>
				<option value="MO">Macau</option>
				<option value="MK">Macedônia</option>
				<option value="MG">Madagascar</option>
				<option value="MY">Malásia</option>
				<option value="MW">Malawi</option>
				<option value="MV">Maldivas</option>
				<option value="ML">Mali</option>
				<option value="MT">Malta</option>
				<option value="MA">Marrocos</option>
				<option value="MQ">Martinica</option>
				<option value="MU">Maurício</option>
				<option value="MR">Mauritânia</option>
				<option value="YT">Mayotte</option>
				<option value="MX">México</option>
				<option value="MM">Mianmar</option>
				<option value="FM">Micronésia</option>
				<option value="MZ">Moçambique</option>
				<option value="MD">Moldávia)</option>
				<option value="MC">Mônaco</option>
				<option value="MN">Mongólia</option>
				<option value="ME">Montenegro</option>
				<option value="MS">Montserrat</option>
				<option value="NA">Namíbia</option>
				<option value="NR">Nauru</option>
				<option value="NP">Nepal</option>
				<option value="NI">Nicarágua</option>
				<option value="NE">Níger</option>
				<option value="NG">Nigéria</option>
				<option value="NU">Niue</option>
				<option value="NO">Noruega </option>
				<option value="NC">Nova Caledônia</option>
				<option value="NZ">Nova Zelândia</option>
				<option value="OM">Omã</option>
				<option value="BQ">Países Baixos Caribenhos</option>
				<option value="PW">Palau</option>
				<option value="PS">Palestina</option>
				<option value="PA">Panamá</option>
				<option value="PG">Papua-Nova Guiné</option>
				<option value="PK">Paquistão</option>
				<option value="PY">Paraguai</option>
				<option value="PE">Peru</option>
				<option value="PF">Polinésia Francesa</option>
				<option value="PL">Polônia</option>
				<option value="PR">Porto Rico</option>
				<option value="PT">Portugal</option>
				<option value="KE">Quênia</option>
				<option value="KG">Quirguistão</option>
				<option value="KI">Quiribati</option>
				<option value="GB">Reino Unido</option>
				<option value="CF">República Centro-Africana</option>
				<option value="DO">República Dominicana</option>
				<option value="CM">República dos Camarões</option>
				<option value="CZ">República Tcheca</option>
				<option value="RE">Reunião</option>
				<option value="RO">Romênia)</option>
				<option value="RW">Ruanda</option>
				<option value="RU">Rússia</option>
				<option value="EH">Saara Ocidental</option>
				<option value="PM">Saint Pierre e Miquelon</option>
				<option value="WS">Samoa</option>
				<option value="AS">Samoa Americana</option>
				<option value="SM">San Marino</option>
				<option value="SH">Santa Helena</option>
				<option value="LC">Santa Lúcia</option>
				<option value="BL">São Bartolomeu</option>
				<option value="KN">São Cristovão e Nevis</option>
				<option value="MF">São Martinho</option>
				<option value="ST">São Tomé e Príncipe</option>
				<option value="SN">Senegal</option>
				<option value="SL">Serra Leoa</option>
				<option value="RS">Sérvia</option>
				<option value="SC">Seychelles</option>
				<option value="SX">Sint Maarten</option>
				<option value="SY">Síria‎</option>
				<option value="SO">Somália</option>
				<option value="LK">Sri Lanka</option>
				<option value="SZ">Suazilândia</option>
				<option value="SD">Sudão</option>
				<option value="SS">Sudão do Sul‎</option>
				<option value="SE">Suécia</option>
				<option value="CH">Suíça</option>
				<option value="SR">Suriname</option>
				<option value="SJ">Svalbard e Jan Mayen</option>
				<option value="TJ">Tadjiquistão</option>
				<option value="TH">Tailândia</option>
				<option value="TW">Taiwan</option>
				<option value="TZ">Tanzânia</option>
				<option value="TF">Territórios Franceses do Sul</option>
				<option value="TL">Timor-Leste</option>
				<option value="TG">Togo</option>
				<option value="TK">Tokelau</option>
				<option value="TO">Tonga</option>
				<option value="TT">Trinidad e Tobago</option>
				<option value="TA">Tristão da Cunha</option>
				<option value="TN">Tunísia)</option>
				<option value="TM">Turcomenistão</option>
				<option value="TR">Turquia</option>
				<option value="TV">Tuvalu</option>
				<option value="UA">Ucrânia</option>
				<option value="UG">Uganda</option>
				<option value="UY">Uruguai </option>
				<option value="UZ">Uzbequistão</option>
				<option value="VU">Vanuatu</option>
				<option value="VE">Venezuela</option>
				<option value="VN">Vietnã</option>
				<option value="WF">Wallis e Futuna</option>
				<option value="ZM">Zâmbia</option>
				<option value="ZW">Zimbábue</option>
			</select>
	</p>
	<p>
	<label for="email">E-mail</label>
		<input type="email" id="email" size="28" name="Email">
	</p>
	<p>
	<label for="numSNS">SNS</label>
		<input id="numSNS" maxlength="9" size="10" name="SNS">
		<label for="numNIF">NIF</label>
		<input id="numNIF" maxlength="9" size="10" name="NIF">
	</p>
	</td>
</tr>

<tr>
	<td>
	<input type="file" id="realupload" name="realupload" class="realupload" accept="image/*" onChange="readURL(this);" />
	<script>
	function
	showThumbnail(files) {
    loadImage(files[0]);
    counter = 0;
    function loadImage( file ) {
        var canvas = document.createElement("canvas"),
            img = new Image();

        img.onload = function() {
            var w = img.width / 10, h = img.height / 10;
            canvas.width = w;
            canvas.height = h;	
            var ctx = canvas.getContext("2d");
            ctx.drawImage(img, 0, 0, w, h);

            // configurações de crop
            var sourceX = img.width * 0.30,
                sourceY = img.height * 0.30,
                sourceWidth = img.width * 0.40,
                sourceHeight = img.height * 0.40;

            ctx.drawImage(img, sourceX, sourceY, sourceWidth, sourceHeight, 0, 0, w, h);
            URL.revokeObjectURL( img.src );
            img = null;

            if (files.length > counter) {
                counter++;
                loadImage(files[counter]);
            }
        };

        var URL = window.URL || window.webkitURL;

        img.src = URL.createObjectURL( file );

        var thumbnail = document.getElementById("thumbnail");
        thumbnail.appendChild(canvas);
    }
}
</script>
		
	</td>
	
	<td>
		<label for="numCC">Cartão de Cidadão</label>
		<input id="numCC" maxlength="8" size="10" name="CC">
	</td>
</tr>

<tr>
	<td>
	</td>
	<td>
		<label for="numTelemovel">Nº de Telemóvel</label>
		<input id="numTelemovel" maxlength="9" size="10" name="Telemovel">
		<label for="Telefone">Telefone</label>
		<input type="Telefone" maxlength="9" size="10" name="Telefone">
	</td>
</tr>

<tr>
	
	<td>
	<h2>Dados Familiares</h2>
	</td>
</tr>


<tr>
	
	<td>
		<label for="inputNome">Responsável</label>
		<input type="text" id="responsavel" name="Responsavel" size="20">
	</td>
</tr>
<tr>
	
	<td>
		<label for="parentesco">Parentesco</label>
		<input type="text" id="parentesco" name="Parentesco" size="10">
		
	</td>
</tr>
<tr>
	
	<td>
		<label for="inputTelefone">Telefone </label>
		<input type="text" id="telefone" name="TelefoneResp" maxlength="9" size="9">
	</td>
</tr>
<tr>
	
	<td>
	
		<label for="morada">Morada</label>
		<input type="text" id="morada" name="MoradaResp" size="20">
	</td>
</tr>
	
	

</table>
	
<h4>Observações</h4>
<textarea id="obs" rows="4" cols="50" name="Observacoes"></textarea>
<p>
		<input type="submit" value="Registar">
		<input type="reset" value="Limpar">
		<input type="button" value="Cancelar">
</p>

</form>
</body>
</html> 