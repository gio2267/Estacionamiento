<!DOCTYPE html>
<html>
   <head> 
    <title>Insertar</title>
    <link href="ccs./styles.css" rel="stylesheet"/>
</head>
<body>
   <script type="text/javascript">alert("datos guardados")</script>
   

<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){


// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "estacionamientoc";

$conn = new mysqli($servername, $username, $password, $dbname);

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
$sql="INSERT INTO registro(id,nombre,placa,vehiculo,hora_entrada,hora_salida) VALUES 
('','$nombre', '$placa' ,'$vehiculo', '$hora_entrada', '$hora_salida')";
if($conn->query($sql)===TRUE){
       
    //echo "xdd";
}else{
    echo"error";
}

      
// Cerrar la conexión
mysqli_close($conn);
}
?>



<br>
<br>
    <section class="page-section cta">
        <div class="container">
           <div class="row">
            <div class="col-xl-9-mx-auto">
                <div class="cita-inner bg-faded text-center rounded">
                    
                <hi>Registro Exitoso</h1>
</section>
</div>

</div>
</div>
</div>

<footer>
    
</footer>
</body>
</html>