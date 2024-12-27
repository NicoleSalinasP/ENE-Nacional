<?php
// Incluir la conexión
include 'conexion.php';

// Habilitar errores para depuración (temporal, elimina en producción)
error_reporting(E_ALL);
ini_set('display_errors', 1);


    // Consulta para obtener usuarios según el rol
    $query = "SELECT m.plato_name AS menu, dp.cantidad, ep.desc_estado AS estado,  p.mesa FROM 
    detalle_pedido dp INNER JOIN pedido p ON dp.pedido_id = p.id
    INNER JOIN menu m ON dp.menu_id = m.id INNER JOIN 
    estado_pedido ep ON p.estado_id = ep.id; ";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $result = $stmt->get_result();
    

    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['menu']) . "</td>";
            echo "<td>" . htmlspecialchars($row['cantidad']) . "</td>";
            echo "<td>" . htmlspecialchars($row['estado']) . "</td>";
            echo "<td>" . htmlspecialchars($row['mesa']) . "</td>";
            echo "<td>
            <a href='#'>Despachar</a>
        
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
