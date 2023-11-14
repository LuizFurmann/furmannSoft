<!DOCTYPE html>
<html lang="en">

<head>
    <title>Luiz Furmann</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/luiz.ico') }}">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: "Lato", sans-serif
        }

        .mySlides {
            display: none
        }
    </style>
    <link href="{{ asset('assets/css/style.css') }}" media="all" rel="stylesheet" type="text/css" />
</head>

<body>

    <!-- Navbar -->
    <div class="w3-top">
        <div class="w3-bar w3-black w3-card">
            <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right"
                href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i
                    class="fa fa-bars"></i></a>
            <a href="#" class="w3-bar-item w3-button w3-padding-large">HOME</a>
            <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Sobre</a>
            <a href="#portfolio" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Portfólio</a>
            <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Contato</a>
        </div>
    </div>

    <!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
    <div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top"
        style="margin-top:46px">
        <a href="#about" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Sobre</a>
        <a href="#portfolio" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Portfólio</a>
        <a href="#contact" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Contato</a>
    </div>


    <!-- The Band Section -->
    <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:1000px" id="about">
        <img src="{{ asset('assets/images/foto.png') }}" style="width:150px; border-radius: 50%;">
        <h2 class="w3-wide">Sobre</h2>
        <p class="w3-justify">Formado em Engenharia de Software, trabalho com desenvolvimento de aplicativos Android,
            apaixonado pela minha profissão, sempre buscando evoluir para assim poder
            entregar cada vez mais meus produtos com qualidade. Trabalho a 3 anos com desenvolvimento Android, mas
            também já tive oportunidade de atuar em projetos de desenvolvimento Web.
            Tive a grande satisfação de ter trabalhado em grandes projetos, que me ajudaram a evoluir muito como
            profissional. Entre em contato hoje mesmo para que possamos entender sua necessidade!</p>

    </div>

    <!-- The Tour Section -->
    <div class="w3-black" id="portfolio">
        <div class="w3-container w3-content w3-padding-64" style="max-width:1000px">
            <h2 class="w3-wide w3-center">Portfólio</h2>
            <p class="w3-opacity w3-center"><i>Aqui você pode ver alguns dos meus trabalhos!</i></p><br>

            <!-- First Photo Grid-->
            <div class="w3-col-padding">
                <div class="w3-third w3-container w3-margin-bottom">
                  <a href="/appOrders"><img src="{{ asset('assets/images/android_orders/android_controll_banner.png') }}" alt="Controle de ordens Android"
                        style="width:100%; border-radius: 3%;" class="w3-hover-opacity"></a>
                    <div class="w3-container" style="margin-top: 10px;">
                        <p><b>Aplicativo Android para controle de ordens de serviço</b></p>
                    </div>
                </div>
                <div class="w3-third w3-container w3-margin-bottom">
                  <a href="/webOrders"><img src="{{ asset('assets/images/web_orders/web_controll_banner.png') }}" alt="Controle de ordens web"
                        style="width:100%; border-radius: 3%;" class="w3-hover-opacity"></a>
                    <div class="w3-container" style="margin-top: 10px;">
                        <p><b>Sistema Laravel para controle de ordens de serviço</b></p>
                    </div>
                </div>
                <div class="w3-third w3-container">
                  <a href="/hangGame"><img src="{{ asset('assets/images/hang_game/hang_game_banner.png') }}" alt="Jogo da forca"
                        style="width:100%; border-radius: 3%;" class="w3-hover-opacity"></a>
                    <div class="w3-container" style="margin-top: 10px;">
                        <p><b>Jogo da forca para Android</b></p>
                    </div>
                </div>
            </div>

            <!-- Second Photo Grid-->
            <div class="w3-row-padding">
                <div class="w3-third w3-container w3-margin-bottom">
                    <a href="/gymmobi"><img src="{{ asset('assets/images/gymmobi/gymmobi_banner.png') }}" alt="GymMobi"
                        style="width:100%; border-radius: 3%;" class="w3-hover-opacity"></a>
                    <div class="w3-container" style="margin-top: 10px;">
                        <p><b>Aplicativo para academia</b></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- The Contact Section -->
    <div class="w3-container w3-content w3-padding-64" style="max-width:1000px" id="contact">
        <h2 class="w3-wide w3-center">Contato</h2>
        <p class="w3-opacity w3-center" style="font-size:20px;"><i>Entre em contato e vamos entender sua necessidade
                hoje mesmo!</i></p>
        <div class="w3-row w3-padding-32">
            <div class="w3-col m6 w3-large w3-margin-bottom">
                <i class="fa fa-envelope" style="width:30px"> </i> Email: furmannsoft@gmail.com<br>
                <i class="fa fa-phone" style="width:30px"> </i> Celular: (42) 99954-4798<br>
            </div>
        </div>
    </div>
    </div>

    <script>
        // Automatic Slideshow - change image every 4 seconds
        var myIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex > x.length) {
                myIndex = 1
            }
            x[myIndex - 1].style.display = "block";
            setTimeout(carousel, 4000);
        }

        // Used to toggle the menu on small screens when clicking on the menu button
        function myFunction() {
            var x = document.getElementById("navDemo");
            if (x.className.indexOf("w3-show") == -1) {
                x.className += " w3-show";
            } else {
                x.className = x.className.replace(" w3-show", "");
            }
        }

        // When the user clicks anywhere outside of the modal, close it
        var modal = document.getElementById('ticketModal');
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>

</body>

</html>
