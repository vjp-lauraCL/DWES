<?php
require "contacto.class.php";

class PContacto extends Contacto {
    private $direccion;
    private $ciudad;
    private $provincia;

    // Constructor con tipado de argumentos (si es aplicable)
    public function __construct($id, $nombre, $telefono, $fechaAlta, $foto, $direccion, $ciudad, $provincia) {
        parent::__construct($id, $nombre, $telefono, $fechaAlta, $foto); // Asegurarse de que el orden y los argumentos son correctos
        $this->direccion = $direccion;
        $this->ciudad = $ciudad;
        $this->provincia = $provincia;
    }

    // Getters
    public function getDireccion() : string {
        return $this->direccion;
    }

    public function getCiudad() : string {
        return $this->ciudad;
    }

    public function getProvincia() : string {
        return $this->provincia;
    }

    // Setters con tipado estricto
    public function setDireccion(string $direccion) : void {
        $this->direccion = $direccion;
    }

    public function setCiudad(string $ciudad) : void {
        $this->ciudad = $ciudad;
    }

    public function setProvincia(string $provincia) : void {
        $this->provincia = $provincia;
    }

    // Método toString para representar el objeto como una cadena
    public function __toString() {
        return parent::__toString() . ' direccion: ' . $this->direccion . ' ciudad: ' . $this->ciudad . ' provincia: ' . $this->provincia;
    }

    // Método clone para clonar el objeto
    public function __clone() {
        $this->direccion = $this->direccion . 'clon';
    }
}
?>