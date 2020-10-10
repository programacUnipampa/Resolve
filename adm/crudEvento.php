<?php
if(isset($_POST['remover'])){
    $id = $_POST['remover'];

 $query = mysqli_query($con, "SELECT image FROM evento WHERE id_evento = $id");
    $nome = mysqli_fetch_array($query);
    @unlink("../assets/images/$nome[image]");

    $sql = "
            DELETE FROM
                evento
            WHERE
                id_evento = $id
        ";

    if(mysqli_query($con, $sql)){
        echo "
            <script>
                alert('Evento removido com sucesso!');    
            </script>
        ";
        include("home.php");
    }

    //ADICIONAR
}elseif(isset($_POST['adicionar'])) {
    $titulo = addslashes($_POST['titulo']);
    $descricao = addslashes($_POST['descricao']);
    $local = addslashes($_POST['local']);
    $categoria = addslashes($_POST['categoria']);
    $data = "2019/11/30 ".$_POST['hora'];

    $foto = (date("md--his") . ".jpg");
    copy($_FILES["image"]["tmp_name"], "../assets/images/".$foto);

    $sql = "
            INSERT INTO `evento`(
                `image`,
                `nome`,  
                `descricao`,
                `local`,
                `data`,
                `promoter_id_promoter`,
                categoria_id_categoria
            )VALUES(
                '$foto',
                '$titulo',
                '$descricao',
                '$local',
                '$data',
                1,
                $categoria
            )
        ";
    if(mysqli_query($con, $sql)){

        include "home.php";
    }
}
?>