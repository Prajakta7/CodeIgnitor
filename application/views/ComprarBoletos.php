<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>

<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
    <title>Comprar Boletos</title>
    
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
        <img src="<?= base_url() . 'assets/' ?>imagenes/bannercboleto.jpg" alt="Banner" id="bottombanner" href="">
        <span class="caption1">COMPRAR BOLETOS</span>
        <span class="under_text">INICIO</span>
        <span class="under_text1">COMPRAR BOLETOS</span>
    </div>
    <h4> NUESTROS EVENTOS </h4>
    <p>Tu asistencia importane nosotros en los eventos que estamos realizando</p>
    <div class="band1">
        <table cellpadding="5">
            <tr>
                <?php foreach ($images AS $key => $image){ ?>
                <td valign="bottom"><a href="<?= base_url('index.php/welcome/Perdamos') ?>?id=<?php echo $productID[$key]; ?>"><img src="<?php echo base_url() . 'assets/' . $image; ?>" height=250px width=250px></a></td>
                <?php } ?>
            </tr>
            <tr>
                <?php foreach ($titles AS $title){ ?>
                    <td><?php echo $title; ?></td>
                <?php } ?>
            </tr>

            <tr>
                <?php foreach ($prices AS $price){ ?>
                    <td><?php if($price == 0) echo "Entrada Gratis"; else echo "$ " .$price; ?></td>
                <?php } ?>
            </tr>

        </table>


        <div class="footer1">
            <div class="band" id="bottom-band">
                <ul id="bottom-band-menu">
                    <li>
                        <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                        <span>Registrese para recibir un boletín </span>
                    </li>
                    <li>
                        <span style="color: green;"><?php echo $message; ?></span>
                        <div id="search_wrapper">
                            <form action="" method="post">
                                <input type="email" placeholder="Introduce tu correo electrónico" id="search_field" name="email" required />
                                <input type="submit" id="search_button" name="subscribe" value="Subscribier" />
                            </form>
                        </div>
                    </li>
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
    </div>
</body>
</html>