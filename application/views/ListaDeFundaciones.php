<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>

<head>
    <title>Lista de Fundaciones</title>
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
            <h2>Lista de Fundaciones</h2>
        </th>
    </table>
</div>
<div class="band3">
    <div class="band2">
        <table cellpadding="4" cellspacing="30">
            <tr>
                <th>NOMBRE DE FUNDACION</th>
                <th><span class="space8">EVENTO</span></th>
                <th><span class="space9">RESPONSABLE</span></th>
                <th><span class="space10">COMISION</span></th>
                <th><span class="space11">CONFIRMAR</span></th>
            </tr>
        </table>
    </div>
</div>

<div class="band27">
    <table cellpadding="4" cellspacing="30">
        <?php foreach ($volunteers AS $event){ ?>
            <tr>
                <td> <img src="<?= base_url() . 'assets/' ?>imagenes/user.png" height="75px" width="75px">
                <td><?php echo $event['first_name'] . ' ' . $event['last_name'] ?></td>
                <td valign="middle"><?php echo $event['email'] ?></td>
                <td> <?php echo $event['event_phone'] ?> </td>
                <td> <?php echo $event['place'] ?> </td>
                <td> <?php echo $event['responsible'] ?> </td>
            </tr>
        <?php } ?>
    </table>

</div>
<hr width=95%>
<div id="filmstrip">
    <a href="#" class="myButton29">
        << </a> <a href="#" class="myButton29"> 1
    </a>
    <a href="#" class="myButton29"> 2 </a>
    <a href="#" class="myButton29"> 3 </a>
    <a href="#" class="myButton29"> 4 </a>
    <a href="#" class="myButton29"> 5 </a>
    <a href="#" class="myButton29"> >> </a>


    <br><br><br><br><br><br>


    </a>
</div>





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