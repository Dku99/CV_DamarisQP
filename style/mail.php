<?php 

if(isset($_POST['enviar_contacto'])) {
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : 'nombre no disponible';
    $empresa = isset($_POST['empresa']) ? $_POST['empresa'] : 'El usuario no lleno el campo: empresa no disponible.';
    $correo = isset($_POST['correo']) ? $_POST['correo'] : '';
    $direccion = isset($_POST['direccion']) ? $_POST['direccion'] : 'no disponible';
    $num_tel = isset($_POST['numero_tel']) ? $_POST['numero_tel'] : 'no disponible';
    $mensaje = isset($_POST['mensaje']) ? $_POST['mensaje'] : 'no disponible';

    $destinatario = 'palaciosdamaris334';
    $asunto = 'Solicitud de información';

    // mensaje
    $carta = "De: $nombre \r\n";
    $carta .= "Correo: $correo \n";
    $carta .= "Empresa: $empresa \n";
    $carta .= "Dirección: $direccion \n";
    $carta .= "Número/Tel: $num_tel \n\n";
    $carta .= "Mensaje:\n$mensaje";

    $mail = mail($destinatario, $asunto, $carta);

    if($mail) {
        $url = "../views/success.html";
        header("Location: $url");
        die();
       
    } else {
        echo 'error al enviar';
    }

}

?>