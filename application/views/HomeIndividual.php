<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

<head>
    <title>Home Individual</title>
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
        <li> <a href="<?= base_url('index.php/welcome/HomeIndividual') ?>"> Events</a></li>
        <li> <a href="<?= base_url('index.php/welcome/MyEventsIndividual') ?>"> My Events</a></li>
        <li> <a href="<?= base_url('index.php/welcome/ProfileIndividual') ?>"> Profile </a></li>
        <li> <a href="<?= base_url('index.php/welcome/IniciarSesion') ?>"> Cerrar Sesión</a></li>
    </ul>
</div>
<div class="band5">
    <table>
        <th>
            <h2>Lista de Eventos</h2><br><span><?= $message ?> </span>
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
                    Number: ". $event['event_phone'] . "<br>
                                        Price: $". $event['ticket_amount']; ?></td>
                <td> <?php echo $event['place'] ?> </td>
                <td> <?php echo date('M d, Y', strtotime($event['schedule'])) ?> </td>
                <td> <?php echo date('g:i A', strtotime($event['schedule'])) ?> </td>
                <td>
                    <?php if($event['event_id'] !== $event['vid'] && $event['user_id'] !== $_SESSION['user']['user_id']){ ?>
                        <div class="registrarse">
                            <button id="<?php echo $event['event_id'] ?>" onclick="confirmar(this)"  class="myButton1 btn1">Confirmar</button>
                        </div>
                    <?php } ?>
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

<div id="myModal1" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <div><h3>Bienvenido</h3></div>
        <hr>
        <div id="row1">
            <p> Gracias por ser un voluntario en nuestro evento</p>
        </div>
        <hr>
        <div class="cerrar">
            <button class="myButton1 close" style="float: none; color: white">Close</button>
        </div>
    </div>

</div>
</html>

<script>
    // Get the modal
    var modal1 = document.getElementById('myModal1');


    // Get the <span> element that closes the modal
    var span1 = document.getElementsByClassName("close")[0];
    var close1 = document.getElementsByClassName("close")[1];

    function confirmar(obj) {
        modal1.style.display = "block";
        cur_id = obj.id;
    }

    // When the user clicks on <span> (x), close the modal
    span1.onclick = function() {
        modal1.style.display = "none";
        window.location.href = "<?= base_url().'index.php/welcome/HomeIndividual' ?>?confirm=" + cur_id;

    };
    close1.onclick = function() {
        modal1.style.display = "none";
        window.location.href = "<?= base_url().'index.php/welcome/HomeIndividual' ?>?confirm=" + cur_id;

    };

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target === modal1) {
            modal1.style.display = "none";
            window.location.href = "<?= base_url().'index.php/welcome/HomeIndividual' ?>?confirm=" + cur_id;

        }
    };
</script>