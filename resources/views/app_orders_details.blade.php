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

    <link href="{{ asset('assets/css/style.css') }}" media="all" rel="stylesheet" type="text/css" />

</head>
<body class="w3-black">
    <div class="w3-top">
        <div class="w3-bar w3-black w3-card">
            <a href="/" class="w3-bar-item w3-button w3-padding-large">HOME</a>
        </div>
    </div>

    <div class="w3-black" id="portfolio">
        <div class="w3-container w3-content w3-padding-64" style="max-width:1000px; height=100%">
            <h2 class="w3-wide w3-center">Aplicativo Android para controle de ordens de serviço</h2>
            <p class="w3-opacity w3-center"><i>Tem o objetivo de controlar as ordens de serviço de manutenção, direcionando para quem irá executar a ordem. <br/> Podendo iniciar e finalizar, tornando mais fácil de organizar as ordens de serviço geradas</i></p><br>

            <!-- First Photo Grid-->
            <div class="w3-col-padding">
                <div class="w3-quarter w3-container w3-margin-bottom zoom">
                  <img src="{{ asset('assets/images/android_orders/app_control_login.png') }}" alt="Controle de ordens Android"
                        style="width:100%; border-radius: 3%;" class="w3-hover-opacity">
                    <div class="w3-container" style="margin-top: 10px;">
                        <p><b>Tela para realizar o login no aplicativo</b></p>
                    </div>
                </div>
                <div class="w3-quarter w3-container w3-margin-bottom zoom">
                    <img src="{{ asset('assets/images/android_orders/app_control1.png') }}" alt="Controle de ordens web"
                        style="width:100%; border-radius: 3%;" class="w3-hover-opacity">
                    <div class="w3-container" style="margin-top: 10px;">
                        <p><b>Tela inicial onde fica a lista de ordens, abertas, pendentes e finalizadas</b></p>
                    </div>
                </div>
                <div class="w3-quarter w3-container w3-margin-bottom zoom">
                    <img src="{{ asset('assets/images/android_orders/app_control2.png') }}" alt="Jogo da forca"
                        style="width:100%; border-radius: 3%;" class="w3-hover-opacity">
                    <div class="w3-container" style="margin-top: 10px;">
                        <p><b>Tela para criar uma nova ordem de serviço</b></p>
                    </div>
                </div>
                <div class="w3-quarter w3-container w3-margin-bottom zoom">
                    <img src="{{ asset('assets/images/android_orders/app_control3.png') }}" alt="GymMobi"
                        style="width:100%; border-radius: 3%;" class="w3-hover-opacity">
                    <div class="w3-container" style="margin-top: 10px;">
                        <p><b>Tela de detalhes da ordem de serviço, onde pode ser inicializada ou finalizada</b></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>