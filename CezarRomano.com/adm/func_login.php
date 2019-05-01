<?php
	if(isset($_POST['bt-login'])){
		extract($_POST);
		include '../config/config.php';

		$q = "SELECT * FROM administrador WHERE login = '$login'";
		$query = $mysqli->query($q);

		if(mysqli_num_rows($query) > 0){
			if($senha = $query['senha']){
				header('Location: painel.php');
			}
		}else{
			
		}
	}
?>