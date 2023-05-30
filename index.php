<!DOCTYPE html>
<html lang="es">
<link rel=con" type="image/x-icon" href="liga.jpeg">
<head>
<meta charset="UTF-8">
    <title>X Liga 3x3 Cele Cortés</title>
    <link rel="stylesheet" href="indexx.css">
</head>
<body>
<?php
    $host = "localhost";
    $user = "root";
    $pwd = "iaw";

    $enlace = mysqli_connect($host, $user, $pwd);
    mysqli_select_db($enlace, "liga");
?>

<form action="" method="post">
    <?php
        session_start();
    ?>

    <h1>Bienvenidos a la Liga 3x3 Cele Cortés</h1>
    <img src="liga.jpeg">
    <h2>Bienvenidos una vez más a otra liga 3x3 organizada por el Club Baloncesto Paradas</h2>
    <h2>¿Qué desea realizar?</h2>
    
    <p>
        <input type="submit" name="equipo" value="Inscribir Equipo">
        <input type="submit" name="jugador" value="Inscribir Jugadores">
        <input type="submit" name="mesa" value="Isncribir Mesa">
        <input type="submit" name="partido" value="Rellenar Estadística">
    </p>

    <?php
        if(isset($_POST["partido"])){
        header ('Location: partidos.php');

        } elseif(isset($_POST["mesa"])){
            header ('Location: mesas.php');
        }
        elseif(isset($_POST["equipo"])){
            header ('Location: equipos.php');
        }
        elseif(isset($_POST["jugador"])){
            header ('Location: jugadores.php');
        }
    ?>



</form>
    
</body>
</html>