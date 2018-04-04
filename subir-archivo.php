<?php

foreach($_FILES["archivo_fls"] as $clave => $valor)
{
    echo "Propiedad: $clave --- Valor: $valor<br />";
}

$archivo = $_FILES["archivo_fls"]["tmp_name"];
$destino = "archivos/".$_FILES["archivo_fls"]["name"];

if($_FILES["archivo_fls"]["type"] == "text/plain")
{
    move_uploaded_file($archivo, $destino);
    echo "Archivo subido :)";
}
else
{
    echo "Sólo se admiten archivos de txto plano.<br /><a href='index.php' >REGRESAR</a>";
}

//move_uploaded_file($archivo, $destino);

//echo "Archivo subido :)";