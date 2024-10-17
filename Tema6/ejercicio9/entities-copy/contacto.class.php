<?php
class Contacto {
    private $id;
    private $nombre;
    private $telefono;
    private $fechaAlta;
    private $foto;

    public function __construct($id, $nombre, $telefono, $fechaAlta, $foto) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->telefono = $telefono;
        $this->fechaAlta = $fechaAlta;
        $this->foto = $foto;
    }

    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function getFechaAlta() {
        return $this->fechaAlta;
    }

    public function getFoto() {
        return $this->foto;
    }

    public function setNombre($nombre): void {
        $this->nombre = $nombre;
    }

    public function setFechaAlta($fechaAlta): void {
        $this->fechaAlta = $fechaAlta;
    }

    public function setTelefono($telefono): void {
        $this->telefono = $telefono;
    }

    public function setFoto($foto): void {
        $this->foto = $foto;
    }
}
?>