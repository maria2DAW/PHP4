<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Subir archivos al servidor con PHP</title>
    </head>
    <body>        
        <hgroup><h1>Formlario POST</h1></hgroup>
        
        <form name="enviar_archivo_frm" action="subir-archivo.php" method="post" enctype="multipart/form-data" >
            <input type="file" name="archivo_fls" />
            <input type="submit" name="subir_btn" value="Subir Archivo" />
        </form>
        
    </body>
</html>
