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
                <a class="navbar-brand" href="#" style="border: 0; padding: 0; >
                    <img src="logo2.png" class="img-responsive" style="height: 50px;">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
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
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                            aria-expanded="false"> Entrar <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <?php
        $categoria = [
            1 => 'Dança',
            2 => 'Esportes',
            3 => 'Jogos',
            4 => 'Música',
            5 => 'Teatro'
        ];
    ?>

            <div style="margin-top: -20; padding: 0;">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="1" class='active'></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">

                        <div class="item active">
                            <a href="#">
                                <img src="imagens/evento1.png" alt="1" style="width:100%;">
                            </a>
                            <div class="carousel-caption">
                            </div>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="imagens/evento4.png" alt="4" style="width:100%;">
                            </a>
                            <div class="carousel-caption">
                            </div>
                        </div>
                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Anterior</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Próximo</span>
                        </a>
                    </div>
                </div>
            </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="list-group">
                    <h1> <i class="glyphicon glyphicon-filter"></i> Filtros </h1>
                    <div class="dropdown">
                        <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-default filtro">
                            Categorias
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dLabel">
                            <?php
                                for ($i = 1; $i < 6; $i++){
                                    echo "<li> <a href='#'> $categoria[$i]</a> </li>";
                                }
                            ?>

                            <li> <a href="#"> Esportes</a> </li>
                            <li> <a href="#"> Música</a> </li>
                        </ul>
                    </div> <br>
                    <div class="dropdown">
                        <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-default filtro">
                            Entrada
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dLabel">
                            <li> <a href="#"> Entrada paga </a> </li>
                            <li> <a href="#"> Entrada gratuita </a> </li>
                        </ul>
                    </div>
                </div>
            </div>
            <?php
                for ($i = 0; $i < 11; $i++){
                $random = rand(1, 5);
            ?>
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img src="imagens/evento<?= $random?>.png" alt="...">
                        <div class="caption">
                            <h3> Título do Evento </h3>
                            <sup> <?= $categoria[$random]?> </sup>
                            <p> Xxxxxxxxxxxxxxxxxxxxxxxx.</p>
                            <p> <h5><i class="glyphicon glyphicon-calendar"></i> Data: <?= rand(1, 31) ."/". rand(1,12) ."/". 2019 ?> </h5></p>
                            <p> <h5><i class="glyphicon glyphicon-globe"></i> Local: Xxxxxx </h5></p>
                            <p> <h5><i class="glyphicon glyphicon-usd"></i> Preço: Gratuito </h5></p>

                            <a href="#" class="btn btn-success" style="width: 100%"> Ver mais! </a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="col-sm-6 col-md-12">
            <nav aria-label="Page navigation" style="width: 100%; text-align:center">
                <ul class="pagination">
                        <li>
                            <a href="" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li> <a href="">1</a> </li>
                        <li> <a href="">2</a> </li>
                        <li> <a href="">3</a> </li>
                        <li> <a href="">4</a> </li>
                        <li> <a href="">5</a> </li>
                        <li> <a href="">6</a> </li>
                        <li>
                            <a href="?pagina=<?= $_GET['pagina'] + 1?>" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                </ul>
            </nav>
        </div>
    </div>


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