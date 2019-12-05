<title>Reuni | Promoters</title>

<?php
    if(isset($_GET['edit'])){
        alert('Teste', 'meucu');
    }
?>



<script>
    function remover(id, nome) {
        $('#modalexc').modal('show');
        document.getElementById('tituloexc').innerText = id;
        document.getElementById('conteudoexc').innerText = nome;
        document.getElementById('excpromoter').value = id;
    }
    function editar(id, nome, token) {
        $('#modaledit').modal('show');
        document.getElementById('tituloedit').innerText = id;
        document.getElementById('nomeEdit').value = nome;
        document.getElementById('tokenEdit').value = token;
        document.getElementById('editPromoter').value = id;
    }
    $(function(){
        $("#add").click(function(){
            var name = $("#addnome").val();
            var email = $("#addemail").val();
            var token = $("#addtoken").val();

            $().post({
                url: "localhost:8000/api/persons",
                data: {
                    name: name,
                    email: email,
                    facebook_token: token
                },
                success: function(response) {
                    window.location.href = '.?pag=home';
                }

            });
        });

    });
</script>

<div class="container-fluid">
    <!-- Content Row -->
    <div class="row">

        <!-- Pending Requests Card Example -->
        <div class="col-md-12">

            <div class="card">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col-md-9">
                            <h3>Promoters</h3>
                        </div>
                        <div class="col-md-3">
                            <button class="btn btn-outline-light text-dark float-right" data-toggle="modal" data-target="#exampleModal" >
                                <span class="fa fa-plus-circle"></span>
                                Adicionar Promoter
                            </button>
                        </div>
                        <table class="table" style="margin-top: 15px">
                            <thead class="thead-light">
                            <tr>
                               <th>#</th>
                               <th>Nome</th>
                               <th>Token do Facebook</th>
                               <th colspan="3">Funções</th>
                            </tr>
                            </thead>

                            <?php
                                $query = mysqli_query($con_api, "
                                    SELECT id, name, facebook_token FROM people
                                ");
                                while($promoter = mysqli_fetch_array($query)){
                                    echo "
                                        <tr>
                                            <td> $promoter[id] </td>
                                            <td> $promoter[name] </td>
                                            <td> ".substr($promoter['facebook_token'], 0, 40)."... </td>
                                            <td>
                                                <button class='btn btn-light' data-toggle=\"modal\" data-target=\"#modalMore$promoter[id]\" ><i class='far fa-eye'></i> Ver páginas</button>
                                            </td>
                                            <td>
                                                <button class='btn btn-info' onclick=\"editar($promoter[id], '$promoter[name]', '$promoter[facebook_token]')\"><i class='fa fa-edit'></i> Editar</button>
                                            </td>
                                            <td>
                                                <button class='btn btn-danger' onclick=\"remover($promoter[id],'$promoter[name]')\" ><i class='fa fa-trash'></i> Remover</button> 
                                            </td>
                                        </tr>
                                    ";
                                    echo "                           
                                        <!-- M O D A L   M O R E -->
                                        <div class='modal fade' id='modalMore$promoter[id]' tabindex='-1' role='dialog' aria-hidden='true'>
                                            <div class='modal-dialog' role='document'>
                                                <div class='modal-content'>
                                                    <div class='modal-header'>
                                                        <h5 class='modal-title' id='exampleModalLabel'>
                                                            (#$promoter[id])
                                                            Páginas associadas 
                                                        </h5>
                                                        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                                            <span aria-hidden='true'>&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class='modal-body'>
                                                        <ul>
                                    ";
                                    $query2 = mysqli_query($con_api, "SELECT * FROM pages WHERE person_id = $promoter[id]");
                                    while ($dado = mysqli_fetch_array($query2)){
                                        echo "
                                                <li>$dado[slug_of_the_page]</li>
                                            
                                        ";
                                    }

                                    echo "

                                                        </ul>
                                                    </div>
                                                    <div class='modal-footer'>
                                                        <button type='button' class='btn btn-secondary' data-dismiss='modal'>Fechar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    ";
                                }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div><br>
</div>


<!-- M O D A L -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    <span class="fa fa-plus-circle"></span>
                    Adicionar Promoter
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST">
                <div class="modal-body">
                    <input type="text" name="nome" id="addnome" placeholder="Nome" class="form form-control" required><br>
                    <input type="email" id="addemail" name="email" placeholder="Email" class="form form-control" required> <br>

                    <input id="addtoken" name="token" placeholder="Token do Facebook" class="form form-control">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="button" id="add" class="btn btn-INFO">Adicionar</button>
                </div>
            </form>
        </div>
    </div>
</div>




<!-- M O D A L   E D I T -->
<div class="modal fade" id="modaledit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    (#<span id="tituloedit"></span>)
                    Editar Promoter
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="crudPromoter.php" method="POST">
                <div class="modal-body">DDA
                    <input type="text" name="nome" id="nomeEdit" placeholder="Nome" class="form form-control" required><br>
                    <input type="text" name="token" id="tokenEdit" placeholder="Token do Facebook" class="form form-control" required>
                    <input type="hidden" id="editPromoter" name="editPromoter" value="true">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-INFO">Salvar alterações</button>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="modal fade" id="modalexc" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">

                    (#<span id="tituloexc"></span>)
                    Remover Promoter
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <div class="modal-body">
                    <p>Você deseja realmente excluir o promoter <span id="conteudoexc"></span>? </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <a href="#" id="excpromoter" class="btn btn-danger"><span class="fa fa-trash"></span> Remover</a>
                </div>
        </div>
    </div>
</div>

<script>


</script>

