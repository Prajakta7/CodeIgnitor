<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

<head>
    <title>Home Agent LEAN</title>
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
    <img src="<?= base_url() . 'assets/' ?>imagenes/min.png" height="400" width="1081">
    <br><br><br><br><br><br><br><br><br><br><br><br><br>
    <div id="footer2">
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