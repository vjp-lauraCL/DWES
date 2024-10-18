<?php
require_once 'contacto.class.php';

class Agenda {
    private $nombreContacto;
    

    public function __construct() {
        $this->nombreContacto = [
        // Añadimos 3 contactos por defecto
        $this->agenda[] = new Contacto(1, 'Helena', 856987654, new DateTime('2020-01-01'), 'foto1.jpg'),
        $this->agenda[] = new Contacto(2, 'Juan', 856987654, new DateTime('2020-01-01'), 'foto2.jpg'),
        $this->agenda[] = new Contacto(3, 'Pepe', 856987654, new DateTime('2020-01-01'), 'foto3.jpg')
        ];


    }

    public function addContact(Contacto $contacto) {
        $this->agenda[] = $contacto;
    }

    public function removeContact(Contacto $contacto) {
        $indexContacto = array_search($contacto, $this->agenda);
        if ($indexContacto !== false) {
            unset($this->agenda[$indexContacto]);
        }
    }

    public function __toString() {
        $devolver = '';
        foreach ($this->agenda as $contacto) {
            $devolver .= $contacto . '<br>';
        }
        return $devolver;
    }

    public function getAgenda() {
        return $this->nombreContacto;
    }
}
?>