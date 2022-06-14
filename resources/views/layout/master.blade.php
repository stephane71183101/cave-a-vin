<!DOCTYPE html>
<html lang="en"><head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script src="{{ asset('js/app.js') }}" defer></script>
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   <title>@yield('title')</title>
</head>
<body>
    <header>
            <div class="container">
                <div class="row">
                    <div class="col-3">
                        <a class="headerlogo" href="#">
                            <img src="/img/cave-a-vin_logo.png" class="rounded float-left" alt="Logo" width="200">
                        </a>
                    </div>
                    <div class="col-9">
                        <p class="headertext">La cave à vin d'Emma B.</p>
                    </div>
                </div>
            </div>
    </header>
   <h1>Testen wir Sass und Bootstrap!</h1>
      <div>Tutorial made by Positronx.io</div>   
      <button class="btn btn-warning" type="submit">Bootstrap-Button</button>
      <br>
    

</body>
</html>