<?php
session_start(); 
include_once "conexion.php";
function verificar_login($user,$password,&$result)
    {
        $sql = “SELECT * FROM usuarios WHERE usuario = ‘$user’ and ‘$password’ = ‘$password’”;
        $rec = mysql_query($sql);
        $count = 0;
        while($row = mysql_fetch_object($rec))
        {
            $count++;
            $result = $row;
        }
        if($count == 1)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }


	if(!isset($_SESSION['userid'])) 
	{
	    	if(isset($_POST['login'])) 
	    	{
			if(verificar_login($_POST['inputUser'],$_POST['inputPassword'],$result) == 1) 
			{
			    $_SESSION['userid'] = $result->idusuario;
			   
			}
			else
			{
			    $_SESSION['estado']='noValido'; 
		 	    header("location:index.php");
			    
			}
	    	}
	}
?>
<html>
<head>
	<link rel="icon" href="imagenes/favicon.ico">
	<title> Menu principal </title>
	
</head>
 <div id="header">

PROYECTO DE CLOUD COMPIUTING - 3 EN RAYA EN LA NUBE

</div>
<body onload="playAgain1()" bgcolor="#CCCCCC" text="#000000" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<nav>
<ul>
    <li><a title="Opcion 1 - FACIL" href="3enrayaF.html">Opcion 1 - FACIL</a></li>
    <li><a title="Opcion 2 - MEDIO" href="3enraya.html">Opcion 2 - MEDIO</a></li>
    <li><a title="Opcion 3 - DIFICIL" href="#">Opcion 3 - DIFICIL</a></li>

</ul>
</nav>
</body>
 <div id="footer">

MAESTRIA EN COMUNICACIONES Y REDES DE TELECOMUNICACIONES

</div>
</html>
