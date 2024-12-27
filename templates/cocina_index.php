<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/styles.css">
    <title>Cocina</title>
    <h1>Bienvenido a Siglo XXI</h1>
</head>
    
<body>
    <br></br>
    <div style="position: relative;">
        <button class="toggle-menu" onclick="toggleMenu()">☰ Menú</button>
        <button class="logout-button" onclick="logout()">Cerrar Sesión</button>
        <div class="menu" id="menu">
            <h2>Menú</h2>
            <a href="bodega_index.php" onclick="showContent('#')">Inicio</a>
            <a href="#" onclick="showContent('#')">Realizar pedido</a>
        </div>
    </div>
    <br></br>

    

    <!-- Tabla de trabajos -->
     <table id="tabla-usuarios">
        <thead>
            <tr>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Estado</th>
                <th>Mesa</th>
                <th>Acciones</th>
                
                
                
                
            
             
            </tr>
        </thead>
        <tbody>
            <?php 
          
            include '../php/cocina_listar.php';
            
            ?>
                                 
        </tbody>
    </table>
    

    


    <script>
        function toggleMenu() {
            var menu = document.getElementById("menu");
            menu.style.display = (menu.style.display === "none" || menu.style.display === "") ? "block" : "none";
        }

        
        function logout() {
          
          window.location.href = "../index.html";
          // Aquí podrías agregar lógica adicional para manejar la sesión si es necesario.
      }


    </script>

<style>

    .editar-button {
            background-color: #000; 
            color: white;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
        }

    #tabla-usuarios {
        width: 80%; /* Ocupa todo el ancho disponible */
        border-collapse: collapse; /* Elimina espacios entre bordes */
        margin: 20px 0; /* Espaciado vertical */
        font-size: 16px; /* Tamaño de fuente */
        background-color: rgba(255, 255, 255, 0.8); /* Fondo blanco translúcido */
        border: 1px solid #ccc; /* Borde alrededor de la tabla */
        border-radius: 8px; /* Bordes redondeados */
        overflow: hidden; /* Evita que se desborden los bordes */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Sombra suave */
        align-items: center;
    }

    /* Encabezado de la tabla */
    #tabla-usuarios th {
        background-color: rgba(0, 0, 0, 0.9); /* Fondo negro translúcido */
        color: white; /* Texto blanco */
        padding: 12px; /* Espaciado interno */
        text-transform: uppercase; /* Texto en mayúsculas */
        font-weight: bold; /* Negrita */
        text-align: center; /* Texto centrado */
        border: 1px solid #ccc; /* Borde de las celdas del encabezado */
    }

    /* Filas de la tabla */
    #tabla-usuarios td {
        padding: 10px; /* Espaciado interno */
        text-align: center; /* Centrar contenido */
        border: 1px solid #ccc; /* Borde de las celdas */
        vertical-align: middle; /* Centrado vertical */
        color: #333; /* Texto oscuro */
    }

    /* Alternar colores para las filas */
    #tabla-usuarios tr:nth-child(even) {
        background-color: rgba(200, 200, 200, 0.3); /* Fondo gris claro translúcido */
    }

    #tabla-usuarios tr:nth-child(odd) {
        background-color: rgba(255, 255, 255, 0.8); /* Fondo blanco translúcido */
    }

    /* Resaltado al pasar el cursor */
    #tabla-usuarios tr:hover {
        background-color: rgba(0, 0, 0, 0.2); /* Fondo negro translúcido */
        cursor: pointer; /* Cambia el cursor a un puntero */
    }

    /* Mensaje cuando no hay datos */
    #tabla-usuarios .no-data {
        text-align: center;
        font-weight: bold;
        color: #c0392b; /* Texto rojo */
        padding: 15px;
    }

</style>
</body>
</html>
