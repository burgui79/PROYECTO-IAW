<!DOCTYPE html>
<html lang="es">
<link rel="icon" type="image/x-icon" href="liga.jpeg">
<head>
    <meta charset="UTF-8">
    <title>Equipos</title>
    <link rel="stylesheet" href="equipos.css">
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
    <h1>Liga 3x3 Cele Cortés</h1>
    <h2>Registro de Equipos</h2>

    <img class="foto1" src="paradas.png" alt="imagen">

    <?php
        session_start();
    ?>

    <p>Código del Equipo:</p>
    <p><input type="text" name="id" value="<?php echo rand(1,1000000000)?>"></p>

    <p>Nombre del Equipo:</p>
    <p><input type="text" name="nombreequipo"></p>

    <p>Localidad:</p>
    <div>
        <select name="loca_equipo">
        <option value="paradas">Paradas</option>
        <option value="marchena">Marchena</option>
        <option value="arahal">Arahal</option>
        <option value="montellano">Montellano</option>
        <option value="lapuebla">La Puebla de Cazalla</option>
        <option value="elcoronil">El Coronil</option>
    </select></p>
    </div>

    <p>Número de Componentes:</p>
    <p><input type="number" name="ncomponentes"></p>

    <p>Categoría</p>
    <div>
    <select name="categoria">
        <option value="alevin">Alevin</option>
        <option value="infantil">Infantil</option>
        <option value="cadete">Cadete</option>
        <option value="junior">Junior</option>
        <option value="senior">Senior</option>
    </select></p>
    </div>

    <p>
            <input type="submit" name="registrar" value="Registrar Equipo">
            <input type="reset" value="Limpiar">
    </p>

    <?php
            if (isset($_POST["registrar"])){
                mysqli_select_db($enlace, "liga");

                $id = $_POST["id"];
                $nombre = $_POST["nombreequipo"];
                $loca = $_POST["loca_equipo"];
                $ncomponentes = $_POST["ncomponentes"];
                $categoria = $_POST["categoria"];

                $registro_equipos = "INSERT INTO equipos(id_equipo, nombre_equipo, categoria, ncomponentes, localidad_equipo) VALUES($id, '$nombre', '$categoria', $ncomponentes, '$loca');";
                mysqli_query($enlace, $registro_equipos);
                echo "<p>Equipo inscrito correctamente</p>";
                }

    ?>

</form>
    
</body>
</html>