<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    @vite(['resources/css/materialize.css', 'resources/js/materialize.js'])
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
    <h1>{{ $header }}</h1>
    {{ $slot }}
    <script src="{{asset('js/materialize.min.js')}}"></script>
</body>

</html> 