<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

<head>
    <title>Home Business</title>
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
        <li> <a href="<?= base_url() ?>"> Inicio </a> </li>
        <li> <a href="<?= base_url('index.php/welcome/HomeBusiness') ?>"> Events</a></li>
        <li> <a href="<?= base_url('index.php/welcome/MyEventsBusiness') ?>"> My Events</a></li>
        <li> <a href="<?= base_url('index.php/welcome/ProfileBusiness') ?>"> Profile </a></li>
        <li> <a href="<?= base_url('index.php/welcome/IniciarSesion') ?>"> Cerrar Sesión</a></li>
    </ul>
</div>
<div class="band5">
    <table>
        <th>
            <h2>Lista de mis Eventos</h2><br><span><?= $message ?> </span>
        </th>
    </table>
</div>
<div class="band3">
    <div class="band2">
        <table cellpadding="4" cellspacing="35">
            <tr>
                <th>DETALLES DEL EVENTOS</th>
                <th><span class="space">LUGAR</span></th>
                <th><span class="space1">FETCHA</span></th>
                <th><span class="space2">HORA</span></th>
                <th><span class="space3">ASISTENCIA</span></th>
                <th><span class="space3"></span></th>
            </tr>
        </table>
    </div>
</div>

<div class="band3">
    <table cellpadding="4" cellspacing="35">
        <?php foreach ($events AS $event){ ?>
            <tr>
                <td> <img src="<?= base_url() . 'assets/' ?>imagenes/minibaner<?php echo rand(1, 4); ?>.jpg" height="75px" width="75px">
                <td valign="middle"><?php echo "Responsible: " . $event['responsible'] . "<br>
                    Number: ". $event['event_phone'] . '<br>
                    Price: $' . $event['ticket_amount']; ?></td>
                <td> <?php echo $event['place'] ?> </td>
                <td> <?php echo date('M d, Y', strtotime($event['schedule'])) ?> </td>
                <td> <?php echo date('g:i A', strtotime($event['schedule'])) ?> </td>
                <td>
                    <div class="registrarse">
                        <a href="<?= base_url().'index.php/welcome/MyEventsBusiness' ?>?del=<?php echo $event['volunteer_id'] ?>" class="myButton1">Delete</a>
                    </div>
                </td>
            </tr>
        <?php } ?>
    </table>

</div>
<hr width=95%><br><br><br><br><br><br>
<div id="footer1">
    <ul id="copy">
        <li>Copyright</li>
        <li><i class="fa fa-copyright" aria-hidden="true"></i>2019</li>
        <li>All rights reserved | This web is made with </li>
        <li><i class="fa fa-heart-o" aria-hidden="true"></i> by </li>
        <p>DiazApps</p>

    </ul>
    <a href="#top"><img src="<?= base_url() . 'assets/' ?>imagenes/top_button.png" id="top-icon" /></a>
</div>
</body>
</html>