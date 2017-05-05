<?php
    $destino="diegobasspower@hotmail.com";
    $nombre=$_POST["name"];
    $email=$_POST["email"];
    $asunto=$_POST["asunto"];
    $mensaje=$_POST["message"];
    $contenido="Nombre: " . $nombre . "/nEmail: " . $email . "/nAsunto: " .$asunto ."/nMensaje: " . $message;

    mail($destino,"Contacto",$contenido);
    header("Location: index.html");
?>

