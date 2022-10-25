<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="estilo.css" rel="stylesheet">
    </head>
    <body>
        <?php
        /* conexion al servidor */
        $cn=mysqli_connect('localhost','root','','guia');

        /* consultando la tabla cliente */
        $rs=mysqli_query($cn, 'select * from bandas');
        $n= mysqli_num_rows($rs);
        echo 'el numero total de bandas registradas es; '.$n;
        ?>
    </body>
</html>