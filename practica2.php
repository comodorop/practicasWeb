<?php

include_once './DAOConecction/Conecction.php';
$cn = new Conecction();
$sql = "SELECT * FROM login l  INNER JOIN DATOSPERSONALES  pd "
        . "on pd.idlogin = l.idLogin";
$datos = mysqli_query($cn->coneccion(), $sql);
if ($datos) {
    $lstLogin = array(); 
   
    while ($rs = mysqli_fetch_array($datos)) {
        $objLogin = new stdClass();
        $objLogin->usuario = utf8_encode($rs["usuario"]);
        $objLogin->pass = $rs["pass"];
        $lstLogin->sexo = $rs["sexo"];
        $objLogin->x = $rs[""];
        $lstLogin[] = $objLogin;
    }
    echo json_encode($lstLogin);
} else {
    echo 'Hubo un error';
}



