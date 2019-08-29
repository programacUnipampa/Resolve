<?php
    if(isset($_GET['rand'])){
        if(isset($_GET['id'])){
            $random = addslashes($_GET['id']);
        }else{
            $random = addslashes($_GET['rand']);
        }

    }else{
        echo "
            <script>
                window.location('index.php');
                window.alert('Evento não Encontrado');
            </script>
        ";
    }
?>
<title> <?= $random > 5 ? $evento[$random]["nome"] : "Título do Evento"?></title>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <img style="width: 100%;" src="imagens/evento<?= $random?>.png">
            <h4><i class="glyphicon glyphicon-calendar"></i> Data: <?= $random > 5 ? $evento[$random]["data"] : rand(1, 31) ."/". rand(1,12) ."/". 2019 ?> </h4>
            <h4 ><i class="glyphicon glyphicon-globe"></i> Local: <?= $random > 5 ? $evento[$random]["local"] : "Xxxxxxxxxx" ?> </h4>
            <h4><i class="glyphicon glyphicon-usd"></i> Preço:  <?= $random > 5 ? $evento[$random]["preco"] : "Gratuito" ?>  </h4>
            <br> <br> <br>
        </div>
        <div class="col-md-8">
            <h1> <?= $random > 5 ? $evento[$random]["nome"] : "Título do Evento" ?> </h1>
            <sup> <?= $random > 5 ? $categoria[$evento[$random]["categoria"]] : $categoria[$random]?> </sup>
            <h4> Descrição </h4>
            <p style="text-align: justify"> <?= $random > 5 ? $evento[$random]["descricao"] : "Xxxxxxxxx xxxxxxxxxxxx xx xxxxxxxxx xxxxxxxx xxxxxx xxxxxxxxxxxxxxx xxxxxxxx xxx xxxxxxxx. Xxxxxxxxx xxxxxxxxxxxx xx xxxxxxxxx xxxxxxxx xxxxxx xxxxxxxxxxxxxxx xxxxxxxx xxx xxxxxxxx. Xxxxxxxxx xxxxxxxxxxxx xx xxxxxxxxx xxxxxxxx xxxxxx xxxxxxxxxxxxxxx xxxxxxxx xxx xxxxxxxx. Xxxxxxxxx xxxxxxxxxxxx xx xxxxxxxxx xxxxxxxx xxxxxx xxxxxxxxxxxxxxx xxxxxxxx xxx xxxxxxxx.  Xxxxxxxxx xxxxxxxxxxxx xx xxxxxxxxx xxxxxxxx xxxxxx xxxxxxxxxxxxxxx xxxxxxxx xxx xxxxxxxx. " ?> </p>

        </div>

        <div class="col-md-12">

            <?php
            for ($i = 0; $i < 6; $i++){ ?>
                <div class="col-sm-6 col-md-2">
                    <div class="thumbnail">
                        <img src="imagens/evento0.png" alt="<?= $random?>">
                        <div class="caption">
                            <h4> Título do Evento </h4>

                            <a href=".?pag=evento" class="btn btn-default btn-sm" style="width: 100%"> Ver mais! </a>

                        </div>
                    </div>

                </div>
            <?php } ?>
        </div>
    </div>
</div>
<br> <br>