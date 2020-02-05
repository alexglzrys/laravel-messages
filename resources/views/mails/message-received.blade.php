<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    {{--
        Los mailables inyectan automáticamente una instancia de la clase Illuminate\Mail\Message en las vistas, la cual lleva
        por nombre $message, por lo que es importante hacer uso de una propiedad publica con nombre diferente a $message para pasar los datos a la vista

        var_dump($message)
    --}}
    <h1>Bienvenido {{ $content['name'] }}</h1>
    <p>El asunto de tu mensaje es: {{ $content['subject'] }}</p>
    <hr>
    <p>{{ $content['content'] }}</p>
    <small>Agradecemos tu registro y seguimos en contacto</small>
</body>
</html>
