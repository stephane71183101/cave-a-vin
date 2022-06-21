<!DOCTYPE html>
<html lang="en"><head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="{{ asset('js/app.js') }}" defer></script>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="icon" type="image/png" href="img/cave-a-vin_logo.png"/>
<link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@700&display=swap" rel="stylesheet"> 
<title>@yield('title')</title>
</head>
<body>
    <header>
        <div class="container">
            <div class="row headerabove">
                <div class="col-md-4">
                    <a href="#">
                        <img src="/img/cave-a-vin_logo.png" class="headerlogo" alt="Logo" width="200">
                    </a>
                </div>
                <div class="col-md-8">
                    <p class="headertext1">La cave à vin d'Emma&nbsp;B.</p>
                    <div class="row headertext2">
                        <div class="col-md-8"></div>
                        <div class="col-md-4"><a class="emmalink" href="#">Über Emma</a></div>
                    </div>
                </div>
            </div>
            <div class="row headerbelow">
                <div class="col-md-4">
                    <p class="winefont headerabovecontent">WEIN</p>
                </div>
                <div class="col-md-4 border-start border-end border-dark border-2">
                    <p class="sparklingwinefont headerabovecontent">SCHAUMWEIN</p>
                </div>                    
                <div class="col-md-4">
                    <p class="spiritsfont headerabovecontent">SPIRITUOSEN</p>
                </div>
                </div>
            </div>
        </div>
    </header>
    <main>

    <div class="searchfields">
           
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="box-flex box-flex-center">
                            <img class="box-raritäten" src="/img/WeinHintergrund.png">
                           
                            <h5 class="box-caption">Beste Weine</h5>
                        </div>
                        </div>

                        <div class="col-6">
                            <img class="img-whisky" src="/img/WeinHintergrund.png">  
                        </div> 
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="box-flex box-flex-center">
                            <img class="box-champagner" src="/img/Champagner.png">                    
                        </div>
                        </div>
                        <div class="col-6">
                            <img class="img-schweiz" src="/img/Champagner.png">  
                        </div> 
                    </div>
                </div>
</div>
    </main>

    <footer>
        
    <div class="footer container border-top border-dark border-2">
        <div class="row">
            <div class="col-md-4">
                <p class="headerabovecontent1">WEIN</p>
        </div>
        <div class="col-md-4">
            <p class="headerabovecontent">SCHAUMWEIN</p>
        </div> 
        <div class="col-md-4">
                <p class="headerabovecontent3">SPIRITUOSEN</p>
         </div>               
        </div>
    </div>

    </footer>
</body>
</html>