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
            <h2 class="w3-wide w3-center">Aplicativo para academia</h2>
            <p class="w3-opacity w3-center"><i>Aplicativo Android com layout simples mas intuitivo para adiconar os
                    treinos da semana, conta com opções direcionadas para saúde</i></p><br>

            <!-- First Photo Grid-->
            <div class="w3-quarter w3-container w3-margin-bottom zoom">
                <img src="{{ asset('assets/images/gymmobi/app_academia5.png') }}" alt="Controle de ordens web"
                    style="width:100%; border-radius: 3%;" class="w3-hover-opacity">
                <div class="w3-container" style="margin-top: 10px;">
                    <p><b>Tela inicial com opções</b></p>
                </div>
            </div>
            <div class="w3-quarter w3-container w3-margin-bottom zoom">
                <img src="{{ asset('assets/images/gymmobi/app_academia2.png') }}" alt="Controle de ordens web"
                    style="width:100%; border-radius: 3%;" class="w3-hover-opacity">
                <div class="w3-container" style="margin-top: 10px;">
                    <p><b>Tela com os treinos de hoje</b></p>
                </div>
            </div>
            <div class="w3-quarter w3-container w3-margin-bottom zoom">
                <img src="{{ asset('assets/images/gymmobi/app_academia3.png') }}" alt="Controle de ordens web"
                    style="width:100%; border-radius: 3%;" class="w3-hover-opacity">
                <div class="w3-container" style="margin-top: 10px;">
                    <p><b>Tela da semana com lista de treinos para cada dia</b></p>
                </div>
            </div>
            <div class="w3-quarter w3-container w3-margin-bottom zoom">
                <img src="{{ asset('assets/images/gymmobi/app_academia4.png') }}" alt="Controle de ordens web"
                    style="width:100%; border-radius: 3%;" class="w3-hover-opacity">
                <div class="w3-container" style="margin-top: 10px;">
                    <p><b>Tela para adicionar ou editar um treino</b></p>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>
