<?php require_once('includesAdmin/headAdmin.php'); ?>
<div class="content-wrapper">

    <!-- Main content -->
    <div class="content">
        <div class="container p-5">
            <div class="card w-100 p-4">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container">
                        <div class="row mb-2">
                            <div class="col-sm-12 text-center">
                                <h1 class="m-0"> Área Administrativa <small>- Feedback</small></h1>
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->
                <hr>
                <form action="configs/feedbacksController" method="POST" enctype="multipart/form-data">
                    <div class="row p-3">

                        <div class="col-md-12 form-group">
                            <label for="nomePessoa" class="form-label">Nome da Pessoa:</label>
                            <input name="nomePessoa" type="text" required placeholder="insira o nome..." class="form-control" id="nomePessoa" aria-describedby="nomePessoa">
                            <small id="nomePessoa" class="form-text">Insira o nome da pessoa.</small>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="testemunho" class="form-label">Testemunho:</label>
                            <textarea name="testemunho" required class="form-control summernote" placeholder="Digite o testemunho..." id="testemunho"></textarea>
                            <small id="testemunho" class="form-text">Informe o Testemunho.</small>
                        </div>
                        <div class="col-md-12 bg-light p-4 rounded">
                            <label for="imgFeedback">Escolha uma Imagem para a Pessoa (77X77)</label><br>
                            <input class="w-100" type="file" required name="imgFeedback" id="imgFeedback"><br>
                        </div>
                        <div class="col-md-12 text-center"><button type="submit" name="add" class="btn btn-success mt-4 px-4">Adicionar</button></div>
                    </div>
                </form>
                <hr>
                <?php
                $querySelect = "SELECT * FROM feedback ORDER BY id;";
                $resultSelect = mysqli_query($connect, $querySelect);
                $resultVerify = mysqli_num_rows($resultSelect);
                if ($resultVerify >= 1) {
                ?>
                    <div class="p-4">
                        <table class="table table-responsive table-hover table-striped text-center rounded border">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Titulo</th>
                                    <th scope="col">Nome Pessoa</th>
                                    <th scope="col">Data</th>
                                    <th scope="col">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_array($resultSelect)) { ?>
                                    <tr>
                                        <th class="align-middle font-weight-normal" scope="row"><?= $row['id'] ?></th>
                                        <td class="align-middle font-weight-normal"><?= $row['nomePessoa'] ?></td>
                                        <td class="align-middle font-weight-normal" style="width: 20%"><img style="width: 30%" class="img-fluid img-thumbnail" src="../assets/databaseImg/feedback/<?= $row['imgFeedback'] ?>"></td>
                                        <th class="align-middle font-weight-normal"><?php
                                                                                    $newDate = date("d/m/Y", strtotime($row['data']));
                                                                                    echo $newDate;
                                                                                    ?></th>
                                        <td class="align-middle font-weight-normal">
                                            <div class="d-inline-flex">
                                                <a href="feedbacksAtualizar?id=<?= $row['id'] ?>" class="btn btn-warning mr-2" style="color: #FFF; font-size: 20px"><i class="fas fa-edit"></i></a>
                                                <a href="configs/feedbacksController?id=<?= $row['id'] ?>" class="btn btn-danger" style="color: #FFF; font-size: 20px"><i class="fas fa-trash-alt"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<?php require_once('includesAdmin/footerAdmin.php'); ?>