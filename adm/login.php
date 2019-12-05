<?php
    session_start();
    if(isset($_SESSION['usuario'])){
        header("location: .");
        exit;
    }

    include "../conexao.php";

    if(isset($_POST['email'])){
        $email = addslashes($_POST['email']);
        $senha = addslashes($_POST['senha']);

        $query = mysqli_query($con, "SELECT * FROM administrador WHERE email = '$email' AND senha = '$senha'");

        if(mysqli_num_rows($query) > 0){
            $_SESSION['usuario'] = mysqli_fetch_array($query);
            header("location: .");
            exit;
        }

    }


    $query = mysqli_query($con, "SELECT * FROM identidade_visual");
    $fetch = mysqli_fetch_array($query);
    $img = $fetch['logotipo'];

?>

<!DOCTYPE html>
<html lang="pt">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login</title>

  <!-- Custom fonts for this template-->
  <link href="assets/vendor/fontawesome-free/css/all.css" rel="stylesheet" type="text/css">
<link rel="icon" type="image/png" href="../assets/images/logo.png"/>
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="assets/css/sb-admin-2.css" rel="stylesheet">

</head>

<body class="bg-success">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-6 col-lg-6">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <!-- Nested Row within Card Body -->
            <div class="row">

              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <img src="../assets/images/<?=$img?>" class="img-fluid" style="padding: 30px; padding-top: 0">
                  </div>
                  <form class="user" method="post" action="login.php">
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user"placeholder="Digite seu email" name="email" required>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" placeholder="Digite sua senha" name="senha" required>
                    </div>
                    <button class="btn btn-success btn-user btn-block" type="submit">
                      Entrar
                    </button>
                  </form>

                </div>
              </div>
          </div>
        </div>

      </div>

    </div>

  </div>

</body>

</html>
