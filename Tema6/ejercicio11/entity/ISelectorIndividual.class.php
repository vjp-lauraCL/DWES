<?php
interface ISelectorIndividual{
   
    public function __construct(string $titutloCampo, string $nombreCampo, array $arrayValores, int $elementoSeleccionado);
    public function generarSelector(): string;
}

?>