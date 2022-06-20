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
            <form>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3 formlabelcolor">
                                    <label for="disabledSelect" class="form-label">TYPE</label>
                                    <select id="disabledSelect" class="form-select">
                                    <option>Alle</option>
                                    <option>Wein</option>
                                    <option>Schaumwein</option>
                                    <option>Spirituosen</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                <div class="mb-3 formlabelcolor">
                                    <label for="disabledSelect" class="form-label">FARBE</label>
                                    <select id="disabledSelect" class="form-select">
                                    <option>Alle</option>
                                    <option>Rot</option>
                                    <option>Weiss</option>
                                    <option>Rosé</option>
                                    </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-6">
                                <div class="mb-3 formlabelcolor">
                                    <label for="disabledSelect" class="form-label">LAND</label>
                                    <select id="disabledSelect" class="form-select">
                                    <option>Alle</option>
                                    <option>Land</option>
                                    <option>Land</option>
                                    <option>Land</option>
                                    <option>Land</option>
                                    <option>Land</option>
                                    <option>Land</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                <div class="mb-3 formlabelcolor">
                                    <label for="disabledSelect" class="form-label">WEINREGION</label>
                                    <select id="disabledSelect" class="form-select">
                                    <option>Alle</option>
                                    <option>Region</option>
                                    <option>Region</option>
                                    <option>Region</option>
                                    <option>Region</option>
                                    <option>Region</option>
                                    <option>Region</option>
                                    </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3 formlabelcolor">
                                    <label for="disabledSelect" class="form-label">REBSORTE</label>
                                    <select id="disabledSelect" class="form-select">
                                    <option>Alle</option>
                                    <option>Grenache</option>
                                    <option>Carignan</option>
                                    <option>Merlot</option>
                                    <option>Chardonnay</option>
                                    <option>Syrah</option>
                                    <option>Tempranillo</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3 formlabelcolor">
                                    <label for="disabledSelect" class="form-label">PRODUZENT</label>
                                    <select id="disabledSelect" class="form-select">
                                    <option>Alle</option>
                                    <option>Produzent</option>
                                    <option>Produzent</option>
                                    <option>Produzent</option>
                                    <option>Produzent</option>
                                    <option>Produzent</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="row">
                                    <div class="col-6">
                                    <div class="mb-3 formlabelcolor">
                                        <label for="disabledSelect" class="form-label">JAHRGANG</label>
                                        <select id="disabledSelect" class="form-select">
                                        <option>Alle</option>
                                        <option>1996</option>
                                        <option>1999</option>
                                        <option>2001</option>
                                        <option>2006</option>
                                        <option>2011</option>
                                        <option>2018</option>
                                        </select>
                                        </div>
                                    </div>
                                <div class="col-6">
                                <div class="mb-3 formlabelcolor">
                                    <label for="disabledSelect" class="form-label">ZUCKERGEHALT</label>
                                    <select id="disabledSelect" class="form-select">
                                    <option>Alle</option>
                                    <option>0-1 g/L</option>
                                    <option>1-2 g/L</option>
                                    <option>2-3 g/L</option>
                                    <option>&nbsp;>3 g/L</option>
                                    </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div class="container productPage">
            <div class="row">
                <div class="col-sm-6"> 
                    <div class="prodcutimage">
                        <img class="img-thumbnail" src="/img/PodrumAleksicNostalgija.jpg">
                    </div>
                </div>
            
                <div class="col-sm-6">
                    <div>
                        <h3 class="searchResultline1">Punto Ar Cabernet Franc</h3>
                    </div>
                    <div>
                        <p class="searchResultline3">Argentinien | Mendosa</p>
                    </div> 
                    Füllmenge
                    <p class="searchResultline2">0,75</p>
                    Gaumen
                    <p class="searchResultline2">Balancierte Fruchtsnote</p>
                    Serviertemperatur
                    <p class="searchResultline2">18°C</p>
                    Zuckergehalt
                    <p class="searchResultline2">1</p>
                    Alkoholgehalt
                    <p class="searchResultline2">13.5% vol</p>
                    Traube
                    <p class="searchResultline2">Chasselas</p>

                    
                    <img class="stars" src="/img/stars5.png">
                    

                    <h3 class="eStory">Emma's Geschichte</h3>
                    <p class="storyb">Das Weingut von Aleksić verfügt über insgesamt 23 Hektar Rebfläche und liegt ganz im Süden von Serbien in der Weinregion Nisava an der Grenze zu Mazedonien. Es wird von drei Schwestern gemeinsam mit einer Önologin geführt. Unter sehr günstigen Bedingungen und im großen Stil werden hier die lokalen Rebsorten Vranac und Sevdah angebaut. Aber auch Sauvignon Blanc und Cabernet Sauvignon erzielen hervorragende Ergebnisse.</p>
                </div>
            </div>
        </div>
        <!-- Ende Entwicklug Nina -->

    </main>
    <footer>
        <div class="footer container border-top border-dark border-2">
            <div class="row">
                <div class="col-md-4">
                    <p class="headerabovecontent1">WEIN</p>
                </div>
                <div class="col-md-4">
                   <p class="headerabovecontent2">SCHAUMWEIN</p>
                </div>
                <div class="col-md-4">
                   <p class="headerabovecontent3">SPIRITUOSEN</p>
                </div>
            </div>                    
        </div>
    </footer>
</body>
</html>