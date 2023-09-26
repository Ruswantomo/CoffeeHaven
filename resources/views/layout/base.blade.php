<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <!-- <link rel="preconnect" href="https://fonts.bunny.net"> -->
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
       
        
    </head>
    <body >
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="/"><b>Home</b></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about"><b>About</b></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="coffee"><b>Coffee</b></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="noncoffee"><b>Non Coffee</b></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="snack"><b>Snack</b></a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>

        @yield('content')
    </body>
</html>      