<?php
    if(isset($_GET['id'])){
        $id = addslashes($_GET['id']);
        $query = mysqli_query($con_api, "SELECT * FROM events WHERE id = $id");
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
?><br><br>  
<title> <?= $evento["name"]?></title>
<div class="container">
    <div class="row">

        <div class="col-md-4">

            <img style="width: 100%;" src="assets/images/<?= $evento["image"]?>"><h2>
            <h4><i class="glyphicon glyphicon-calendar"></i> Data: <?= date("d/m/Y", strtotime($evento["date"])) ?> </h4>
            <h4><i class="glyphicon glyphicon-time"></i> Horário: <?= date("H:i", strtotime($evento["date"])) ?> </h4>
            <h4 ><i class="glyphicon glyphicon-globe"></i> Local: <?= $evento["place"] ?> </h4>
            <h4><i class="glyphicon glyphicon-usd"></i> Preço:  <?= $evento["price"] > 0 ? "R$".$evento["price"] : "Gratuito" ?>  </h4>
            <br> <br> <br>
        </div>
        <div class="col-md-8">

            <h1 style="margin-bottom: 0"> <?= $evento["name"] ?> </h1>
            <h5 style="margin-top: 0;"> outros </h5>
            <h4> Descrição </h4>
            <p style="text-align: justify"> <?= $evento["description"]?> </p>

        </div>
        <div class="col col-lg-12">
            <h3>Eventos Relacionados</h3>
            <?php
            $query = mysqli_query($con_api, "
                SELECT
                    *
                FROM
                    events
                WHERE
                    category = '$evento[category]' AND
                    id != $evento[id]
                LIMIT 0,6
                    
            ");
            while($relacionados = mysqli_fetch_array($query)){ ?>
                <div class="col-md-12 col-md-2">

                    <div class="thumbnail">
                        <img src="assets/images/<?= $relacionados["image"] ?>" style="width: 100%; max-height:100%; height: 150px; object-fit: cover" alt="<?= $relacionados['name']?>">
                        <div class="caption">


                            <a href=".?pag=evento&id=<?= $relacionados['id'] ?>" class="btn btn-default" style="width: 100%; border-color: #076018; color: #076018;"> Ver mais! </a>
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