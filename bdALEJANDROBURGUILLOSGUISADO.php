<?php
    $host = "localhost";
    $user = "root";
    $pwd = "iaw";

    $enlace = mysqli_connect($host, $user, $pwd);
    
    $basedatos = "CREATE DATABASE liga";
    mysqli_query($enlace, $basedatos);
    
    mysqli_select_db($enlace, "liga");
    

    $jugadores = "CREATE TABLE jugadores (
        dni CHAR(9) PRIMARY KEY NOT NULL,
        nombre_jugadore VARCHAR(20),
        apellidos_jugador VARCHAR(40),
        correo_jugador VARCHAR(40),
        ntelefono_jugador INT,
        localidad_jugador VARCHAR(20),
        fechanacimiento_jugador DATE,
        posicion VARCHAR(20)
    );";

    mysqli_query($enlace, $jugadores);

    $mesas = "CREATE TABLE mesas (
        dni_mesa CHAR(9) PRIMARY KEY NOT NULL,
        nombre_mesa VARCHAR(30),
        apellidos_mesa VARCHAR(40),
        localidad_mesa VARCHAR(20),
        fechanacimiento_mesa DATE,
        ntelefono_mesa INT,
        correo_mesa VARCHAR(40)
    );";

    mysqli_query($enlace, $mesas);
    
    $partidos = "CREATE TABLE partidos (
        id_partido CHAR(9) PRIMARY KEY NOT NULL,
        puntoslocal INT,
        puntosvisi INT,
        reboteslocal INT,
        rebotesvisi INT,
        asistenciaslocal INT,
        asistenciasvisi INT,
        fecha_partido DATE,
        mesa CHAR(9),
        FOREIGN KEY FK_MESA(mesa) REFERENCES mesas(dni_mesa)
    );";
    
    mysqli_query($enlace, $partidos);

    $equipos = "CREATE TABLE equipos (
        id_equipo CHAR(9) PRIMARY KEY NOT NULL,
        nombre_equipo VARCHAR(20),
        categoria VARCHAR(20),
        ncomponentes INT,
        localidad_equipo VARCHAR(20),
        jugador CHAR(9),
        partido CHAR(9),
        FOREIGN KEY FK_JUGADOR(jugador) REFERENCES jugadores(dni),
        FOREIGN KEY FK_PARTIDO(partido) REFERENCES partidos(id_partido)
    );";
    
    mysqli_query($enlace, $equipos);

    $insertlocajugador1 = "INSERT INTO jugadores(dni,localidad_jugador) VALUES('11111111A','Paradas');";
    mysqli_query($enlace, $insertlocajugador1);
    $insertlocajugador2 = "INSERT INTO jugadores(dni,localidad_jugador) VALUES('22222222D','Arahal');";
    mysqli_query($enlace, $insertlocajugador2);
    $insertlocajugador3 = "INSERT INTO jugadores(dni,localidad_jugador) VALUES('33333333F','Marchena');";
    mysqli_query($enlace, $insertlocajugador3);
    $insertlocajugador4 = "INSERT INTO jugadores(dni,localidad_jugador) VALUES('44444444B','La Puebla de Cazalla');";
    mysqli_query($enlace, $insertlocajugador4);
    $insertlocajugador5 = "INSERT INTO jugadores(dni,localidad_jugador) VALUES('55555555T','El Coronil');";
    mysqli_query($enlace, $insertlocajugador5);
    $insertlocajugador6 = "INSERT INTO jugadores(dni,localidad_jugador) VALUES('66666666N','Montellano');";
    mysqli_query($enlace, $insertlocajugador6);
    

    $insertlocamesa1 = "INSERT INTO mesas(dni_mesa,localidad_mesa) VALUES('56473838U','Paradas');";
    mysqli_query($enlace, $insertlocamesa1);
    $insertlocamesa2 = "INSERT INTO mesas(dni_mesa,localidad_mesa) VALUES('52369742F','Arahal');";
    mysqli_query($enlace, $insertlocamesa2);
    $insertlocamesa3 = "INSERT INTO mesas(dni_mesa,localidad_mesa) VALUES('45201478G','Marchena');";
    mysqli_query($enlace, $insertlocamesa3);
    $insertlocamesa4 = "INSERT INTO mesas(dni_mesa,localidad_mesa) VALUES('52369854J','La Puebla de Cazalla');";
    mysqli_query($enlace, $insertlocamesa4);
    $insertlocamesa5 = "INSERT INTO mesas(dni_mesa,localidad_mesa) VALUES('85202587P','El Coronil');";
    mysqli_query($enlace, $insertlocamesa5);
    $insertlocamesa6 = "INSERT INTO mesas(dni_mesa,localidad_mesa) VALUES('45632178I','Montellano');";
    mysqli_query($enlace, $insertlocamesa6);


    $insertlocaequipo1 = "INSERT INTO equipos(id_equipo,localidad_equipo) VALUES(789521478,'Paradas');";
    mysqli_query($enlace, $insertlocaequipo1);
    $insertlocaequipo2 = "INSERT INTO equipos(id_equipo,localidad_equipo) VALUES(852014859,'Arahal');";
    mysqli_query($enlace, $insertlocaequipo2);
    $insertlocaequipo3 = "INSERT INTO equipos(id_equipo,localidad_equipo) VALUES(563000001,'Marchena');";
    mysqli_query($enlace, $insertlocaequipo3);
    $insertlocaequipo4 = "INSERT INTO equipos(id_equipo,localidad_equipo) VALUES(852003639,'La Puebla de Cazalla');";
    mysqli_query($enlace, $insertlocaequipo4);
    $insertlocaequipo5 = "INSERT INTO equipos(id_equipo,localidad_equipo) VALUES(000000001,'El Coronil');";
    mysqli_query($enlace, $insertlocaequipo5);
    $insertlocaequipo6 = "INSERT INTO equipos(id_equipo,localidad_equipo) VALUES(999999998,'Montellano');";
    mysqli_query($enlace, $insertlocaequipo6);


?>