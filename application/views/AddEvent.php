<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>

<head>
    <title>Add Event</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
<div class="container">
    <img src="<?= base_url() . 'assets/' ?>imagenes/bannerregistro.jpg" height="260" width="1090" alt="Banner" id="bottombanner" href="ComprarBoletos.php">
    <span class="caption1">REGISTRO DE EVENTO</span>
    <span class="under_text">EVENTO </span>
    <span class="under_text1">REGISTROS</span>
</div>
<div id="event-form">
    <form action="" method="post">
        <span style="color: red;"><?php echo @$error;  ?></span>
        <span style="color: red;"><?php  echo validation_errors();  ?></span>
        <div id="event-form-section1">
            <div>
                <ul>
                    <input type="hidden" name="event_id" value="<?php echo @$event_id ?>"/>
                    <li><label for="Nombres">Telefono</label><input type="text" name="number" placeholder="Nombre del Evento" required value="<?php echo @$number ?>"></li>
                    <li><label for="Responsable">Responsable</label><input type="text" name="responsible" placeholder="Nombre del Responsable" required value="<?php echo @$responsible ?>"></li>
                </ul>
            </div>
            <div>
                <ul>
                    <li><img src="<?= base_url() . 'assets/' ?>imagenes/imagensubir.png" alt=""></li>
                </ul>
            </div>
            <span>
                    <label for="Lugar">Lugar</label><input type="text" name="address" placeholder="Direccion del Lugar del Eventos" required value="<?php echo @$place; ?>">
                </span>
        </div>
        <div id="event-form-lower">
            <ul>
                <li><label for="Fecha">Fecha</label><input name="date" type="text" placeholder="MM/DD/YYYY" value="<?php echo @$eventDate ?>"></li>
                <li><label for="Hora">Hora</label><input type="text" name="time" placeholder="HH:mm" value="<?php echo @$time ?>"></li>
                <li><label for="valor">Valor de Boleto</label><input type="text" name="price" placeholder="000" value="<?php  echo  @$price?>"></li>
            </ul>
            <input type="submit" name="submit" id="submit-form" value="Guardar" />
        </div>
    </form>
</div>
<div id="footer20">
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















</body>

</html>