
<?php 
	include "connect.php";
	/*$con = mysqli_connect('localhost','root');
	if($con){
		echo"connection";
	}

	mysqli_select_db($con,'quizdb');
*/
?>





<!DOCTYPE html>
<html>
<head>
	<title>Mundo Do Quiz</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	 <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
<!-- 
	 font-family: 'Montserrat', sans-serif; 
	font-family: 'Open Sans', sans-serif;
	-->

</head>
<body>

	<div class="container">
		<h1 class="text-center"> Bem vindo ao Mundo Do Quiz </h1><br>

		<div class="row">
			
			<div class="col-lg-6">
				<div class="card">
					<h4 class="card-header text-center"> Login  </h4>
					<br>
					<form action="login.php" method="post">
						<div class="form-group">
							<label for="user "> Usuário: </label>
							<input type="text" name="user" id="user" required class="form-control">
						</div>
						<div class="form-group">
							<label for="pass "> Senha: </label>
							<input type="password" name="pass" required id="pass" class="form-control">
						</div>
						<button class="btn btn-success d-block m-auto" type="submit"> Entrar </button>
					</form>
				
				</div>
			</div>

			<div class="col-lg-6">
				<div class="card">
					<h4 class="card-header text-center"> Cadastro </h4>
					<br>
					<form action="registration.php" method="post">
						<div class="form-group">
							<label for="user "> Usuário: </label>
							<input type="text" name="user" required id="user" class="form-control">
						</div>
						<div class="form-group">
							<label for="pass "> Senha: </label>
							<input type="password" name="pass" required id="pass" class="form-control">
						</div>
						<button class="btn btn-success d-block m-auto" type="submit"> Cadastrar </button>
						<div class="duplicate"> </div>
					</form>

				</div>
			</div>
				</div>
			</div>

		</div>

	</div>

</body>
</html>