<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
    <?php

        include './conexion.php';
        $db = mysqli_select_db( $conn , $database  ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
        $consulta = "SELECT * FROM colores2";
        $resultado = mysqli_query( $conn, $consulta );


        while ($columna = mysqli_fetch_array( $resultado ))
{
        
        echo  "<div class='container mt-3'>".

        "</br>"."Columna color: ".$columna['color']."</br>"."Columna descripcion: ". $columna['descrip']."</br>".
        "</div>";
}
	
    ?>
    
    
   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>
</html>
    

