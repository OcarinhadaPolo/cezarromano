<?php
	if(isset($_POST['bt-login'])){
		extract($_POST);
		include '../config/config.php';
		$senhaN = md5($senha);
		$q = "SELECT * FROM administrador WHERE login = '$login' and senha = '$senhaN'";
		$query = $mysqli->query($q);

		
		echo "$senhaN <br>";
		if(mysqli_num_rows($query) > 0){
			header('Location: painel.php');
		}else{
			echo "<div class='alert alert-danger col-md-12' role='alert'>Usuário não cadastrado <span class='glyphicon glyphicon-remove-circle'></span></div>";
		}
	
		$n2 = "123";
		$n2 = md5($n2);
		echo "$n2 <br>";

		$n = "1234";
		$n = md5($n);
		echo "$n <br>";

		$n1 = "12345";
		$n1 = md5($n1);
		echo "$n1";
		

	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Login | ADM</title>
		<link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="../css/geral.css">
		<link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
	</head>
	<body class="azul">
		<section>
			<div class="container login">
				<div class="row">
					<div class="col-md-12 login">
						<label for="senha" class="col-sm-12 col-xs-12 control-label padding-label"></label>
						<div class="col-md-4 col-sm-12 col-xs-12"></div>
						<center><img src="../img/logo.png" class="img-responsive  img-center col-md-4 col-sm-12 col-xs-12"></center>
						<label for="senha" class="col-sm-12 col-xs-12 control-label padding-label"></label>

						<div class="col-md-4 col-sm-12 col-xs-12"></div>
						<form class="form" method="POST" action="index.php">
							<div class="form-group">
									<div class="col-md-12">
										<label for="email" class="col-md-2 col-sm-2 col-xs-2 padding-label texto-branco">Login: </label>
										<input  required type="text" class="= diferente branco col-md-10 col-sm-10 col-xs-10" name="login" placeholder="Insira seu login" id="login">
									</div>
									<label for="senha" class="col-md-12 col-sm-12 col-xs-12 control-label padding-label"></label>
									<div class="col-md-12">
										<label for="senha" class="col-md-2 col-sm-2 col-xs-2 control-label padding-label texto-preto">Senha: </label>
										<input  required type="text" class=" diferente branco col-md-10 col-sm-10 col-xs-10" name="senha" placeholder="Insira sua senha" id="senha">
									</div>
									<label for="" class="col-sm-12 col-xs-12 control-label padding-label"></label>

									<div class="col-sm-12">
										<button type="submit" class="bt-secundario col-md-12 col-sm-12 col-xs-12" name="bt-login">LOGIN</button>
									</div>
								</div>
						</form>
					</div>
				</div>
			</div>
		</section>
		<script src="../js/js.js"></script>
		<script src="../js/jquery.js"></script>
		<script src="../js/bootstrap.js"></script>
		<script  src = "../libs/jquery-maskmoney-master/dist/jquery.maskMoney.min.js"  type = "text/javascript " ></script>
	</body>
</html>