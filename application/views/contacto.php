<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
    <title>Contacto</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" media="screen" href="<?= base_url() . 'assets/' ?>css/leanevent.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script>
        .asterisk{
            color:red;
        }
    </script>
</head>

<body class="wrapper">
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
    <img src="<?= base_url() . 'assets/' ?>imagenes/bannercontacto.jpg" alt="Banner" id="bottombanner" href="Contacto.php">
    <span class="caption1">CONTACTO</span>
    <span class="under_text">INICIO</span>
    <span class="under_text1">CONTACTO</span>
</div>
<div id="information-form">
    <h3>
        Información del contacto
    </h3>
    <ul id="infomation-board">
        <li>
            <div><i class="fas fa-map-marker-alt" aria-hidden="true"></i>&nbsp;198 west 21st street <br> Suite 721,New
                York NY10016</div>
        </li>
        <li>
            <div><i class="fas fa-phone"></i>&nbsp;+1234567898</div>
        </li>
        <li>
            <div><i class="far fa-paper-plane"></i>&nbsp;<a href="mailto:info@diazapps.com">info@diazapps.com</a></div>
        </li>
        <li>
            <div><i class="fas fa-globe"></i>&nbsp;<a href="www.diazapps.com">diazapps.com</a></div>
        </li>
    </ul>

    <div id="social-media1">
        <h3>
            LEAN en las redes sociales
        </h3>
        <ul id="social-media-links">
            <li>
                <div><img src="<?= base_url() . 'assets/' ?>imagenes/facebook.png" height="20px" width="20px"><br>LEAN Ayuda Humanitaria</div>
            </li>
            <li>
                <div><img src="<?= base_url() . 'assets/' ?>imagenes/twitter.png" height="20px" width="20px"><br>@LeanEmergente</div>
            </li>
            <li>
                <div><img src="<?= base_url() . 'assets/' ?>imagenes/instagram.png" height="20px" width="20px"> <br> @LeanAyudaHumanitaria</div>
            </li>
            <li>
                <div><img src="<?= base_url() . 'assets/' ?>imagenes/correo.png" height="20px" width="20px"> <br> lean.emergente@gmail.com</div>
            </li>
        </ul>
    </div>
    <div id="contact-form">
        <span><?php echo $error; ?></span>    <span><?php echo validation_errors(); ?></span>

        <form name="contact-form" action="<?= base_url().'index.php/welcome/contacto' ?>" onsubmit="return ValidationEvent()" method="post">
            <ul id="row1">
                <li><label for="Nombre">Nombre<span class="asterisk">*</span></label><input type="text" id="firstname" name="fname" placeholder="Tu Nombre" required autocomplete="no"></li>
                <li><label for="Apellido">Apellido<span class="asterisk">*</asterisk></span></label><input type="text" id="lastname" name="lname" placeholder="Tu Apellido" required autocomplete="no"></li>
            </ul>
            <div class="row23">
                <label for="correo">Correo</label><input type="email" placeholder="Tu correo electronico" name="email" required autocomplete="no">
            </div>
            <div class="row23">
                <label for="tema">Tema</label><input type="text" placeholder="Su asunto de este mensaje" name="topic" autocomplete="no">
            </div>
            <div id="text-field">
                <label for="mensaje">Mensaje</label> <textarea name="message" id="" cols="30" rows="10"
                                                               placeholder="Di algo sobrenosotros"></textarea>
            </div>
            <button id="submit-form"></button>
            <input type="submit" name ="contact" value="Enviar Mensaje"/>
        </form>
    </div>
    <br><br>
    <div id="heading">
        <p>LEAN EN LAS REDES SOCIALES</p>
    </div>
    <ul id="social-media">
        <li> <i class="fab fa-twitter"></i> </li>
        <li> <i class="fab fa-facebook-f"></i> </li>
        <li><i class="fab fa-instagram" aria-hidden="true"></i> </li>
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

<script>
    var validatejs = false;

    function validateEmail(email) {
        var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    }

    function validateName(name) {
        var re = /^[a-zA-Z ]+$/;
        return re.test(name)
    }

    function validateText(zip) {
        var re = /^[0-9a-zA-Z ]+$/;
        return zip.length === 5 && re.test(zip)
    }

    function ValidationEvent() {
        if(validatejs){
            var email = document.getElementsByName('email')[0].value;
            var fname = document.getElementsByName('fname')[0].value;
            var lname = document.getElementsByName('lname')[0].value;
            var topic = document.getElementsByName('topic')[0].value;
            var message = document.getElementsByName('message')[0].value;
            valid = true;
            if(!validateEmail(email)){
                alert('Invalid Email');
                valid = false;
            }
            else if(!validateName(fname)){
                alert('Names can only contain letters and spaces');
                valid = false;
            }else if(!validateName(lname)){
                alert('Names can only contain letters and spaces');
                valid = false;
            }else if(!validateText(topic)){
                alert('Topic should be only alpha numeric');
                valid = false;
            }else if(!validateText(message)){
                alert('Message should be only alpha numeric');
                valid = false;
            }
            return valid;
        }
        else{
            return true;
        }
    }
</script>

</html>