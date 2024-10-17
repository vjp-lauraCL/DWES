<?php
require_once '../entities-copy/agenda.class.php';
require_once '../entities-copy/contacto.class.php';

// Crear una instancia de la agenda
$agenda = new Agenda('Mi Agenda');

// Obtener el ID del contacto desde la URL
$idContacto = isset($_GET['id']) ? (int)$_GET['id'] : 0;

// Buscar el contacto en la agenda
$contacto = null;
foreach ($agenda->getAgenda() as $c) {
    if ($c->getId() === $idContacto) {
        $contacto = $c;
        break;
    }
}

if ($contacto === null) {
    echo "Contacto no encontrado.";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver contacto</title>
</head>
<body>
    <h1>Datos de contacto</h1>
    <p>ID: <?php echo $contacto->getId(); ?></p>
    <p>Nombre: <?php echo $contacto->getNombre(); ?></p>
    <p>Teléfono: <?php echo $contacto->getTelefono(); ?></p>
    <p>Fecha de alta: <?php echo $contacto->getFechaAlta()->format('Y-m-d'); ?></p>
    <p>Foto: <img src="<?php echo $contacto->getFoto(); ?>" alt="Foto de <?php echo $contacto->getNombre(); ?>"></p>
</body>
</html>