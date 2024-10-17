<?php
require_once 'entities-copy/agenda.class.php';

// Crear una instancia de la agenda
$agenda = new Agenda('Mi Agenda');

// Pasar la variable $agenda a la vista
$variables = ['agenda' => $agenda];
extract($variables);

// Incluir la vista
include 'views/index.view.php';
?>