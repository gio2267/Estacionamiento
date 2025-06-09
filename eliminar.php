<!DOCTYPE html>
<html>
    <head>
        <title>eliminar</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="StyleShet" href="ARCHIVOS CSS/for.css" type="text/css">
</head>
<body>
    <script type="text/javascript"> alert("Registro Eliminado")</script>
    <center>
        
<?php


$servidor="localhost";
$usuario="root";
$contra="";
$basededatos="estacionamientoc";

$conn= mysqli_connect($servidor,$usuario,$contra,$basededatos);
if($conn->connect_error){
    die("error de conexion" .$conn->connect_error);

}

$id=$_POST['id'];
$sql="DELETE FROM registro WHERE id='$id'";
if($conn->query($sql)===TRUE){
    echo "ELIMINACION EXITOSA" .$conn->error;
}

mysqli_close($conn);


?>

<section class="page-section cta">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="cta-inner bg-faded text-center rounded">

                <h1>eliminacion exitosa</h1>
</section>

</div>
</div>
</div>

</div>
</center>
<footer>
    <a href="formulario.html"> <button type="submit">Siguiente</button> </a>

</footer>
</body>
</html>
