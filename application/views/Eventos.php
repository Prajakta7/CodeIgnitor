<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

<head>
    <title>Eventos</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" media="screen" href="<?= base_url() . 'assets/' ?>css/leanevent.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="wrapper">
<i class="fas fa-arrow-alt-circle-up"></i>
<a name="top"></a>
<div id="nav">
    <ul id="logo-menu">
        <li><img src="<?= base_url() . 'assets/' ?>imagenes/logo-blanco.png" /></li>
        <li> LEANEVENTOS</li>
    </ul>
    <ul id="menu">
        <li> <a href="<?= base_url() ?>"> <span class="yellow">Inicio</span> </a> </li>
        <li> <a href="<?= base_url('index.php/welcome/ListaDeVoluntarios') ?>"> Lista de Voluntarios</a></li>
        <li> <a href="<?= base_url('index.php/welcome/ListaDeFundaciones') ?>"> Lista de Fundaciones</a></li>
        <li> <a href="<?= base_url('index.php/welcome/Eventos') ?>"> Eventos </a></li>
        <li> <a href="<?= base_url('index.php/welcome/Agente') ?>"> Agente </a></li>
        <li> <a href="<?= base_url('index.php/welcome/IniciarSesion') ?>"> Cerrar Sesión</a></li>

    </ul>
</div>
<div class="band5">
    <table>
        <th>
            <h2>Lista de Eventos</h2>
        </th>
    </table>
</div><br><br>
<div class="add1">
    <a href="<?= base_url('index.php/welcome/AddEvent') ?>" class="myButton30">Agregar</a>
</div>
<div class="band3">
    <div class="band2">
        <table cellpadding="4" cellspacing="22">
            <tr>
                <th>DETALLES DEL EVENTOS</th>
                <th><span class="space12">LUGAR</span></th>
                <th><span class="space13">FETCHA</span></th>
                <th><span class="space14">MODIFICAR</span></th>
                <th><span class="space15">ELIMINAR</span></th>
            </tr>
        </table>
    </div>
</div>

<div class="band3">
    <table cellpadding="4" cellspacing="22">
        <?php foreach ($events AS $event){ ?>
            <tr>
                <td> <img src="<?= base_url() . 'assets/' ?>imagenes/minibaner<?php echo rand(1, 4); ?>.jpg" height="75px" width="75px">
                <td valign="middle"><?php echo "Responsible: " . $event['responsible'] . "<br>
                    Number: ". $event['event_phone'] . "<br>
                                        Price: $". $event['ticket_amount']; ?></td>
                <td> <?php echo $event['place'] ?> </td>
                <td> <?php echo date('M d, Y g:i A', strtotime($event['schedule'])) ?> </td>
                <td>
                    <div class="registrarse">
                        <a href="<?= base_url('index.php/welcome/AddEvent') ?>?edit=<?php echo $event['event_id']; ?>" class="myButton1"><img src="<?= base_url() . 'assets/' ?>imagenes/Capture_edit.PNG"></a>
                    </div>
                </td>
                <td>
                    <a href="<?= base_url('index.php/welcome/Eventos') ?>?del=<?php echo $event['event_id']; ?>" class="myButton77"><img src="<?= base_url() . 'assets/' ?>imagenes/Capture_delete.PNG"></a>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>

<hr width=95%>
</body>

</html>