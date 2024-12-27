<?php 
    $rut=$_GET['rut'];
    include '../php/conexion.php'; 
    
    $sql="delete from usuarios where rut='".$rut."'";
    $resultado =mysqli_query($conn,$sql);

    if ($resultado){
        echo "<script> alert('Los datos se eliminaron correctamente') </script>";
        header("Location: admin_usuarios.php");
    }
    else {
        echo "<script> alert('Los datos NO se eliminaron correctamente') </script>";
        header("Location: admin_usuarios.php");
    }

    ?>


