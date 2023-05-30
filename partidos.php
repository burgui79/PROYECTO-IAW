<!DOCTYPE html>
<html lang="es">
<link rel="icon" type="image/x-icon" href="liga.jpeg">
<head>
    <meta charset="UTF-8">
    <title>Partidos</title>
    <link rel="stylesheet" href="partidos.css">
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
    <h2>¡Rellena las Estadísticas!</h2>
    <img class="foto1" src="paradas.png" alt="imagen">
    
    <p>Código del Partido:</p>
    <p><input type="text" name="test" value="<?php echo rand(1,1000000000)?>"></p>

    <p>Puntos Equipo Local:</p>
    <p><input type="number" name="plocal"></p>

    <p>Puntos Equipo Visitante:</p>
    <p><input type="number" name="pvisi"></p>

    <p>Rebotes Equipo Local:</p>
    <p><input type="number" name="rlocal"></p>

    <p>Rebotes Equipo Visitante:</p>
    <p><input type="number" name="rvisi"></p>

    <p>Asistencias Equipo Local:</p>
    <p><input type="number" name="alocal"></p>

    <p>Asistencias Equipo Visitante:</p>
    <p><input type="number" name="avisi"></p>

    <p>Fecha del Partido:</p>
    <p><input type="date" name="fecha"></p>

    <p><input type="submit" name="estadistica" value="Elaborar Estadística">
    <input type="reset" value="Limpiar"></p>

    <?php
                if (isset($_POST["estadistica"])){
                mysqli_select_db($enlace, "liga");

                $test = $_POST["test"];
                $plocal = $_POST["plocal"];
                $pvisi = $_POST["pvisi"];
                $rlocal = $_POST["rlocal"];
                $rvisi = $_POST["rvisi"];
                $alocal = $_POST["alocal"];
                $avisi = $_POST["avisi"];
                $fecha = $_POST["fecha"];

                $registro_partido = "INSERT INTO partidos(id_partido, puntoslocal, puntosvisi, reboteslocal, rebotesvisi, asistenciaslocal, asistenciasvisi, fecha_partido) VALUES('$test', $plocal, $pvisi, $rlocal, $rvisi, $alocal, $avisi, '$fecha');";
                mysqli_query($enlace, $registro_partido);
                echo "<p>Estadística rellenada correctamente";
                }

                ?>
</form>
    
</body>
</html>