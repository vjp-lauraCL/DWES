<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de contactos</h1>
    <ul>
        <?php
       if (isset($agenda)) {
        foreach($agenda->getAgenda() as $contacto): ?>
            <li>
                <p>ID: <?php echo $contacto->getId(); ?></p>
                <p>Nombre: <?php echo $contacto->getNombre(); ?></p>
                <p>Teléfono: <?php echo $contacto->getTelefono(); ?></p>
                <p>Fecha de alta: <?php echo $contacto->getFechaAlta()->format('Y-m-d'); ?></p>
                <p>Foto: <img src="<?php echo $contacto->getFoto(); ?>" alt="Foto de <?php echo $contacto->getNombre(); ?>"></p>
                <a href="vercontacto.view.php?id=<?php echo $contacto->getId(); ?>">Ver contacto</a>
            </li>
        <?php endforeach;
    } else {
        echo '<li>Error: La agenda no está disponible.</li>';
    }
    ?>
    </ul>
</body>
</html>