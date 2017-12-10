<?php
include_once'./DAOConecction/Conecction.php';
$cn = new Conecction();
$sql = "SELECT * FROM datosPersonales";
$con = $cn->coneccion();
$datos = $con->query($sql);
if ($datos == false) {
    echo 'ocurrio un error';
} else {
    ?>
    <html>
        <head>
            <title>title</title>
            <link rel="stylesheet" href=""/>
        </head>
        <body>            
            <table>
                <thead>
                <th>Id Usuario</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Edad</th>
            </thead>
            <?php
            while ($row = $datos->fetch_array()) {
                ?>
                <tr>
                    <td><?php echo $row["idUsuario"] ?></td>
                    <td><?php echo $row["nombre"] ?></td>
                    <td><?php echo $row["apellido"] ?></td>
                    <td><?php echo $row["edad"] ?></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
    </html>
<?php } ?>