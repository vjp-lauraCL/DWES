<?php
require_once 'contacto.class.php';

class PContacto extends Contacto {
    private $direccion;
    private $ciudad;
    private $provincia;

    public function __construct($id, $nombre, $telefono, $fechaAlta, $foto, $direccion, $ciudad, $provincia) {
        parent::__construct($id, $nombre, $telefono, $fechaAlta, $foto);
        $this->direccion = $direccion;
        $this->ciudad = $ciudad;
        $this->provincia = $provincia;
    }

    public function getDireccion(): string {
        return $this->direccion;
    }

    public function getCiudad(): string {
        return $this->ciudad;
    }

    public function getProvincia(): string {
        return $this->provincia;
    }

    public function setDireccion($direccion): void {
        $this->direccion = $direccion;
    }

    public function setCiudad($ciudad): void {
        $this->ciudad = $ciudad;
    }

    public function setProvincia($provincia): void {
        $this->provincia = $provincia;
    }

    public function __toString() {
        return parent::__toString() . ' direccion: ' . $this->direccion . ' ciudad: ' . $this->ciudad . ' provincia: ' . $this->provincia;
    }

    public function __clone() {
        $this->direccion = $this->direccion . ' clon';
    }
}
?>