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
        <div class="w3-container w3-content w3-padding-64" style="max-width:100%; height=100%">
            <h2 class="w3-wide w3-center">Sistema Web em Laravel para controle de ordens de serviço</h2>
            <p class="w3-opacity w3-center"><i>Uma aplicação web feita em Laravel com o objetivo de controlar as ordens
                    de serviço, mecânicos, setores e máquinas de uma empresa.
                    Aumentando o controle do tempo gasto para cada ordem realizada, assim como máquinas que mais
                    apresentam defeitos, facilitando na hora de gerar relatórios<br /></i></p><br>

                    <div class="w3-col-padding" style="margin-top: 10px;">
                        <div class="w3-third w3-container w3-margin-bottom zoom">
                            <img src="{{ asset('assets/images/web_orders/web_orders1.png') }}" alt="Controle de ordens Android"
                                style="width:100%; border-radius: 3%;" class="w3-hover-opacity">
                            <div class="w3-container" style="margin-top: 10px;">
                                <p><b>Tela para realizar o login no sistema</b></p>
                            </div>
                        </div>
                        <div class="w3-third w3-container w3-margin-bottom zoom">
                            <img src="{{ asset('assets/images/web_orders/sistema_control.png') }}"
                                alt="Controle de ordens Android" style="width:100%; border-radius: 3%;"
                                class="w3-hover-opacity">
                            <div class="w3-container" style="margin-top: 10px;">
                                <p><b>Tela inicial com todas as ordens mais recentes</b></p>
                            </div>
                        </div>
                        <div class="w3-third w3-container w3-margin-bottom zoom">
                            <img src="{{ asset('assets/images/web_orders/sistema_control2.png') }}" alt="Controle de ordens web"
                                style="width:100%; border-radius: 3%;" class="w3-hover-opacity">
                            <div class="w3-container" style="margin-top: 10px;">
                                <p><b>Tela para criar uma nova ordem de serviço</b></p>
                            </div>
                        </div>
                    </div>
        
                    <!-- Second Photo Grid-->
                    <div class="w3-row-padding">
                        <div class="w3-third w3-container w3-margin-bottom zoom">
                            <img src="{{ asset('assets/images/web_orders/web_orders2.png') }}" alt="Controle de ordens web"
                                style="width:100%; border-radius: 3%;" class="w3-hover-opacity">
                            <div class="w3-container" style="margin-top: 10px;">
                                <p><b>Opções de filtros para relatórios</b></p>
                            </div>
                        </div>
                        <div class="w3-third w3-container w3-margin-bottom zoom">
                            <img src="{{ asset('assets/images/web_orders/web_orders3.png') }}" alt="Controle de ordens web"
                                style="width:100%; border-radius: 3%;" class="w3-hover-opacity">
                            <div class="w3-container" style="margin-top: 10px;">
                                <p><b>Tela de detalhes de uma ordem com opção para impressão</b></p>
                            </div>
                        </div>
        
                        <div class="w3-third w3-container w3-margin-bottom zoom">
                            <img src="{{ asset('assets/images/web_orders/web_orders4.png') }}" alt="Controle de ordens web"
                                style="width:100%; border-radius: 3%;" class="w3-hover-opacity">
                            <div class="w3-container" style="margin-top: 10px;">
                                <p><b>Tela de listagem com os mecânicos cadastradros</b></p>
                            </div>
                        </div>
                    </div>


            <div class="w3-col-padding">
                <div class="w3-third w3-container w3-margin-bottom zoom">
                    <img src="{{ asset('assets/images/web_orders/web_orders5.png') }}" alt="Controle de ordens web"
                        style="width:100%; border-radius: 3%;" class="w3-hover-opacity">
                    <div class="w3-container" style="margin-top: 10px;">
                        <p><b>Criação de novo mecânico no sistema</b></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
