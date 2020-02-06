<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <title>Laravel Messages</title>
</head>
<body>
    {{--
        Los mailables inyectan automáticamente una instancia de la clase Illuminate\Mail\Message en las vistas, la cual lleva
        por nombre $message, por lo que es importante hacer uso de una propiedad publica con nombre diferente a $message para pasar los datos a la vista

        var_dump($message)
    --}}
    <h3>Hola: {{ $content['name'] }}</h3>
    <p>Este mensaje es solo un ejemplo demostrativo de como enviar correo electrónico masivo y/o comercial a través de la plataforma SendGrid y Laravel.</p>
    <hr>
    <p>Asunto: {{ $content['subject'] }}</p>
    <p>Mensaje: {{ $content['content'] }}</p>
    <hr>
    <small>Gracias por haber establecido contacto con un servidor.</small>
</body>
</html>
