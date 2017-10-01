<?php

class Conecction {

    function coneccion() {
        if (!$link = mysqli_connect("www.localhost.com", "toor", "", "")) {
            echo 'Coneccion no realizada';
        } else {
            return $link;
        }
    }

}
