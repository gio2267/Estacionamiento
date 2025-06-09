<!DOCTYPE html>
<html>
   <head> 
    <title>Consulta</title>
    <link href="ccs./styles.css" rel="stylesheet"/>
</head>
<body>
   <script type="text/javascript">alert("datos guardados")</script>
   <center> 

<?php
if($_SERVER[REQUEST_METHOD]=="POST"){


// Conexión a la base de datos
$servidor= "localhost";
$usuario = "root";
$contra = "";
$basededatos = "estacionamientoc";

$conn = new mysqli($servidor, $usuario, $contra, $basededatos);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Datos a insertar
$nombre=$_POST['nombre'];
$placa=$_POST['placa'];
$vehiculo=$_POST['vehiculo'];
$hora_entrada=$_POST['hora_entrada'];
$hora_salida=$_POST['hora_salida'];

// Sentencia SQL
$sql="INSERT INTO formulario(id,nombre,placa,vehiculo,hora_entrada,hora_salida) VALUES 
('','$nombre', '$placa' ,'$vehiculo', '$hora_entrada', '$hora_salida')";
if($conn->query($sql)===TRUE){

}else{
    echo"error";
}


// Cerrar la conexión
$conn->close();
}
?>



<br>
<br><center>
    <section class="page-section cta">
        <div class="container">
           <div class="row">
            <div class="col-xl-9-mx-auto">
                <div class="cita-inner bg-faded text-center rounded">
                    
                <hi>Nos pondremos en contacto</h1>
</section>
</div>

</div>
</div>
</div>
</center>
<footer>
    
</footer>
</body>
</html>