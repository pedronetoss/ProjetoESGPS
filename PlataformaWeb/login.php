<?php
    $login = $_POST['numUtilizador'];
    $entrar = $_POST['Entrar'];
    $senha = $_POST['password'];
	include 'ligarbd.php'; 
        if (isset($entrar)) {
                     
            $verifica = mysql_query("SELECT * FROM utilizadores WHERE loginAtribuido = '$login'	AND password = '$senha'") or die("erro ao selecionar");
			
                if (mysql_num_rows($verifica)<=0){
                    echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login.html';</script>";
                    die();
                }else{
					$dadoslogin = mysql_fetch_array($verifica);
					//echo $dadoslogin['nome'];
				    setcookie("login",$dadoslogin['nome']);
                    header("Location:administracaoAdmin.php");
                }
        }
?>


