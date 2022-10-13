<html>
    <head>
        <title>empleado</title>
    </head>
    <body>
        <h2>registro de banda</h2>
        <form action="empleado.php" method="post">
            <table>
                <tr>
                    <td width="180px">
                        <label for="">nombre</label>
                    </td>
                    <td>
                        <input type="text" name="nombre">
                    </td>
                </tr>
                <tr>
                    <td width="180px">
                        <label for="">genero musical</label>
                    </td>
                    <td>
                        <input type="text" name="genero">
                    </td>
                </tr>
                <tr>
                    <td width="180px">
                        <label for="">integrantes</label>
                    </td>
                    <td>
                        <input type="text" name="integrantes">
                    </td>
                </tr>
                <tr>
                    <td width="180px">
                        <input type="submit" value="procesar" style="width;100%">
                    </td>
                    <td>
                        <input type="reset" value="cancelar" style="width;100%">
                    </td>
                </tr>
            </table>
        </form>

        <?php
        error_reporting(0);
        $nombre = $_POST['nombre'];
        $genero_musical = $_POST['genero'];
        $integrantes = $_POST['integrantes'];
     
         ?>
         <table>
            <tr>
                <td width="150 px">nombre</td>
                <td><?php echo $nombre; ?></td>
            </tr>
            <tr>
                <td width="150 px">genero musical</td>
                <td><?php echo $genero_musical; ?></td>
            </tr>
            <tr>
                <td width="150 px">integrantes</td>
                <td><?php echo $integrantes; ?></td>
            </tr>
            <tr></tr>
            <tr></tr>
         </table>
    </body>
</html>