<?php

use App\Controllers\contactos;

class Model_contactos extend CI Model {
    function insertar($data) {
        $this db->insert('contactos',$data);

}

    function getAll() {
        $query= $this-> db->get('contactos');
        return $query ->results
    }
}
?>