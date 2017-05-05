<?php
    $destino="musiccity@live.com.ar";
    $nombre=$_POST["name"];
    $email=$_POST["email"];
    $telefono=$_POST["telefono"];
    $asunto=$_POST["asunto"];
    $mensaje=$_POST["message"];

    $contenido="Mensaje de: " . $nombre . "\nEmail: " . $email . "\nTelefono: " . $telefono ."\nAsunto: " . $asunto . "\nMensaje. " . $mensaje;
    
    mail($destino,"Consulta Web Musiccity",$contenido);
    header("Location: index.html");
?>

