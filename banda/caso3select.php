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

        mysqli_connect($servidor,$usuario,$clave,$basedatos);
        $nombre = "sulli";
        $consulta = "SELECT
        FROM usuario u 
        inner join bandas b
        on b.user=u. user
        where u.nombre= '$nombre'";

        $rs = mysqli_query($n, $consulta);
        echo"el total de bandas ingresadas de" . $nombre ." es de " . mysqli_num_rows($rs);
        ?>
    </body>
    </html>