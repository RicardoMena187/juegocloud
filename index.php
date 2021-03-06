<<!DOCTYPE html>
<?php
session_start(); 
?>

<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="imagenes/favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="css/ie-emulation-modes-warning.js"></script>
	 
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

      <form class="form-signin" name="datos" action="index.html" method="post">
        <h2 class="form-signin-heading">Ingrese sus Datos</h2>
        <label for="inputUser" class="sr-only">Usuario</label>
        <input id="inputUser" class="form-control" placeholder="Usuario" required="" autofocus="" type="text">
        <label for="inputPassword" class="sr-only">Contraseña</label>
        <input id="inputPassword" class="form-control" placeholder="Contraseña" required="" type="password">
        <div class="checkbox">
          <label>
            <input value="remember-me" type="checkbox"> Recuerde
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit"	value="login">Ingrese</button>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="css/ie10-viewport-bug-workaround.js"></script>
  
<?php
if($_SESSION['estado']=='noValido') {
	echo '<div>Su usuario es incorrecto, intente nuevamente.</div>'; 
        }
?>
</body>


</html>
