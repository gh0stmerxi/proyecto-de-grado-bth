<html>
    <head>
        <title>conexion1</title>
    </head>
    <body>
        <?php
        $servidor = "localhost";
        $usuario = "root";
        $clave = "";
        $basedatos = "guia";

       $cn= mysqli_connect($servidor,$usuario,$clave,$basedatos);
        $nombre = "sulli";
        $consulta = "SELECT *
        FROM usuario u 
        inner join registro r
        on r.user=u.user
        where u.user= '$nombre'";

        $rs = mysqli_query($cn, $consulta);
        echo"el total de bandas ingresadas de" . $nombre ." es de " . mysqli_num_rows($rs);
        ?>
    </body>
    </html>