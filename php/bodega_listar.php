<?php
// Incluir la conexión
include 'conexion.php';

// Habilitar errores para depuración (temporal, elimina en producción)
error_reporting(E_ALL);
ini_set('display_errors', 1);


    // Consulta para obtener usuarios según el rol
    $query = "SELECT * FROM stock";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['prod_name']) . "</td>";
            echo "<td>" . htmlspecialchars($row['marca']) . "</td>";
            echo "<td>" . htmlspecialchars($row['unidad']) . "</td>";
            echo "<td>" . htmlspecialchars($row['cantidad']) . "</td>";
            echo "<td>
            <a href='#'>Agregar</a>
        
          </td>";
    echo "</tr>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='4' class='no-data'>No hay insumos registrados</td></tr>";
    }

    $stmt->close();


// Cerrar la conexión
$conn->close();
?>
