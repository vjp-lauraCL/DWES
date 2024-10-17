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
        <?php if (isset($agenda) && !empty($agenda->getAgenda())): ?>
            <?php foreach($agenda->getAgenda() as $contacto): ?>
                <li>
                    <?php echo $contacto->getNombre(); ?>
                    <a href="vercontacto.view.php?id=<?php echo $contacto->getId(); ?>">Ver contacto</a>
                </li>
            <?php endforeach; ?>
        <?php else: ?>
            <li>Error: La agenda no está disponible.</li>
        <?php endif; ?>
    </ul>
</body>
</html>