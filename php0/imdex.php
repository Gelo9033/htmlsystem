<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>desarrollo webt</title>
    <style type="text/css">
           body{
                font-famiy:arial;
                font-size:0.8em;
                background: #f3f3f3;
           }
           table tr td{
            padding: 5px 10px;
            }
            tr:hover{
                backgrund:#fff;
            }
    </style>
</head>

<body>

<?php
echo "<p aling =center>";
echo "<h3>A continuacion se muestra el resultado</h3>";
$host ="127.0.0.1";
$usuario="root";
$password="";
$base_datos="prueba1";

$conectar=mysqli_connect($host,$usuario,$password);
mysqli_select_db($base_datos,$conectar);
$consulta="SELECT*FROM prueba1";
$query=mysqli_query($consulta,$conectar);
echo "<table>";
while($reg=mysqli_fetch_row($query)){
    echo"<tr>";
    echo"<br>";
    foreach($reg as $cambia){
        echo"<td>",$cambia,"</td>";
    }
}
echo "</table>";
?>
</body>
</html>