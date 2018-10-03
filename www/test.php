<!DOCTYPE html>
<html lang="en">
<head>
    <title>Websitetest</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Cardo" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        body{
            background-color: #bba5b4;
        }
        footer {
            background-color: #000000;
            color: white;
            text-align: center;
            font-size: 30px;
        }
        h1, h5 {
            font-family: 'Cardo', serif;
            font-weight: bold
        }
        img.logo {
            display: block;
            max-width: 100%;
            height: auto;
        }

        input[type=text], select, textarea {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #000000;
            border-radius: 4px;
            box-sizing: border-box;
            font-family: 'Cardo', serif;
        }
        input[type=submit] {
            width: 100%;
            background-color: #000000;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-family: 'Cardo', serif;
        }
        p i {
            font-size: 25px;
            text-align: center;
            margin-top: 20px;
        }

        /* Add a background color on mouse-over */
        input[type=submit]:hover {
            background-color: #b11d4b;
        }
        input[type=text]:hover{
            background-color: #b11d4b;
        }
        textarea:hover{
            background-color: #b11d4b;
        }
        a.nav-link  {
            font-size: large ;
            color: black;
            font-family: 'Cardo', serif;
            font-weight: bold;
            text-align: center;
        }
        .footer a{
            background-color: #000000;
            color: #b11d4b;
        }
        ....................................................
        /*RESPONSIVE BOOTSTRAP*/

        /*extra small device*/
        @media  (max-width: 575.98px) {
            .fa-phone{
                margin-right: 20%;
                margin-left: 30%;
            }
        }

        /*small device*/
        @media (min-width: 576px) and (max-width: 767.98px) {
            .fa-phone{
                margin-right: 50%;
                margin-left: 35%;
            }
        }

        /*medium device*/
        @media (min-width: 768px) and (max-width: 991.98px) {
            .fa-phone{
                margin-right: 50%;
                margin-left: 40%;
            }
        }


    </style>
</head>
<body>
<?php
include "login/connection.php";
session_start();
if(isset($_POST['submit'])) {

    $stmt = $conn->prepare("INSERT INTO form (firstname, lastname, email, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['message']);
    $stmt->execute();
}
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-lg-12">
            <a  style="background-color: transparent; border: 0; padding: 0;" href="login/login.php">
                <img class="logo" src="images/logo.PNG">
            </a>
        </div>
    </div>
</div>

<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="border: 5px solid black; background-image: linear-gradient( #bd7dd6, rgba(161,29,75,0.3), #a35268)">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto" >
                <li class="nav-item">
                    <a class="nav-link" href="index.html" >Home</a>
                </li>
                <li class="nav-item" style="color: black">
                    <a class="nav-link" href="novias.html" >Maquillaje de Novias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="fiesta.html">Maquillaje de Fiesta</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="piel.html">Maquillaje Piel Madura</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="dia.html">Maquillaje de Dia</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="infantil.html">Maquillaje Infantil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="caracter.html">Maquillaje de Caracterizacion</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="contact.html">Contactenos<span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-12" style="text-align: center;">
            <h1>Contacto</h1>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class=" col-lg-4">
            <p class="icons" style="margin-top: 30px; text-align: center; border:  3px solid black;">
                <i class="fas fa-phone" style="font-size: x-large;"> <br>+06644545455</i>
                <a class="mail" style="background-color: transparent; border: 0; padding: 0;" href="mailto:angelicajiens@hotmail.com?Subject=Hello%20again" target="_top">
                    <i class="fas fa-envelope" style="font-size: x-large;"> <br>Angelicajiens@hotmail.com</i></a><br>
                <i class="fas fa-map-marked-alt" style="font-size: x-large;"> <br>Barcelona</i><br>
            </p>
        </div>
        <div class="col-lg-4">
            <p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.
            </p>
        </div>


        <div class="col-lg-4">
            <form  method="post">
                <div class="row">
                    <div class="col-lg-12">
                        <label for="fname"><b>Nombre:</b></label>
                        <input type="text" id="fname"  name="firstname" placeholder="ingrese su nombre..">
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <label for="lname"><b>Appellido:</b></label>
                        <input type="text"  name="lastname"  placeholder="ingrese su apellido..">
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <label for="e-mail"><b>Coreo Electronico:</b></label>
                        <input type="text"   placeholder="Introduce tu correo electrónico" name="email">
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <label for="textarea"><b>Mensaje:</b></label>
                        <textarea name="message"  placeholder="Su mensaje"></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <input type="submit" name="submit" value="ENVIAR">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <footer class="footer">
                <a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
                <a href="https://www.instagram.com/angelicajiensmakeup/"><i class="fab fa-instagram"></i></a>
            </footer>
        </div>
    </div>
</div>



</body>
</html>