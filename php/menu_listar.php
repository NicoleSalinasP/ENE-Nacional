<?php
// Incluir la conexión
include 'conexion.php';

// Habilitar errores para depuración (temporal, elimina en producción)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Verificar si se envió un rol a través del parámetro GET
if (isset($_GET['catSelect'])) {
    $cat_id = intval($_GET['catSelect']); // Convertir a entero por seguridad

    // Consulta para obtener usuarios según el rol
    $query = "SELECT * FROM menu WHERE cat_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $cat_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['plato_name']) . "</td>";
            echo "<td>" . htmlspecialchars($row['desc_plato']) . "</td>";
            echo "<td>" . htmlspecialchars($row['precio']) . "</td>";
            echo "<td>" . htmlspecialchars($row['imagen']) . "</td>";
            echo "<td>
            <a href='#'>Agregar</a>
        
          </td>";
    echo "</tr>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='4' class='no-data'>No hay platos registrados</td></tr>";
    }

    $stmt->close();
}

// Cerrar la conexión
$conn->close();
?>
