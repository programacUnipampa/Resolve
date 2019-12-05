<input type="text" name="nome" id="addnome" value="<?= $_POST['nome']?>"><br>
<input type="email" id="addemail" name="email" value="<?= $_POST['nome']?>"> <br>

<textarea id="addtoken" name="token" value="<?= $_POST['token']?>"></textarea>
<script>
    $(function(){
        $("#add").click(function(){
            var name = $("#addnome").value;
            var email = $("#addemail").value;
            var token = $("#addtoken").value;
            alert(token);
            $.ajax({
                url: "127.0.0.1:8000/api/persons",
                method: "POST",
                data: {
                    "name": name,
                    "email": email,
                    "facebook_token": token
                },
                success: function(){
                    alert('success');
                },
                error: function(){
                    alert('failure');
                }

            });
        });

    });

    $(function(){
        $("#exc").click(function(){
            var id = $("#excpromoter").attr("value");

            $.ajax({
                url: "localhost:8000/api/persons/"+id,
                method: "DELETE",
                data: {
                    "id" : id
                },
                success: function(){
                    alert('success');
                },
                error: function(){
                    alert('failure');
                }

            });
        });

    });

</script>

<?php/*
    include "../conexao.php";
    include "assets/function.php";


    date_default_timezone_set('America/Sao_Paulo');
    if(isset($_POST['cadastra'])){

        $nome = addslashes($_POST['nome']);
        $token = addslashes($_POST['token']);
        $created = date("Y-m-d H:i");

        $sql = "
            INSERT INTO people(
                `name`, 
                `facebook_token`,
                `created_at`,
                `updated_at`
            ) VALUE (
                '$nome',
                '$token',
                '$created',
                '$created'
            )
        ";

    }
    if(isset($_POST['editPromoter'])){
        $id = $_POST['editPromoter'];
        $nome = addslashes($_POST['nome']);
        $token = addslashes($_POST['token']);
        $updated = date("Y-m-d H:i");
        $sql = "
                UPDATE 
                    `people`
                SET
                    name = '$nome',
                    facebook_token = '$token',
                    updated_at = '$updated'
                WHERE
                    id = $id
            ";


    }
    if(isset($_GET['excluiPromoter'])){
        $id = addslashes($_GET['excluiPromoter']);
        $sql = "
            DELETE FROM people WHERE id = $id
        ";
    }

    if(mysqli_query($con_api, $sql)){

        header("location: .?pag=promoter");
        alert('oi', 'so');
        exit;
    }*/
?>