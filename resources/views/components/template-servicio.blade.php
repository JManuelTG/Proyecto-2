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
    <nav>
        <div class="navbar-fixed">
          <a href="/servicios" class="brand-logo">LFCarry</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="/servicios/create">Crear</a></li>
            <li>
                <form method="POST" action="http://proyecto.test/logout" x-data="">
                    @csrf
                    <input type="hidden" name="_token" value="WodUEo5Mj68R44k6wcZ8uWTd4Sr8aEZB2cS0R83o">
                    <a class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition" href="http://proyecto.test/logout" onclick="event.preventDefault();this.closest('form').submit();">Log Out</a>
                </form>
            </li>
            <li><a href="http://proyecto.test/login" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>
          </ul>
        </div>
      </nav>
    <h1>{{ $header }}</h1>
        {{ $slot }}
        <script src="{{asset('js/materialize.min.js')}}"></script>
</body>

</html>

