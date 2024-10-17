<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //creamos los contactos de la agenda
    $miAgenda = new Agenda('Mi Agenda de contactos');
    $contacto1 = new PContacto(1, 'Nico', 4444444456, '2020-10-10', 'foto1.jpg', 'calle 1', 'Madrid', 'Madrid');
    $contacto2 = new PContacto(2, 'Raul', 555555555, '2013-10-03', 'foto2.jpg', 'calle 2', 'Caceres', 'Caceres');
    $contacto3 = new PContacto(3, 'Nuria', 888888888, '210-07-08', 'foto3.jpg', 'calle 3', 'Camas', 'Sevilla');

    // $contacto4 = new EContacto(4, 'Alba', 99999999999, 'foto4.jpg', 'alba@gmail.com', 'www.alba.com');
    // $contacto5 = new EContacto(5, 'Sara', 666666666, 'foto5.jpg', ' sara@gmail.com', 'www.sara.com');
    // $contacto6 = new EContacto(6, 'Luis', 777777777, 'foto6.jpg', 'luis@gmail.com', 'www.luis.com');

//añadimos los contactos a la agenda
    $miAgenda->addContact($contacto1);
    $miAgenda->addContact($contacto2);
    $miAgenda->addContact($contacto3);
    // $miAgenda->addContact($contacto4);
    // $miAgenda->addContact($contacto5);
    // $miAgenda->addContact($contacto6);

    echo $miAgenda->__toString();



    ?>
</body>
</html>