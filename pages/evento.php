<?php
    if(isset($_GET['id'])){
        $id = addslashes($_GET['id']);
        $query = mysqli_query($con, "SELECT * FROM evento WHERE id_evento = $id");
        if(mysqli_num_rows($query) > 0){
            $evento = mysqli_fetch_array($query);
        }else{
            header("location: .?pag=error");
            exit;
        }
    }else{
        header("location: .?pag=error");
        exit;
    }
$query = mysqli_query($con, "SELECT * FROM categoria WHERE  nome != 'outros' ORDER BY nome");

while($categoria = mysqli_fetch_array($query)){
    $cat[$categoria['id_categoria']] = $categoria['nome'];

} $cat[8] = 'Outros';
?><br><br>  
<title> <?= $evento["nome"]?></title>
<div class="container">
    <div class="row">

        <div class="col-md-4">

            <img style="width: 100%;" src="assets/images/<?= $evento["image"]?>"><h2>

                <p> <h4>
                    <i class="glyphicon glyphicon-calendar"></i>
                    Data: <?= date("d/m/Y", strtotime($evento["data"])) ?>
                </h4></p>
                <p> <h4>
                    <i class="glyphicon glyphicon-time"></i>
                    Horário: <?= date("H:i", strtotime($evento["data"])) ?>
                </h4></p>
                <p> <h4>
                    <i class="glyphicon glyphicon-globe"></i>
                    Local: <?= $evento["local"] ?>
                </h4></p>
                <?php if($evento['id_evento'] == 19){ ?>

                    <p> <h4>
                        <i class="glyphicon glyphicon-usd"></i>
                        Preço:  1kg de alimento <br><br>
                    </h4></p>
                <?php }elseif(($evento['id_evento'] == 20) || ($evento['id_evento'] == 21)){ ?>

                    <p> <h4>
                        <i class="glyphicon glyphicon-usd"></i>
                        Preço:  5kg de alimento/ração por dupla
                    </h4></p>
                <?php }else{ ?>
                    <p> <h4>
                        <i class="glyphicon glyphicon-usd"></i>
                        Preço:   <?= $evento["preco"] > 0 ? "R$".$evento["preco"].".00" : "Gratuito" ?><br><br>
                    </h4></p>
                <?php } ?><br><br>

        </div>
        <div class="col-md-8">

            <h1 style="margin-bottom: 0"> <?= $evento["nome"] ?> </h1>
            <h5 style="margin-top: 0; margin-left: 5px"> <?= $cat[$evento['categoria_id_categoria']]?> </h5>
            <h4> Descrição </h4>
            <p style="text-align: justify"> <?= $evento["descricao"]?> </p>

        </div>
        <div class="col col-lg-12">
            <h3>Eventos Relacionados</h3>
            <?php
            $query = mysqli_query($con, "
                SELECT
                    *
                FROM
                    evento
                WHERE
                    id_evento != $evento[id_evento] AND categoria_id_categoria = $evento[categoria_id_categoria]
                LIMIT 0,6
                    
            ");
            while($relacionados = mysqli_fetch_array($query)){ ?>
                <div class="col-md-12 col-md-2">

                    <div class="thumbnail">
                        <img src="assets/images/<?= $relacionados["image"] ?>" style="width: 100%; max-height:100%; height: 150px; object-fit: cover" alt="<?= $relacionados['nome']?>">
                        <div class="caption">


                            <a href=".?pag=evento&id=<?= $relacionados['id_evento'] ?>" class="btn btn-default" style="width: 100%; border-color: #076018; color: #076018;"> Ver mais! </a>
                        </div>
                    </div>
                </div>
            <?php } if(mysqli_num_rows($query) == 0){
                echo "&nbsp;&nbsp;&nbsp;&nbsp;<i> Nenhum resultado encontrado! </i>";
            }?>
        </div>
    </div>
</div>
<br> <br>