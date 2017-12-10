<?php

class Conecction {

    function coneccion() {
        //RECORDEMOS QUE AQUI SE PONEN LA CONFIGURACION PARA LA CONECCION A LA BASE DE DATOS
        if (!$link = mysqli_connect("localhost", "root", "", "cursojosemaria")) {
            echo 'Coneccion no realizada';
        } else {
            return $link;
        }
    }

}
