<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $contacto = null;
    foreach ($agenda->getAgenda() as $c) {
        if ($c->getId() == $id) {
            $contacto = $c;
            break;
        }
    }
    if ($contacto): ?>
        <h1>Detalles del contacto</h1>
        <p>ID: <?php echo $contacto->getId(); ?></p>
        <p>Nombre: <?php echo $contacto->getNombre(); ?></p>
        <p>Teléfono: <?php echo $contacto->getTelefono(); ?></p>
        <p>Fecha de alta: <?php echo $contacto->getFechaAlta()->format('Y-m-d'); ?></p>
        <p>Foto: <img src="<?php echo $contacto->getFoto(); ?>" alt="Foto de <?php echo $contacto->getNombre(); ?>"></p>
    <?php else: ?>
        <p>Error: Contacto no encontrado.</p>
    <?php endif;
} else {
    echo '<p>Error: ID de contacto no proporcionado.</p>';
}
?>