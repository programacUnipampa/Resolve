<?php
    if(!isset($_GET['key'])){
        header("location: .?pag=error");
        exit;
    }
    if($_GET['key'] === ""){
        header("location: .");
        exit;
    }
    $key = addslashes($_GET['key']);
    $query = mysqli_query($con, "SELECT * FROM evento WHERE nome like '%$key%'");
?>
<title> Pesquisa: "<?=$key?>"</title>
<div class="container"> <br><br>
    <div class="row">
        <div class="col-md-12 col-md-12">
            <h1 style="margin-bottom: 20px"> Resultados para "<?= $key < 30 ? substr($key, 0, 30)."..." : $key ?>"</h1><br>
        </div>
        <?php while($evento = mysqli_fetch_array($query)){ ?>
        <div class="col-md-12 col-md-3">
            <div class="thumbnail">

                <img src="assets/images/<?= $evento["image"] ?>" style="width: 100%; max-height:100%; height: 150px; object-fit: cover" alt="<?= $i?>">
                <div class="caption">
                    <h4> <?= $evento["nome"] < 15 ? substr($evento["nome"], 0, 17)."..." : $evento["nome"]?> </h4>
<!--
                    <sup> <?= $cat[$evento['categoria_id_categoria']]?> </sup>
-->
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
        <?php } ?>
    </div>
</div><br><br><br>