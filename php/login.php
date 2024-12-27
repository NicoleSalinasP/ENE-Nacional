<?php
session_start();
require_once('conexion.php'); // Asegúrate de que la conexión esté correcta

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $correo = $_POST['correo'];
    $password = $_POST['password'];

    // Consultar en la tabla "users"
    $query = "SELECT * FROM usuarios WHERE correo = ?";

    // Preparar y ejecutar la consulta
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $correo);  
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Obtener los datos del usuario
        $usuario = $result->fetch_assoc();

        // Verificar la contraseña (comparación directa sin hashing)
        if ($password === $usuario['password']) {
            // Iniciar sesión
            $_SESSION['id'] = $usuario['id']; // ID del usuario
            $_SESSION['rut'] = $usuario['rut'];
            $_SESSION['nombre'] = $usuario['nombre'];
            $_SESSION['apellido'] = $usuario['apellido'];
            $_SESSION['correo'] = $usuario['correo']; // correo del usuario
            $_SESSION['rol_id'] = $usuario['rol_id']; // Rol del usuario

            // Redirigir según el rol del usuario
            switch ($usuario['rol_id']) {
                case 1: // Administrador
                    header("Location: ../templates/admin_index.html");
                    break;
                case 2: // Cliente
                    header("Location: ../templates/cliente_index.php");
                    break;
                case 3: // Bodega
                    header("Location: ../templates/bodega_index.php");
                    break;
                case 4: // Finanzas
                    header("Location: ../templates/finanzas_index.php");
                    break;
                case 5: // Cocina
                    header("Location: ../templates/cocina_index.php");
                    break;
                default:
                    // Si el rol no es válido, redirigir a la página de inicio
                    header("Location: ../templates/index.html?error=Rol%20inválido");
                    break;
            }
            exit();
        } else {
            // Si la contraseña es incorrecta
            header("Location: ../templates/index.html?error=Contraseña%20incorrecta");
            exit();
        }
    } else {
        // Si no se encuentra el usuario
        header("Location: ../templates/index.html?error=Usuario%20no%20encontrado");
        exit();
    }
}
?>

