<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

<head>
    <title>Incinar sesión</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <img src="<?= base_url() . 'assets/' ?>imagenes/bannerlogin.jpg" alt="Banner" id="bottombanner" href="Incinar sesión.php">
    <span class="caption1">INICIAR SESIÓN</span>
    <span class="under_text">INICIO</span>
    <span class="under_text1">INICIAR SESIÓN</span>
</div>



<div id="contact-form1">
    <form action="<?= base_url().'index.php/welcome/IniciarSesion' ?>" method="post">
        <ul id="row1">
            <li><label for="Nombre de Usuario">Nombre de Usuario</label>
                <input type="email" name="email" placeholder="Nombre Usuario o Correo" required></li>
            <li><label for="Contraseña">Contraseña</label>
                <input type="password" name="password" placeholder="Contraseña" required></li>
        </ul>
        <div id="forgot-pswd">
            <a href="">Olvido su contraseña? </a>
        </div>
        <input type="submit" id="submit-form" name="submit" value="Entra" />
        <br><span><?php echo $error; ?></span>
        <span><?php echo validation_errors(); ?></span>
    </form>
</div>

<div class="footer1">
    <div id="heading">
        <p>LEAN EN LAS REDES SOCIALES</p>
    </div>
    <ul id="social-media">
        <li> <i class="fa fa-twitter" aria-hidden="true"></i> </li>
        <li> <i class="fa fa-facebook" aria-hidden="true"></i> </li>
        <li> <i class="fa fa-instagram" aria-hidden="true"></i> </li>
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
</div>
</body>

</html>