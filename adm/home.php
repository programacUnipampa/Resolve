<title>Reuni | Dashboard </title>


<div class="container-fluid">

    <!-- Content Row -->
    <div class="row">

        <div class="col-lg-12 mb-12">

            <!-- Illustrations -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8">
                                <h6 class="m-0 font-weight-bold" style="padding-top: 10px">
                                    Eventos
                                </h6>
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-outline-dark" style="float: right"  data-toggle="modal" data-target="#exampleModal">
                                    <span class="fa fa-plus"></span>
                                    Adicionar Evento
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <td>#</td>
                            <td>Foto</td>
                            <td>Nome</td>
                            <td>Funções</td>
                        </tr>
                        <?php
                            $query = mysqli_query($con, "SELECT * FROM evento");
                            while($evento = mysqli_fetch_array($query)){
                                echo "
                                    <tr> 
                                    <td> $evento[id_evento] </td>
                                    <td> <img src='../assets/images/$evento[image]' style='width: 80px'> </td>
                                    <td> $evento[nome] </td>
                                    <td> <form method='post' action='.?pag=crudEvento'><button type='submit' class='btn btn-danger' name='remover' value='$evento[id_evento]'> Remover</button> </form> </td>

                                    </tr>
                                ";
                            }
                        ?>
                    </table>
                </div>
            </div>
        </div>


    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
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
            <form method="POST" enctype='multipart/form-data'  action=".?pag=crudEvento">
                <div class="modal-body">
                    <label>Imagem:</label>
                    <input type="file" name="image" class="form-control" required><br>
                    <label>Título:</label>
                    <input type="text" name="titulo" class="form-control" placeholder="Título do Evento" required><br>
                    <label>Descrição:</label>
                    <textarea placeholder="Descrição" name="descricao" class="form-control" required></textarea><br>
                    <label>Categoria</label>
                    <select class="form-control" name="categoria" required>
                        <option disabled selected>Selecione uma categoria</option>
                        <?php
                            $query = mysqli_query($con, "SELECT * FROM categoria");
                            while ($cat = mysqli_fetch_array($query)){
                                echo "<option value='$cat[id_categoria]'>
                                        $cat[nome]
                                    </option>";
                            }
                        ?>
                    </select>
                    <label>Hora:</label>
                    <input type="time" name="hora" class="form-control" required><br>
                    <label>Local:</label>
                    <input type="text" name="local" class="form-control" placeholder="Local do evento" required><br>
                </div>
                <div class="modal-footer">
                    <button type="submit" id="add" class="btn btn-INFO" name="adicionar" value="true">Adicionar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>

                </div>
            </form>
        </div>
    </div>
</div>
