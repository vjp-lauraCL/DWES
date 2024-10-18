<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de Contactos</title>
</head>
<body>
    <?php
    // Incluir los archivos necesarios
    require_once '../entities/agenda.class.php';
    require_once '../entities/EContacto.php';
    require_once '../entities/PContacto.php';

    // Crear la agenda
    $miAgenda = new Agenda('Mi Agenda de Contactos');

    // Crear EContactos
    $eContacto1 = new EContacto(1, 'Alba', 999999999, '2020-01-01', 'foto1.jpg', 'alba@gmail.com', 'www.alba.com');
    $eContacto2 = new EContacto(2, 'Sara', 888888888, '2020-02-02', 'foto2.jpg', 'sara@gmail.com', 'www.sara.com');
    $eContacto3 = new EContacto(3, 'Luis', 777777777, '2020-03-03', 'foto3.jpg', 'luis@gmail.com', 'www.luis.com');

    // Crear PContactos
    $pContacto1 = new PContacto(4, 'Nico', 666666666, '2020-04-04', 'foto4.jpg', 'Calle 1', 'Madrid', 'Madrid');
    $pContacto2 = new PContacto(5, 'Raul', 555555555, '2020-05-05', 'foto5.jpg', 'Calle 2', 'Cáceres', 'Cáceres');
    $pContacto3 = new PContacto(6, 'Nuria', 444444444, '2020-06-06', 'foto6.jpg', 'Calle 3', 'Camas', 'Sevilla');

    // Añadir contactos a la agenda
    $miAgenda->addContact($eContacto1);
    $miAgenda->addContact($eContacto2);
    $miAgenda->addContact($eContacto3);
    $miAgenda->addContact($pContacto1);
    $miAgenda->addContact($pContacto2);
    $miAgenda->addContact($pContacto3);

    // Mostrar la agenda
    echo $miAgenda->__toString();
    ?>
</body>
</html>