<?php 
include 'ligarbd.php'; 
$login_cookie = $_COOKIE['login'];
        if(isset($login_cookie)){
			
		echo "<image src='logo.jpg'> <logout> Bem Vindo ".$login_cookie." <a href = 'logout.php'>Logout</a></logout>";	
		 
		}
		?>