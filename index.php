<?php
include "conexao.php";
?>
<html>
<head>
    <style>
        body,
        html {
            margin: 0;
            background: ;
        }
        .pesq_aum{
            width: 100%;
        }
        .filtro{
            width: 100%;
        }
        @media only screen and (max-width: 1000px){
            .pesq_aum{
                width: 100%;
            }
        }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/png" href="assets/images/logo.png"/>
    <link rel="sty]" href="style.css">
</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top" style="border-radius: 0; backgound: #fff; box-shadow:  0px 0px 5px 1px #076018; border-color: #007c3c; padding: 3px">
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
                <a class="navbar-brand" href="index.php" style="border: 0; padding: 0; padding-left: 10px" >
                    <!-- <img src="logo2.png" class="img-responsive" style="height: 50px;"> -->
                    <?php
                        $query = mysqli_query($con, "SELECT * FROM identidade_visual");
                        if(mysqli_num_rows($query)  > 0){
                            $logo = mysqli_fetch_array($query);
                        }
                    ?>
                    <img src="assets/images/<?= $logo['logotipo']?>" class="img-responsive" style="height: 50px;" >
                </a>
            </div>


            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <form class="navbar-form navbar-left"  >
                    <input type="hidden" name="pag" value="pesquisa" >
                    <div class="input-group pesq_aum" style="border-radius: 3px; padding-left: 30px;">


                        <div class="input-group-btn">
                          <!--  <select style="height: 40px;" class="form-control">
                                <option>Eventos</option>
                                <option>Páginas</option>
                                <option>Promoters</option>
                            </select> -->
                            <input style="height: 40px;border-left-color: white"  type="text" class="form-control" placeholder="Pesquisar" name="key">
                            <button class="btn btn-default" type="submit" style="height: 40px; background-color:rgba(76, 147, 90, 0.44)">
                                <i class="glyphicon glyphicon-search"></i>
                            </button>
                        </div>
                    </div>
                    <div class="input-group">
                        <div class="input-group-btn">

                        </div>
                </form>
            </div>
        </div>
    </nav>
    <div style="margin-top: 51px">
        <?php

        if(isset($_GET['pag']) && file_exists("pages/$_GET[pag].php")){
            include "pages/$_GET[pag].php";
        }elseif(isset($_GET['pag']) && !file_exists("$_GET[pag].php")){
            include "pages/error.php";
        }else{
            include "pages/home.php";
        }

        ?>
    </div>
    <footer style=" background-color: #efefef;  padding: 5px; border-top: solid 0.2px #bdc1bd;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-md-12 text-center">
                    <p style="margin: 0; color:black; margin-top: 5px;"> Programa C | Resolve! </p>
                    <small> Ver nossa <a href=".?pag=politica" class="text-success">política de privacidade</a>  </small>
                </div>
            </div>
        </div>
    </footer>
 
    <script src="assets/css/bootstrap-3.3.7-dist/js/jquery.js"></script>
    <script src="assets/css/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <script src="assets/css/bootstrap-3.3.7-dist/js/npm.js"></script>
    
</body>
</html>

