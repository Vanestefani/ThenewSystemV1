<?php






   

  $nombre = $_POST['name'];
            $email = $_POST['email'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];
            
            
            $header = 'From: ' . $email . " \r\n";
            $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
            $header .= "Mime-Version: 1.0 \r\n";
            $header .= "Content-Type: text/plain";

            $mensaje = "Este mensaje fue enviado por " . $name . ",\r\n";
            $mensaje .= "Su e-mail es: " . $email . " \r\n";
            $mensaje .= "Asunto: " . $subject . " \r\n";
            $mensaje .= "Mensaje: " . $message . " \r\n";
            $mensaje .= "Enviado el " . date('d/m/Y', time());

            $para = 'thenewsystems@gmail.com';
            $asunto = 'Mensaje de mi sitio web';

            if (mail($para, $asunto, utmensajeCde($mensaje), $header)) {
                $mensajeExito = '<div class="alert alert-success" role="alert">Mensaje enviado con éxito :)</div>';    
            } else {
                $error = '<div class="alert alert-danger" role="alert"><p><strong>Mensaje sin enviar :(</div>';  
            } 
        }  
    }
?>

 