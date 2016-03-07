    <?php
// Evitar los warnings de las variables no definidas:(
$err = isset($_GET['error']) ? $_GET['error'] : null ;

?>

<!DOCTYPE html>

<html lang="esp">

	<head>
    	<meta charset="utf-8" />
    	<title>Formulario de Sesion </title>
    </head>
    
    <body>
    
    	<form name="user" action="session_init.php" method="post">
        	<?php if($err==1){
				echo "Usuario o Contraseña Erróneos <br />";
			}
			if($err==2){
				echo "Debe iniciar sesion para poder acceder el sitio. <br />";
			}
			?>
            <h1>Sistema de Eventos </h1>
        	<label> Usuario: </label><br />
            <input type="text" name="usern" id="usern" maxlength="15" /><br />
            <label> Contraseña: </label><br />
            <input type="password" name="passwd" id="passwd" maxlength="10" /><br />
                <label> rol: </label><br />
            <select name="nom_rol">
                    <option value="administrador">Administrador</option>
                    <option value="cajero">Cajero</option>                    
            </select>
            <br></br>
            <input type="submit" name="enter" id="enter" value="Ingresar" />        
        </form>
    
    </body>
    
</html>