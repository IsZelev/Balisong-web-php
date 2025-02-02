
<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Syncopate&display=swap" rel="stylesheet">
        <title>Balisong tricks</title>
    </head>

    <body onload="searchTrick()">
        <header>
            <nav class="navbar navbar-expand-lg bg-primary">
                <a class="navbar-brand text-white" href="#">Balisong Tricks Home</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto">
                        <form class="d-flex">
                            <input class="form-control me-2" id="search" type="text" placeholder="Cerca un trick..." aria-label="Search">
                            <button class="btn btn-outline-light" type="button" id="searchBtn" onclick="searchTrick()">Cerca</button>
                        </form>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                                Livelli
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#" onclick='searchTrick("diffA")'>Tutti i livelli</a></li>
                                <li><a class="dropdown-item" href="#" onclick='searchTrick("diff1")'>Principiante</a></li>
                                <li><a class="dropdown-item" href="#" onclick='searchTrick("diff2")'>Intermedio</a></li>
                                <li><a class="dropdown-item" href="#" onclick='searchTrick("diff3")'>Avanzato</a></li>
                            </ul>
                        </li>
                    </ul>
                    <a class="navbar-brand text-white" href="https://knifepivotlube.com/blogs/knife-pivot-lube/balisong-jargon"> Guida al linguaggio tecnico</a>
                </div>
            </nav>
        </header>

        <div class="text text-center title" id = "trickTitle"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-6"> <!--left column, tricks buttons-->
                    <div id = "tableSpace">
                        <!--Fills with data filtered from the search-->
                    </div>
                </div>
                
                <div class="col-sm-6"> <!--right column, tricks videos or images-->
                    <div class="center">
                        <video autoplay muted loop>
                            <source src="Media\Incredible Butterfly Knife Tricks (Balisong)  Squid Squad Montage.mp4" type="video/mp4">
                            <source src="Media\Incredible Butterfly Knife Tricks (Balisong)  Squid Squad Montage.ogg" type="video/ogg">
                            Your browser does not support the video tag.
                        </video>
                        
                        <video autoplay muted loop>
                            <source src="Media\NABALIS VULP.mp4" type="video/mp4">
                            <source src="Media\NABALIS VULP.ogg" type="video/ogg">
                            Your browser does not support the video tag.
                        </video>
                        
                        <video autoplay muted loop>
                            <source src="Media\isaac's_helix.mp4" type="video/mp4">
                            <source src="Media\isaac's_helix.ogg" type="video/ogg">
                            Your browser does not support the video tag.
                        </video>
                    </div>

                </div>
            </div>
        </div>
            

        <footer>
            <div class="text ftElements">
                Crediti
            </div>
            <div >
                <a href="https://www.squidindustries.co/"> <img src="Media\squidLogoIcon.png" class="logo ftElements col-sm"> </a>
                <a href="https://nabalis.com/"> <img src="Media\nabalis_logo.png" class="logo ftElements col-sm"> </a>
                <a href="https://knifepivotlube.com"> <img src="Media\KPL.png" class="ftElements col-sm" id="kpl"> </a>
                <a href="https://www.youtube.com/@BigFlips"> <img src="Media\bigflips.jpg" class="logo ftElements col-sm"> </a>
                <a href="https://www.youtube.com/@DenDenBMX"> <img src="Media\denden.jpg" class="logo ftElements col-sm"> </a>
                <a href="https://www.instagram.com/duke_of_random.flips/"> <img src="Media\dukeofrandom_flips.jpg" class="logo ftElements col-sm"> </a>
            </div>
            
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  
        <script src="script.js"></script>
    </body>
</html>