
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
                   </div>
                   <a href="logout.php">Volver Al Menu Principal</a>
             </div>
        </div>
    </div>
</div>



    <div class="container">
        <div class="panel-group"><div class="panel panel-primary">
            <div class="panel-heading">Integrantes</div>
            <div class="panel-body">
                
                <div class="form-group" id="opciones">        
                    <div class="col-sm-10">
                        
                        <h1>Fabian Arango Castillo</h1>
                        <h1>Carolina Martinez Pereira</h1>
                        <h1>Deiner Stiven Mosquera Salcedo</h1>
                        <h1>Juan Sebastian Ruiz Granados</h1>
                        <h1>Nilson Camilo Reina Guazá</h1>
                        <h1>Juan David Bedoya Salazar</h1>
                        <h1>Kevin Alexis Zapata Diaz</h1>
                        
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
</body>
</html>