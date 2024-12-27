<?php
// Incluimos la conexión a la base de datos
include 'conexion.php';

// Habilitar errores para depuración (temporal)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Verificamos si se enviaron los datos mediante POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitizar los datos de entrada
    $rut = $_POST['rut'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = filter_var(trim($_POST['correo']), FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    $rol_id = 2; // Rol por defecto: cliente

    // Validación de contraseñas
    if ($password !== $confirmPassword) {
        header("Location: ../index.html?error=" . urlencode('Las contraseñas no coinciden'));
        exit();
    }

    // Verificar si el correo o el RUT ya están registrados
    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE correo = ? OR rut = ? LIMIT 1");
    $stmt->bind_param("ss", $correo, $rut);

    if (!$stmt->execute()) {
        die("Error en la consulta: " . $stmt->error);
    }

    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Si ya existe el correo o el RUT
        header("Location: ../index.html?error=" . urlencode('El correo o el RUT ya están registrados'));
        exit();
    }

  

    // Insertar el nuevo usuario en la base de datos
    $stmt = $conn->prepare("INSERT INTO usuarios (rut, nombre, apellido, correo, password, rol_id) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssi", $rut, $nombre, $apellido, $correo, $password, $rol_id);

    if ($stmt->execute()) {
        header("Location: ../index.html?success=" . urlencode('Registro exitoso'));
    } else {
        header("Location: ../index.html?error=" . urlencode('Error al registrar el usuario: ' . $stmt->error));
    }
}

// Cerrar conexión
$conn->close();
?>
