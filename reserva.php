<?php 
// include("conexion_reg.php");
//     session_start();
//         if(!isset($_SESSION['id'])){
//         header("Location: login.php");
//     }
// $iduser = $_SESSION['id'];
// $sql = "SELECT id, nombre FROM usuarios WHERE id = '$iduser'";
// $resultado = $conexion->query($sql);
// $row = $resultado->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="include/js/script.js"></script>
    <title>Reserva de Cancha de Golf</title>
</head>
<body>

    <h2>Reserva de Cancha de Golf</h2>


    <form id="reservaForm">

        <label for="golf">Golf:</label>
        <select name="Tee" id="Tee">
            <option value="1">Par</option>
            <option value="2">2 jugadores</option>

        </select>
        
        <label for="fecha">Fecha de Reserva:</label>
        <input id="fecha" type="text" class="datepicker" name="fecha" required>

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email" required>

        <label for="telefono">Teléfono:</label>
        <input type="tel" id="telefono" name="telefono" required>

        <label for="hora">Hora de Reserva:</label>
        <input type="time" id="hora" name="hora" required>

        <label for="jugadores">Número de Jugadores:</label>
        <select id="jugadores" name="jugadores" required>
            <option value="1">1 jugador</option>
            <option value="2">2 jugadores</option>
            <option value="3">3 jugadores</option>
            <option value="4">4 jugadores</option>
        </select>

        <button type="submit">Reservar</button>
    </form>

</body>
</html>
