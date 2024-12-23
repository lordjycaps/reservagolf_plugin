<?php
include("conexion_reg.php");
if(isset($_POST['registrar'])){
    $nombre = mysqli_real_escape_string($conexion,$_POST['nombre']);
    $usuario = mysqli_real_escape_string($conexion,$_POST['user']);
    $correo = mysqli_real_escape_string($conexion,$_POST['correo']);
    $password = mysqli_real_escape_string($conexion,$_POST['password']);
    $password_encriptada = sha1($password);
    $sqluser = "SELECT id FROM usuarios 
                    WHERE usuarios = '$usuario'";
    $resultadouser = $conexion->query($sqluser);
    $filas = $resultadouser ? $resultadouser->num_rows : 0;

    if ($filas > 0) {
        echo "<script>
            alert('El usuario ya existe');
            window.location = 'registro.php';  // Corregí windows.location a window.location
        </script>";
    } else {
        $sqlusuario = "INSERT INTO usuarios (nombre, usuario, correo, contrasena) VALUES ('$nombre', '$usuario', '$correo', '$password_encriptada')";
        $resut_usuario = $conexion->query($sqlusuario);
    
        if ($resut_usuario) {
            echo "<script>
                alert('Registro Exitoso');
                window.location = 'login.php';  // Corregí windows.location a window.location
            </script>";
        } else {
            echo "<script>
                alert('Error al Registrarse: " . $conexion->error . "');
                window.location = 'registro.php';  // Corregí windows.location a window.location
            </script>";
        }
    }
    

}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="include/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <title>Registro de Usuario</title>
    
</head>
<body>

    <h2>Registro de Usuario</h2>



    <form action="<?php $_SERVER['PHP_SELF'];?>" method = "POST">
    
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="user">Usuario:</label>
        <input type="text" id="user" name="user" required>

        <label for="correo">Correo Electrónico:</label>
        <input type="correo" id="correo" name="correo" required>

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>

        <label for="confirmPassword">Confirmar Contraseña:</label>
        <input type="password" id="confirmPassword" name="confirmPassword" required>

        <div class="botones">
        <button type="submit"></a href="http://localhost/reservasgolf/login.php">Iniciar Sesión</button>
        <button type="submit" name="registrar">Registrarse</button>
        </div>
    </form>

    <script>
        document.getElementById("registrationForm").addEventListener("submit", function(event) {
            // Puedes agregar aquí la lógica de registro, como enviar datos a un servidor.
            // Por ahora, simplemente evitamos que el formulario se envíe.
            event.preventDefault();

            // Ejemplo: Verificación básica de contraseñas
            var password = document.getElementById("password").value;
            var confirmPassword = document.getElementById("confirmPassword").value;

            if (password !== confirmPassword) {
                alert("Las contraseñas no coinciden");
                return;
            }

            // Puedes enviar los datos a un servidor aquí para el registro real
            alert("Registro exitoso");
        });
    </script>

</body>
</html>
