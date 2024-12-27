<?php
// Incluir la conexión
include 'conexion.php';

// Habilitar errores para depuración (temporal, elimina en producción)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Verificar si se envió un rol a través del parámetro GET
if (isset($_GET['roleSelect'])) {
    $rol_id = intval($_GET['roleSelect']); // Convertir a entero por seguridad

    // Consulta para obtener usuarios según el rol
    $query = "SELECT rut, nombre, apellido, correo FROM usuarios WHERE rol_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $rol_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['rut']) . "</td>";
            echo "<td>" . htmlspecialchars($row['nombre']) . "</td>";
            echo "<td>" . htmlspecialchars($row['apellido']) . "</td>";
            echo "<td>" . htmlspecialchars($row['correo']) . "</td>";
            echo "<td>
            <a href='../templates/admin_editarusuario.php?rut=".$row['rut']."'>Editar</a>
            <a href='../templates/admin_eliminarusuario.php?rut=".$row['rut']."'>Eliminar</a>
          </td>";
    echo "</tr>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='4' class='no-data'>No hay usuarios registrados</td></tr>";
    }

    $stmt->close();
}

// Cerrar la conexión
$conn->close();
?>
