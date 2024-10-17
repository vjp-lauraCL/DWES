<?php
 abstract class SelectorIndividual implements ISelectorIndividual{
    private $tituloCampo;
    private $nombreCampo;
    private $arrayValores;
    private $elementoSeleccionado;

    public function __construct(string $tituloCampo, string $nombreCampo, array $arrayValores, int $elementoSeleccionado){
        $this->tituloCampo = $tituloCampo;
        $this->nombreCampo = $nombreCampo;
        $this->arrayValores = $arrayValores;
        $this->elementoSeleccionado = $elementoSeleccionado;
    }

 

}


?>