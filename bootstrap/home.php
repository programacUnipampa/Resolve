<title> Página Inicial </title>
<div style="margin-top: -20; padding: 0;">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="10" class='active'></li>
            <li data-target="#myCarousel" data-slide-to="9"></li>
            <li data-target="#myCarousel" data-slide-to="8"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">

            <div class="item active">
                <a href="#">
                    <img src="imagens/evento10.png" alt="10" style="width: 100%; max-height:100%; height: 500px; object-fit: cover">
                </a>
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <a href="#">
                    <img src="imagens/evento9.png" alt="9" style="width: 100%; max-height:100%; height: 500px; object-fit: cover">
                </a>
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <a href="#">
                    <img src="imagens/evento8.png" alt="8" style="width: 100%; max-height:100%; height: 500px; object-fit: cover">
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
                        } ?>

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
        for ($i = 10; $i >= 0; $i--){
            $random = rand(1, 5);
            ?>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">

                    <img src="imagens/evento<?= $i > 5 ? $i : $random ?>.png" style="width: 100%; max-height:100%; height: 150px; object-fit: cover" alt="<?= $i?>">
                    <div class="caption">
                        <h4> <?= $i > 5 ? substr($evento[$i]["nome"], 0, 17)."..." : "Título do Evento"?> </h4>
                        <sup> <?= $i > 5 ? $categoria[$evento[$i]["categoria"]] : $categoria[$random]?> </sup>

                        <p> <h5>
                            <i class="glyphicon glyphicon-calendar"></i>
                            Data: <?= $i > 5 ? $evento[$i]["data"] : rand(1, 31) ."/". rand(1,12) ."/". 2019 ?>
                        </h5></p>
                        <p> <h5>
                            <i class="glyphicon glyphicon-globe"></i>
                            Local: <?= $i > 5 ? substr($evento[$i]["local"], 0, 20)."..." : "Xxxxxx"?>
                        </h5></p>
                        <p> <h5>
                            <i class="glyphicon glyphicon-usd"></i>
                            Preço: <?=  $i > 5 ? $evento[$i]["preco"] : "Gratuito" ?>
                        </h5></p>

                        <a href=".?pag=evento&rand=<?= $random?>&id=<?= $i > 5 ? $i : '' ?>" class="btn btn-default" style="width: 100%"> Ver mais! </a>
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
