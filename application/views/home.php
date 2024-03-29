<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>

<head>
    <title>Inicio</title>
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
        <li> <a href="<?= base_url('index.php/welcome/QuienesSomos') ?>"> Quienes Somos</a></li>
        <li> <a href="http://prajakta.uta.cloud/"> Blog </a></li>
        <li> <a href="<?= base_url('index.php/welcome/Registrate') ?>"> Registrate </a></li>
        <li> <a href="<?= base_url('index.php/welcome/Contacto') ?>"> Contacto </a></li>
        <li> <a href="<?= base_url('index.php/welcome/IniciarSesion') ?>"> Iniciar sesión </a></li>
        <li> <a href="<?= base_url('index.php/welcome/ComprarBoletos') ?>"> Comprar Boletos</a></li>
    </ul>
</div>
<div class="container">
    <img src="<?= base_url() . 'assets/' ?>imagenes/minibaner2.jpg" alt="Banner" id="banner">
    <img src="<?= base_url() . 'assets/' ?>imagenes/logo-blanco.png" id="banner-image-top" />
    <div id="container-dots">
        <i class="fa fa-circle-o" aria-hidden="true"></i>
        <i class="fa fa-circle" aria-hidden="true" id="center-dot"></i>
        <i class="fa fa-circle-o" aria-hidden="true"></i>
    </div>
</div>
<div id="banner-desc">
    <h3 style="color: red"><?= @$message ?></h3>
    <h1>¿QUÉ HACEMOS?</h1>
    <div id="wrapper1">
        <p>La asociación civil LEAN fue creada con el objetivo de ayudar, a través de acciones concretas, a
            nuestros conciudadanos
            en Venezuela ante la grave escasez de medicinas e insumos médicos en que se encuentra el país.
            Nuestra misión consiste
            en recolectar ayuda médico sanitaria en delegaciones en España y, a través de agentes de transporte,
            llevarlos a
            Venezuela para que otras asociaciones se encarguen de su distribución. De esta manera aportamos
            nuestro granito de arena
            ayudando a llevar asistencia humanitaria a Venezuela. Somos una asociación sin fines de lucro,
            dedicada a la defensa de
            los Derechos Humanos. </p>
    </div>
</div>
<div class="band">
    <table cellpadding="7">
        <tr>
            <td valign="bottom">478</td>
            <td valign="bottom">60.000</td>
            <td valign="bottom">45</td>
        </tr>
        <tr>
            <td>VOLUNTARIOS</td>
            <td>PERSONAS BENEFICIADAS</td>
            <td>ALIADOS</td>
        </tr>
    </table>
</div>

<div class="container">
    <img src="<?= base_url() . 'assets/' ?>imagenes/bannerabout.jpg" alt="Banner" id="bottombanner">
    <span class="caption">"La injusticia, en cualquier parte, es una amenaza a la justicia en todas
            partes."</span>
    <span class="martin">~Martin Luther King</span>
</div>
<div class="horizontal">
    <li> <img src="<?= base_url() . 'assets/' ?>imagenes/line.png"></li>
    <li>
        ALIADOS
    </li>
    <li> <img src="<?= base_url() . 'assets/' ?>imagenes/line.png"></li>
</div>
<div id="logos">
    <img src="<?= base_url() . 'assets/' ?>imagenes/logo1.png" alt="Banner" id="advertisement" height="230px" width="230px">
    <img src="<?= base_url(). 'assets/' ?>imagenes/logo2.png" alt="Banner" id="advertisement" height="230px" width="230px">
    <img src="<?= base_url(). 'assets/' ?>imagenes/logo3.png" alt="Banner" id="advertisement" height="230px" width="230px">
    <img src="<?= base_url(). 'assets/' ?>imagenes/logo4.png" alt="Banner" id="advertisement" height="230px" width="230px">
</div>
<div id="filmstrip">
    <a href="#" class="myButton">
         </a> <a href="#" class="myButton">
    </a>

</div>
<div class="band" id="bottom-band">
    <ul id="bottom-band-menu">
        <li>
            <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
            <span>Registrese para recibir un boletín </span>
        </li>
        <li>
            <div id="search_wrapper">
                <?php echo form_open('welcome'); ?>
                    <input type="text" placeholder="Introduce tu correo electrónico" id="search_field" name="email" required />
                    <input type="submit" id="search_button" name="subscribe" value="Subscribier" />
                </form>
            </div>
        </li>
        <li><span><?php echo validation_errors(); ?></span></li>
    </ul>
</div>
<div id="heading">
    <p>LEAN EN LAS REDES SOCIALES</p>
</div>
<ul id="social-media">
    <li> <i class="fa fa-twitter" aria-hidden="true"></i> </li>
    <li> <i class="fa fa-facebook" aria-hidden="true"></i> </li>
    <li><i class="fa fa-instagram" aria-hidden="true"></i> </li>
</ul>

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