<!DOCTYPE html>
<html lang="es">
<link rel="icon" type="image/x-icon" href="liga.jpeg">
<head>
    <meta charset="UTF-8">
    <title>Mesas</title>
    <link rel="stylesheet" href="mesas.css">
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

    <h1>Liga 3x3 Cele Cortés</h1>
    <h2>Inscripción de Mesas</h2>
    <img class="foto1" src="paradas.png" alt="imagen">
    <p>DNI:</p>
    <p><input type="text" name="dni"><p>

    <p>Nombre Completo:</p>
    <p>
    <p><input type="text" name="nombre" placeholder="Nombre"></p>
    <p><input type="text" name="apellidos" placeholder="Apellidos"></p>
    </p>

    <p>Localidad:</p>
    <p>
            <select name="loca_mesa">
                <?php
                    mysqli_select_db($enlace, "liga");
                    $buscarl = "SELECT localidad_mesa, dni_mesa FROM mesas";
                    $buscarloca = mysqli_query($enlace, $buscarl);
                    if (mysqli_num_rows($buscarloca) > 0){
                        while($fila1 = mysqli_fetch_array($buscarloca)){
                            echo "<option value= " .$fila1[0]. ">" .$fila1[0]. "</option>";
                        }
                    }
                ?>
        </select></p>

    <p>Fecha de Nacimiento:</p>
    <p><input type="date" name="fechanaci"><p>

    <p>Número de Teléfono:</p>
    <p><input type="text" name="ntelefono" placeholder="ej:23"></p>

    <p>Correo Electrónico:</p>
    <p><input type="text" name="correo" placeholder="ejemplo@gmail.com"></p>

    <p><input type="submit" name="inscribir" value="Registrar Mesa">
    <input type="reset" value="Limpiar"></p></p>

    <?php
                if (isset($_POST["inscribir"])){
                mysqli_select_db($enlace, "liga");

                $dni = $_POST["dni"];
                $nombre = $_POST["nombre"];
                $apellidos = $_POST["apellidos"];
                $loca_mesa = $_POST["loca_mesa"];
                $fechanaci = $_POST["fechanaci"];
                $ntelefono = $_POST["ntelefono"];
                $correo = $_POST["correo"];

                $registro_mesa = "INSERT INTO mesas(dni_mesa, nombre_mesa, apellidos_mesa, localidad_mesa, fechanacimiento_mesa, ntelefono_mesa, correo_mesa) VALUES('$dni', '$nombre', '$apellidos', '$loca_mesa', '$fechanaci', $ntelefono, '$correo');";
                mysqli_query($enlace, $registro_mesa);
                echo "<p>Mesa inscrito correctamente";
                }

                ?>
    

</form>
    
</body>
</html>