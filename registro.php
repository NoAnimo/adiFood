<?php
    require_once('conn.php');
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
    	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
	    <link rel="stylesheet" href="css/main.css">
        <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
		<link rel="stylesheet" href="css/registro.css">
		<link rel="stylesheet" href="css/animate.css">
		<script type="text/javascript" src="script/jquery.js"></script>
	    <script type="text/javascript" src="script/registro.js"></script>
        <title>adiFood</title>

        <!--<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
-<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
------ Include the above in your HEAD tag ---------->

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

	</head>
	<body>
		<div class="container">
			<br>  <p class="text-center verde pacifico">Empieza la aventura registrandote! <a href="http://adiFood.com/"> </a></p>
			<hr>
			<div class="card bg-light animated zoomIn">
				<article class="card-body mx-auto" style="max-width: 400px;">
					<h4 class="card-title mt-3 text-center">Registrate!</h4>
					<p class="text-center">Pueden iniciar con una de las siguientes cuentas:</p>
					<p>
						<a href="" class="btn btn-block btn-twitter"> <i class="fab fa-twitter"></i>Login via Twitter</a>
						<a href="https://web.facebook.com" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i>   Login via facebook</a>
					</p>
					<p class="divider-text">
        				<span class="bg-light">Ingresa tus datos:</span>
    				</p>
					<!-- <form> -->
						<div class="form-group input-group">
							<div class="input-group-prepend">
		    					<span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 					</div>
        					<input name="" id="nombre" class="form-control chico montserrat" placeholder="Full name" type="text">
    					</div> <!-- form-group// -->
    					<div class="form-group input-group">
    						<div class="input-group-prepend">
		    					<span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 					</div>
        					<input name="" id="correo" class="form-control chico" placeholder="Email address" type="email">
    					</div> <!-- form-group// -->
    					<div class="form-group input-group">
    						<div class="input-group-prepend">
		    					<span class="input-group-text"> <i class="fa fa-phone"></i> </span>
							</div>
							<select class="custom-select" id="codigo" style="max-width: 120px;">
		    					<option selected="">+51</option>
		    					<option value="1">+01</option>
							</select>
    						<input name="" id="telefono" class="form-control chico" placeholder="Phone number" type="text">
    					</div> <!-- form-group// -->
    					<!-- <div class="form-group input-group">
    						<div class="input-group-prepend">
		    					<span class="input-group-text"> <i class="fa fa-building"></i> </span>
							</div>
							<select class="form-control chico">
								<option selected="" class="chico"> Select job type</option>
								<option>Designer</option>
								<option>Manager</option>
								<option>Accaunting</option>
							</select>
						</div>  -->
    					<div class="form-group input-group">
    						<div class="input-group-prepend">
		    					<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
							</div>
        					<input class="form-control chico" id="contra1" placeholder="Create password" type="password">
    					</div> <!-- form-group// -->
    					<div class="form-group input-group">
    						<div class="input-group-prepend">
		    					<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
							</div>
        					<input class="form-control chico" id="contra2" placeholder="Repeat password" type="password">
    					</div> <!-- form-group// -->
    					<div class="form-group">
        					<button class="btn btn-primary btn-block" id="submituser"> Create Account  </button>
    					</div> <!-- form-group// -->
						<div class="err" id="mensaje_error"></div>
    					<p class="text-center">Ya tienes una cuenta? <a href="signin.php">Log In</a> </p>
					<!-- </form> -->
				</article>
			</div> <!-- card.// -->
		</div>
<!--container end.//-->

		<br><br>
		<article class="bg-secondary mb-3">
			<div class="card-body text-center">
    			<h3 class="text-white mt-3">adiFood</h3>
				<p class="h5 text-white">Vive saludable!  <br> Animate! forma parte de nuestra comunidad y comparte! </p>   <br>
				<p><a class="btn btn-warning" target="_blank" href="http://adifood.com/"> visitanos
 				<i class="fa fa-window-restore "></i></a></p>
			</div>
			<br><br>
		</article>
	</body>
</html>
