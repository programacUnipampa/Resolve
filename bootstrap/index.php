<?php

$categoria = [
    1 => 'Dança',
    2 => 'Esportes',
    3 => 'Jogos',
    4 => 'Lazer',
    5 => 'Música',
    6 => 'Saúde',
    7 => 'Teatro',
    8 => 'Tecnologia'
];

$evento = [
    10 => [
        "nome" => "FLUXO TOTAL COM RODA DE PAGODE",
        "descricao" => "
                    🔥FLUXO TOTAL com RODA DE PAGODE, o pagode fica por conta do grupo AMIGOS DO SAMBA (grupo do Itamar)
                    <br>Dia 06/09 vem curtir mais uma festa top com o Open Bar de suco gummy até as 2:00 hrs da madrugada💥
                    <br>Se liga na promo ➡️ se você comprar um combo no valor de R$60,00 ganha entrada free e ainda pode chamar dois amigos para curtir a festa sem pagar a entrada 💥
                    <br>
                    <br>Se liga nos valores ⬇️
                    <br>Masculino: 15,00
                    <br>Feminino: Entrada totalmente FREE
        ",
        "categoria" => "5",
        "data" => "06/07/2019",
        "local" => "Rua Demétrio, n°175, com Tamandaré ",
        "preco" => "R$ 15.00"
    ],
    9 =>[
        "nome" => "Tchelinux 2019 Alegrete",
        "descricao" => "O grupo de usuários de Software Livre Tchelinux em parceria com a Universidade Federal do Pampa Campus Alegrete (UNIPAMPA) tem o prazer de convidar a comunidade para o evento que ocorrerá no dia 14 de Setembro de 2019 a partir das 8:00h na UNIPAMPA em Alegrete.",
        "categoria" => "8",
        "data" => "14/07/2019",
        "local" => "UNIPAMPA - <i> Campus </i> alegrete",
        "preco" => "Gratuito"

    ],
    8 =>[
        "nome" => "ERRC - Escola Regional de Rede de Computadores",
        "descricao" => "
            A 17a Escola Regional de Redes de Computadores – ERRC 2019 – ocorrerá em Alegrete/RS, entre os dias 16 a 19 de Setembro/2019, sendo organizada pela Universidade Federal do Pampa (Unipampa).
            <br>A ERRC é um evento anual promovido pela Sociedade Brasileira de Computação (SBC). Ao longo dos anos, a ERRC tornou-se um dos mais importantes eventos científicos em redes de computadores no Rio Grande do Sul.
            <br>A Escola dirige seu foco principalmente aos alunos de graduação e pós-graduação, bem como aos profissionais que atuam em redes de computadores dentro do âmbito do estado. O formato inclui palestras, minicursos e oficinas. Os alunos de programas de graduação e pós-graduação com trabalhos relacionados aos temas do evento são convidados a apresentarem artigos e, caso estes sejam aceitos, apresentá-los no evento. Assim, a Escola de Redes de Computadores firma-se como um fórum técnico-científico para a área, onde alunos e profissionais podem discutir o estado-da-arte e as tendências em redes de computadores.                    
        ",
        "categoria" => "8",
        "data" => "16/07/2019",
        "local" => "UNIPAMPA - <i> Campus </i> alegrete",
        "preco" => "R$ 31.00"

    ],
    7 =>[
        "nome" => "Badin em Alegrete - RS",
        "descricao" => "
            
            👉 INGRESSO SOLIDÁRIO ( PROMOCIONAL ANTECIPADO): R$ 30,00 + 1KG DE ALIMENTO NÃO PERECÍVEL (O alimento deverá ser entregue no dia e local do evento).          
            <br>👉MEIA ENTRADA: R$ 30,00
            <br>👉INTEIRA (HORA) : R$ 60,00            
            <br>
            
                      
            <br>☎ Informações
            <br>(51) 992706518
            <br>(51) 996738565
            <br>
            <br>➡️ Realização Risoteca Produtora
            
            <br>👥 Classificação Livre                    
        ",
        "categoria" => "7",
        "data" => "30/10/2019",
        "local" => "CTG Farroupilha",
        "preco" => "R$ 30.00 - R$ 35.00"

    ],
    6 =>[
        "nome" => "Palestra com André Trigueiro em Alegrete",
        "descricao" => " Palestra sobre a prevenção do suicídio no Brasil e no mundo. ",
        "categoria" => "6",
        "data" => "09/11/2019",
        "local" => "Clube Caixeral de Alegrete",
        "preco" => "Gratuito"

    ],
];
?>

<html>
<head>
    <style>
        body,
        html {
            margin: 0;
        }
        .filtro{
            width: 100%
        }
    </style>
    <meta charset="utf-8">
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-inverse" style="border-radius: 0">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php" style="border: 0; padding: 0;" >
                    <!-- <img src="logo2.png" class="img-responsive" style="height: 50px;"> -->
                    <p class="navbar-brand"><b>      Resolve! </b></p>
                </a>
            </div>


            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <form class="navbar-form navbar-left">

                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Pesquisar">

                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit" style="height: 34px">
                                <i class="glyphicon glyphicon-search"></i>
                            </button>
                        </div>
                    </div>

                </form>
                <!--
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                            aria-expanded="false"> Entrar <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                        </ul>
                    </li>
                </ul>-->
            </div>
        </div>
    </nav>
    <?php

        if(isset($_GET['pag']) && file_exists("$_GET[pag].php")){
            include "$_GET[pag].php";
        }else{
            include "home.php";
        }

    ?>
    <footer style="background: #292b2c; color: white; padding: 5px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-md-12">
                    <p style="text-align: center;"> Programa C | Resolve! </p>
                </div>
            </div>
        </div>
    </nav>
    
    <script src="bootstrap-3.3.7-dist/js/jquery.js"></script>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <script src="bootstrap-3.3.7-dist/js/npm.js"></script>
    
</body>
</html>