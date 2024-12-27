<?php include '../php/conexion.php'; ?>
<!DOCTYPE html>
<html lang="es">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/styles.css">
    <title>Editar Usuarios</title>
    <h1>Editar Usuarios</h1>
</head>
<body>
<br></br>
    <div style="position: relative;">
        <button class="toggle-menu" onclick="toggleMenu()">☰ Menú</button>
        <button class="logout-button" onclick="logout()">Cerrar Sesión</button>
        <div class="menu" id="menu">
            <h2>Menú</h2>
            <a href="admin_index.html" onclick="showContent('Gestionar Usuarios')">Inicio</a>
            <a href="admin_usuarios.php" onclick="showContent('Gestionar Usuarios')">Gestionar Usuarios</a>
            <a href="#" onclick="showContent('Gestionar Platos')">Gestionar Platos</a>
            <a href="#" onclick="showContent('Gestionar Mesas')">Gestionar Mesas</a>
            <a href="#" onclick="showContent('Gestionar Proveedores')">Gestionar Proveedores</a>
            <a href="#" onclick="showContent('Reportes')">Reportes</a>
        </div>
    </div>
    <br></br>
    <?php 
        if (isset($_POST['enviar'])){
            $rut=$_POST['rut'];
            $nombre=$_POST['nombre'];
            $apellido=$_POST['apellido'];
            $correo=$_POST['correo'];
            
            
            $sql="update usuarios set nombre='".$nombre."', apellido='".$apellido."', correo='".$correo."' where rut='".$rut."'";
            $resultado=mysqli_query($conn,$sql);

            if ($resultado){
                header("Location: admin_usuarios.php?success=" . urlencode('Registro exitoso'));
            }
            else{
                header("Location: admin_usuarios.php?error=" . urlencode('Error al registrar el usuario: ' . $resultado->error));
            }

            mysqli_close($conn);

        }
        else {
            $rut=$_GET['rut'];
            $sql="select * from usuarios where rut='".$rut."'";
            $resultado=mysqli_query($conn,$sql);
            $fila=mysqli_fetch_assoc($resultado);
            $rut=$fila["rut"];
            $nombre=$fila["nombre"];
            $apellido=$fila["apellido"];
            $correo=$fila['correo'];
            $rol_id=$fila["rol_id"];

            $query="select rol_name from roles where id='".$rol_id."'";
            $res=mysqli_query($conn,$query);
            $rid=mysqli_fetch_assoc($res);
            $rol_name=$rid["rol_name"];

            mysqli_close($conn);
    ?>
            <div class="desc2">
                <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                    <div class="form-control">
                        <label for="rut">RUT:</label>
                        <input type="text" id="rut" name="rut" value="<?php echo $rut;?>" readonly> </input>
                        <br>
                        <label for="nombre">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" value="<?php echo $nombre;?>"> </input>
                        <br>

                        <label for="apellido">Apellido:</label>
                        <input type="text" id="apellido" name="apellido" value="<?php echo $apellido;?>"></input>
                        <br>

                        <label for="correo">Correo electrónico:</label>
                        <input type="correo" id="correo" name="correo" value="<?php echo $correo;?>">
                        <br>

                        <label for="rol_id">Rol:</label>
                        <input type="rol_id" id="rol_id" name="rol_id" value="<?php echo $rol_name;?>" readonly>
                        <br>

                        
                </form>   
                <br>
                <button type="submit" name="enviar" class="editar-button">Actualizar</button>
            
            </div>
            <!-- Contenedor de mensajes dinámicos -->
            <div id="messageContainer" class="message-container" style="display: none;"></div>
        <?php
        } ?>
        
       
       
    </div>

    <script>
        function toggleMenu() {
            var menu = document.getElementById("menu");
            menu.style.display = (menu.style.display === "none" || menu.style.display === "") ? "block" : "none";
        }

        
        function logout() {
          
          window.location.href = "../index.html";
          // Aquí podrías agregar lógica adicional para manejar la sesión si es necesario.
      }

        function showMessage(message, type) {
            const messageContainer = document.getElementById('messageContainer');
            messageContainer.textContent = message;
            messageContainer.className = type === 'error' ? 'message-container error' : 'message-container success';
            messageContainer.style.display = 'block';

            setTimeout(() => {
                messageContainer.style.display = 'none';
            }, 5000);
        }

        // Mostrar mensajes dinámicos según parámetros en la URL
        const params = new URLSearchParams(window.location.search);
        const error = params.get('error');
        const success = params.get('success');
        if (error) showMessage(error, 'error');
        if (success) showMessage(success, 'success');

    </script>

<style>

        .desc2 {
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            padding: 20px;
            margin: 20px;
            text-align: center;
            width: 30%;
        }

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
