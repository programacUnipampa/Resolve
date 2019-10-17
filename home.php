<title> ReUni </title>

<?php
/*
    if(isset($_GET['filtro'])){
        echo "<br><br><br><br><br><br>";
        var_dump($_GET['filtro']);exit;
    } */
?>

<style>
    #RespCar{
        margin: auto;
        max-width:auto;
        max-height:100%;
        width: auto;
        height: 400px;
        object-fit: cover
    }
    @media only screen and (max-width: 1000px){

        .item{
            height: 200px;
            vertical-align: middle;
        }

        #RespCar{
            height: auto;
            max-height: auto;


        }
    }
</style>


<div class="container">
    <div class="row">

        <div class="col-lg-12 col-lg-12"> <br> <br>

            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="10" class='active'></li>
                    <li data-target="#myCarousel" data-slide-to="9"></li>
                    <li data-target="#myCarousel" data-slide-to="8"></li>
                    <li data-target="#myCarousel" data-slide-to="8"></li>
                    <li data-target="#myCarousel" data-slide-to="8"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <?php $i = 0;
                        if(empty($_GET['filtro'])){
                            $query = mysqli_query($con, "SELECT * FROM evento ORDER BY data LIMIT 0, 5");
                        }else{
                            $query = mysqli_query($con, "SELECT * FROM evento ORDER BY data LIMIT 0, 5");
                        }
                        while($carrossel = mysqli_fetch_array($query)){ $i++;

                    ?>
                    <div class="item <?= $i == 1 ? 'active' : ''?>" style="background: rgba(0,0,0,0.50)">
                        <a href=".?pag=evento&id=<?=$carrossel['id_evento']?>">
                            <img src="assets/images/<?= $carrossel['image']?>" alt="10" id="RespCar">
                        </a>
                        <div class="carousel-caption">
                        </div>
                    </div>
                    <?php } ?>
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
        <br> <br> <br>
        </div>
        <div class="col-lg-12 col-lg-3">
                <form >
                <h2> <i class="glyphicon glyphicon-filter"></i> Filtros </h2>
                        <h4>Categorias</h4>&nbsp
                        <?php



                            $query = mysqli_query($con, "SELECT * FROM categoria WHERE  nome != 'outros' ORDER BY nome");

                            while($categoria = mysqli_fetch_array($query)){
                                $cat[$categoria['id_categoria']] = $categoria['nome'];

                                ?>

                            <input type="checkbox" id="<?= $categoria['id_categoria']?>" name="filtro" value="<?= $categoria['id_categoria']?>">
                                &nbsp <?= $categoria['icone'] == "" ? "" : "<span class='fa fa-$categoria[icone]'></span>" ?>

                            <label for="<?= $categoria['id_categoria']?>">
                                <?= $categoria["nome"] ?>
                            </label> <br>&nbsp
                            <?php } $cat[8] = 'Outros';
                        ?>
                        <input type="checkbox" id="8" name="filtro" value="8">
                        &nbsp<span class='fa fa-plus-circle'></span>

                        <label for="8">
                            Outros
                        </label> <br>&nbsp
            <br> <br>
            <button class="btn btn-default filtro" style="border-color: #076018; color: #076018;" type="submit" disabled>
                    Filtrar
                </button>
                </form>
                <br>
        </div>
        <?php

        $pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1;
        $query = mysqli_query($con, "SELECT * FROM evento");

        $total = mysqli_num_rows($query);
        $quantidadePpag = 6;
        $numPag = ceil($total/$quantidadePpag);
        $inicio = ($quantidadePpag * $pagina) - $quantidadePpag;

        $query = mysqli_query($con, "SELECT * FROM evento ORDER BY data LIMIT  $inicio, $quantidadePpag");


            $total = mysqli_num_rows($query);





            if(mysqli_num_rows($query) > 0){
                while($evento = mysqli_fetch_array($query)){ ?>

            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">

                    <img src="assets/images/<?= $evento["image"] ?>" style="width: 100%; max-height:100%; height: 150px; object-fit: cover" alt="<?= $i?>">
                    <div class="caption">
                        <h4> <?= $evento["nome"] < 15 ? substr($evento["nome"], 0, 17)."..." : $evento["nome"]?> </h4>

                        <sup> <?= $cat[$evento['categoria_id_categoria']]?> </sup>

                        <p> <h5>
                            <i class="glyphicon glyphicon-calendar"></i>
                            Data: <?= date("d/m/Y", strtotime($evento["data"])) ?>
                        </h5></p>
                        <p> <h5>
                            <i class="glyphicon glyphicon-globe"></i>
                            Local: <?= $evento["local"] < 15 ? substr($evento["local"], 0, 17)."..." : $evento["local"] ?>
                        </h5></p>
                        <p> <h5>
                            <i class="glyphicon glyphicon-usd"></i>
                            Preço:   <?= $evento["preco"] > 0 ? "R$".$evento["preco"].".00" : "Gratuito" ?>
                        </h5></p>

                        <a href=".?pag=evento&id=<?= $evento['id_evento'] ?>" class="btn btn-default" style="width: 100%; border-color: #076018; color: #076018;"> Ver mais! </a>
                    </div>
                </div>
            </div>
        <?php } } ?>

    </div>
    <div class="col-sm-6 col-md-12">
        <nav aria-label="Page navigation" style="width: 100%; text-align:center; color: #043b17;">
            <ul class="pagination">
                <?php if($pagina > 1){?>
                    <li>
                        <a style="color: #076018;" href="?pagina=<?= $_GET['pagina'] - 1?>" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                <?php }
                for($i = 1; $i < $numPag + 1; $i++) {?>
                        <li><a style=" color: #076018;" href="?pagina=<?=$i?>"><?=$i?> </a> </li>
                <?php }
                if($pagina < $numPag){
                    if(empty($_GET['pagina'])){$_GET['pagina'] = 1;}
                    ?>
                    <li>
                        <a style="color: #076018;" href="?pagina=<?= $_GET['pagina'] + 1?>" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </nav>
    </div>
</div>
