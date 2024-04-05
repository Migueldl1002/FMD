<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/FMD/CSS/Style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    
<form method="post" autocomplete="on">

<img src="/FMD/IMGS/Logo.png" alt="Logo">

<div class="input-group">

    <div class="input_container">
        <input type="name" name="name" placeholder="Nombre">
            <i class="fas fa-user"></i>
    </div>

    <div class="input_container">
        <input type="password" name="password" placeholder="Contraseña">
            <i class="fas fa-lock"></i>
    </div>

    <div class="input_container">
        <input type="email" name="email" placeholder="Correo Electronico">
            <i class="fas fa-envelope"></i>
    </div>

    <div class="input_container">
        <input type="phone" name="phone" placeholder="Telefono">
            <i class="fas fa-phone"></i>
    </div>

<a href="#">Terminos y Condiciones</a>

<input name="send" type="submit" class="Button" value="Enviar">

</div>
</form>

<?php

include("Send.php")

?>

</body>
</html>