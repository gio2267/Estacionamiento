<!DOCTYPE html>
<html>
   <head> 
    <title>Consultar</title>
    <link href="ccs./styles.css" rel="stylesheet"/>
</head>
<body>
<center>
    <aside>
        <h1>Registros</h1>
    </center>
</aside>
<section class="page-section cta">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="cta-inner bg-faded text-center rounded">
       
<?php
$servidor="localhost";
$usuario="root";
$contra="";
$basededatos="estacionamientoc";

$conn=  mysqli_connect($servidor,$usuario,$contra,$basededatos);
if($conn->connect_error){
    die("error de conexion" .$conn->connect_error);
}

$sql="SELECT * FROM registro"; 
$result=$conn->query($sql);

echo "<center><table border='3'>";
echo "<tr> <th> ID </th> <th>nombre</th> <th>placa </th> <th>vehiculo</th> <th>hora_entrada</th> <th>hora_salida</th> </tr>";

if($result->num_rows >0){
    while ($row=$result->fetch_assoc()){
        echo "<tr><td>" .$row["id"] ."</td>"
        ."<td>" .$row ["nombre"] ."</td>"
        ."<td>" .$row["placa"] ."</td>"
        ."<td>" .$row["vehiculo"] ."</td>"
         ."<td>" .$row["hora_entrada"] ."</td>"
        ."<td>" .$row["hora_salida"] ."</td>" ."</tr>";
    }
}else{
     echo "<tr><td colspan='3'> Nose encuentra resultado </td></tr>";
}
echo "</table></center>";

mysqli_close($conn);

?>

<a href="formulario.html"> <button type="submit">Regresar</button> </a>
<form action="formulario.html" method="post">
</section>
</div>
</div>
</div>
</div>
</html>