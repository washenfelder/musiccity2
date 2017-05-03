<?php
if(isset($_POST['submit'])){
  $nombre = $_POST['nombre'];
  $telefono = $_POST['telefono'];
  $mail = $_POST['email'];
  $mensaje = $_POST['mensaje'];
  $asuntoUsuario = $_POST['asunto'];

  $cuerpo = 'Remitente: ' . $nombre . ' ' . $telefono . '<br>';
  $cuerpo .= 'Email: ' . $mail . '<br>';
  $cuerpo .= 'Mensaje: ' . $mensaje . '<br>';

  $destino = 'diegobasspower@hotmail.com';
  $asunto = $asuntoUsuario;

  $encabezados = 'MIME-Version: 1.0' . "\r\n";
  $encabezados .= 'Content-type:text/html;charset=UTF-8' . "\r\n";
  $encabezados .= 'From: ' . $nombre . ' ' . $telefono . '<' . $mail . '>' . "\r\n"; 

  mail( $destino, $asunto, $cuerpo, $encabezados );
  header("Location: contact.html"); 
}
?>