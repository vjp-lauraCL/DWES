<?php
require'contacto.class.php';
class EContacto extends Contacto{
    private $email;
    private $url;

    public function __construct($id, $nombre, $telefono, $foto, $email, $url){
        parent::__construct($id, $nombre, $telefono, $foto);
        $this->email = $email;
        $this->url = $url;
    }
    public function getEmail(): string{
        return $this->email;
    }
    public function getUrl(): string{
        return $this->url;
    }
    public function setEmail($email): void{
        $this->email = $email;
    }
    public function setUrl($url): void{
        $this->url = $url;
    }
    public function __toString()
    {
        return parent::__toString() . ' email: ' . $this->email . ' url: ' . $this->url;
    }
    public function __clone(){
        $this->email = $this->email.'clon';
    }
   
}
?>