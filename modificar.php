<!DOCTYPE html>
<html>
    <head>
        <title>modificar</title>

        <link href="css/style.css" rel="stylesheet" />

        <link rel="StyleSheet" href="ARCHIVOS CSS/for.css" type="text/css" />
</head>
<body>

<section class="page-section cta">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="cta-inner bg-faded text-center rounded">

                

              


<center>
    

<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){


$servidor="localhost";
$usuario="root";
$contra="";
$basededatos="estacionamientoc";

$conn= mysqli_connect($servidor,$usuario,$contra,$basededatos);
if(!$conn){
    die("error de conexion".mysqli_connect_error());
}

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$placa=$_POST['placa'];
$vehiculo=$_POST['vehiculo'];
$hora_entrada=$_POST['hora_entrada'];
$hora_salida=$_POST['hora_salida'];


$modific="UPDATE registro SET  nombre='$nombre',placa='$placa',vehiculo='$vehiculo',hora_entrada='$hora_entrada' ,hora_salida='$hora_salida' WHERE id='$id'";
if($conn->query($modific)===TRUE){
    echo "se ha modificado";
}else{
    echo"error al modificar";

}

mysqli_close($conn);
}
?>

<a href="formulario.html"> <button type="submit">Regresar</button> </a>

</section>
</div>
</div>
</div>
</div>

<br>
<br>
<center>
</center>
<footer>
</footer>
</body>
</html>