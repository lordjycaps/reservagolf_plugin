<?php
include("conexion_reg.php");
// session_start();
//     if(!isset($_SESSION['id'])){
//     header("Location: login.php");
// }
if(!empty($_POST)){
    $usuario = mysqli_real_escape_string($conexion,$_POST['user']);
    $password = mysqli_real_escape_string($conexion,$_POST['password']);
    $password_encriptada = sha1($password);
    $sql = "SELECT id FROM usuarios WHERE usuario = '$usuario' AND
                     contrasena = '$password_encriptada'";

    $resultado = $conexion->query($sql);
    $rows = $resultado->num_rows;
    if($rows > 0 ){
        $row = $resultado->fetch_assoc();
        $_SESSION['id'] = $row['idusuario'];
        header("Location: reserva.php");
    }else{
        echo "<script>
            alert('Usuario o Contraseña Incorrecta ');
            window.location = 'login.php';  
        </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        button, a {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            text-decoration: none;
        }
        .botones {
            display: flex;
            justify-content: space-around;
        }

    </style>
</head>
<body>

    <h2>Iniciar Sesión</h2>

    <form id="loginForm" action="<?php $_SERVER['PHP_SELF'];?>" method = "POST">
        <label for="username">Nombre de Usuario:</label>
        <input type="text" id="username" name="user" required>

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>

        <div class="botones">
        <button type="submit" name="ingresar">Iniciar Sesión</button>
        <!-- <button type="submit" name="Registrar"> <a href="http://localhost/reservasgolf/registro.php">Registrar</a></button> -->
        </div>
       
        
    </form>
</body>
</html>
