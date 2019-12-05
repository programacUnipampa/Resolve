<title>Reuni | Dashboard </title>


<div class="container-fluid">

    <!-- Content Row -->
    <div class="row">

        <!-- Pending Requests Card Example -->
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Promoters
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php
                                $n = mysqli_query($con_api, "SELECT * FROM people");
                                echo mysqli_num_rows($n);

                                ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                Eventos
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php
                                $n = mysqli_query($con_api, "SELECT * FROM events");
                                echo mysqli_num_rows($n);

                                ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-icons fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Content Row -->
    <div class="row">


        <div class="col-lg-6 mb-4">

            <!-- Illustrations -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold ">
                        <span class="fa fa-image"></span>
                        Logotipo
                    </h6>
                </div>
                <div class="card-body">
                    <?php
                    $query = mysqli_query($con, "SELECT * FROM identidade_visual");
                    if(mysqli_num_rows($query) > 0){
                        $fetch = mysqli_fetch_array($query);
                        $img = $fetch['logotipo'];
                        echo "
                                            <img class='img-thumbnail' style='padding: 10px; width: 50% ;' src='../assets/images/$img'> <br> <br>
                                        ";
                    }
                    ?>

                    <form style="float: 100%">
                        <div>
                            <input class="logofile" type="file" class="form-control-file"> <br>
                        </div>
                        <div class="logenv">
                            <button class="btn btn-light btn-icon-split" disabled>
                                <span class="icon fa fa-upload"></span>
                                <span class="text">Enviar</span>
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>


    </div>
</div>
<!-- /.container-fluid -->
