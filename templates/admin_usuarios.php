<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/styles.css">
    <title>Gestión de Usuarios</title>
    <h1>Gestión de Usuarios</h1>
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

    <div class="select-container">
        <label for="roleSelect" class="desc">Seleccione un rol:</label>
        <select id="roleSelect" onchange="handleRoleChange()">
            <option value="">-- Seleccione un Rol --</option>
            <option value="2">Clientes</option>
            <option value="3">Bodega</option>
            <option value="1">Administración</option>
            <option value="4">Finanzas</option>
            <option value="5">Cocina</option>
        </select>
    </div>

    <div id="userList" class="desc">
        <p>Seleccione un rol para mostrar la lista de usuarios.</p>
    </div>

     <!-- Tabla de trabajos -->
     <table id="tabla-usuarios">
        <thead>
            <tr>
                <th>Rut</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
                <th>Acciones</th>
                
                
                
                
            
             
            </tr>
        </thead>
        <tbody>
            <?php 
          
            include '../php/admin_listar.php';
            
            ?>
                                 
        </tbody>
    </table>
    <br>
    
       <a onclick="openRegisterForm()" class="editar-button">Agregar Usuario</a>

      
    <br>

    <div class="form-container" id="registerForm" style="display: none;">
            <button class="close-btn" onclick="closeForm('registerForm')">X</button>
            <h2>Agregar Usuario</h2>

            <form action="../php/admin_registro.php" method="POST">

                <div id="registerForm" >
                    <!-- Campos específicos para voluntarios -->
                    <label for="rut">Rut:</label>
                    <input type="text" id="rut" name="rut">

                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre">

                    <label for="apellido">Apellido:</label>
                    <input type="text" id="apellido" name="apellido">

                    <label for="correo">Correo:</label>
                    <input type="text" id="correo" name="correo">

                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password">

                    <label for="confirmPassword">Confirmación de Contraseña:</label>
                    <input type="password" id="confirmPassword" name="confirmPassword">
                    <br></br>

                    <label for="rol">Rol:</label>
                    <select id="roleSelect" onchange="handleRoleChange()" name="rol_id">
                        <option value="">-- Seleccione un Rol --</option>
                        <option value="2">Clientes</option>
                        <option value="3">Bodega</option>
                        <option value="1">Administración</option>
                        <option value="4">Finanzas</option>
                        <option value="5">Cocina</option>
                    </select>
                    <br></br>

                </div>

                <button type="submit" >Registrar</button>

            </form>
        </div>
        <div id="messageContainer" style="display: none;"></div>
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

      function openRegisterForm() {
            document.getElementById('registerForm').style.display = 'block';
        }


        function closeForm(registerForm) {
            document.getElementById(registerForm).style.display = 'none';
        }
        

        async function handleRoleChange() {
            const roleSelect = document.getElementById("roleSelect");
            const selectedRole = roleSelect.value;

            if (!selectedRole) {
                document.getElementById("userList").innerHTML = '<p>Seleccione un rol para mostrar la lista de usuarios.</p>';
                return;
            }

            try {
                const response = await fetch(`../php/admin_listar.php?roleSelect=${selectedRole}`);
                if (!response.ok) {
                    throw new Error('Error al obtener los datos.');
                }

                const html = await response.text();
                const tableBody = document.querySelector("#tabla-usuarios tbody");
                tableBody.innerHTML = html; // Actualizar las filas de la tabla con los datos recibidos
            } catch (error) {
                document.getElementById("userList").innerHTML = `<p style="color: red;">${error.message}</p>`;
            }
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
