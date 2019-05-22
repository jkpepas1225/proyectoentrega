<?php
session_start();
$nombre = $_SESSION["usu_nomb"];
$descripcion = $_SESSION["rol_desc"];


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>FARMACIAS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/estilo.css"/>
  
</head>
<body>
    <div class="jumbotron jumbotron-billboard">
  <div class="img"></div>
    <div class="container">
        <div class="row">

             <div class="panel-body panel-principal">
                        <div class="col-sm-2"> 
                   <img src="imagenes/logoce.png" class="img-rounded" alt="img" width="145" height="80">
                        </div>
                   <div class="col-sm-10">
                        <h2>CEDESOFT - FARMACIAS</h2>
                   </div>
                   <div class="col-sm-10">
                        <?php
                        echo "Usuario:         ",$nombre;
                        echo "<br> Descripcion:     ",$descripcion;
                        ?>
                   </div>
                   <a href="logout.php">Cerrar Sesión</a>
             </div>
        </div>
    </div>
</div>



    <div class="container">
        <div class="panel-group"><div class="panel panel-primary">
            <div class="panel-heading">Tablas de Gestion</div>
            <div class="panel-body">
                
                <div class="form-group" id="opciones">        
                    <div class="col-sm-10">
                        
                        <a class="btn btn-primary" href="php/usuarios/index.php" role="button">Usuarios</a>
                        <a class="btn btn-primary" href="php/rol/index.php" role="button">Roles</a>
                        <a class="btn btn-primary" href="php/ciudad/index.php" role="button">Ciudades</a>
                        <a class="btn btn-primary" href="php/pais/index.php" role="button">Paises</a>
                        <a class="btn btn-primary" href="php/administradores/index.php" role="button">Administradores</a>
                        <a class="btn btn-primary" href="php/farmacias/index.php" role="button">Farmacias</a>
                        <a class="btn btn-primary" href="php/propietarios/index.php" role="button">Propietarios</a>
                        <a class="btn btn-primary" href="php/proveedores/index.php" role="button">Proveedores</a>
                        <a class="btn btn-primary" href="php/productos/index.php" role="button">Productos</a>
                        <a class="btn btn-primary" href="php/clientes/index.php" role="button">Clientes</a>
                        <a class="btn btn-primary" href="php/ventayfacturacion/index.php" role="button">Venta y Facturacion</a>
                        <a class="btn btn-primary" href="php/empleados/index.php" role="button">Empleados</a>
                        <a class="btn btn-primary" href="php/nomina/index.php" role="button">Nomina</a>
                        <a class="btn btn-primary" href="php/notificaciones/index.php" role="button">Notificaciones</a>
                        <a class="btn btn-primary" href="php/inventario/index.php" role="button">Inventario</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="panel-group hide" id="contenedor"><div class="panel panel-primary">
            <div class="panel-heading" id="titulo"></div>
            <div class="panel-body">
                
                <div class="form-group" id="contenido">        
                    
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" id="pagina" value="index" name="editar"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!-- Librearía para las funcionalidades de la tabla -->
    <script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.11/js/dataTables.bootstrap.min.js"></script>
    <!-- Librería para las alertas -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.2/sweetalert2.all.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>

    <!-- Funciones de Lógica de negocio -->
    <script src="js/funcionesJquery.js"></script>
    <!-- Funciones de Lógica de neogcio -->
    <script>
        $(document).ready(Inicio);
    </script>
</body>
</html>