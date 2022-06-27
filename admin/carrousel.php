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
                                <h1 class="m-0"> Área Administrativa <small>- Carrousel</small></h1>
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->
                <hr>
                <form action="configs/carrouselController" method="POST" enctype="multipart/form-data">
                    <div class="form-group row bg-light p-3 rounded">
                        <div class="col-md-6">
                            <label for="imgCarrousel">Escolha uma Imagem para o Carrousel (1894X818)</label><br>
                            <input class="w-100" type="file" required name="imgCarrousel" id="imgCarrousel"><br>
                        </div>
                        <div class="col-md-6 text-center d-flex justify-content-center align-items-center">
                            <button type="submit" name="add" class="btn btn-success px-5">Adicionar</button>
                        </div>
                    </div>
                </form>
                <hr>
                <?php 
                $querySelect = "SELECT * FROM carrousel ORDER BY id;";
                $resultSelect = mysqli_query($connect, $querySelect);
                $resultVerify = mysqli_num_rows($resultSelect);
                if($resultVerify >= 1){ ?>
                <div class="p-4">
                    <table class="table table-responsive table-hover table-striped text-center rounded border">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Imagem</th>
                                <th scope="col">Data</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($row = mysqli_fetch_array($resultSelect)) { ?>
                                <tr>
                                    <th class="align-middle font-weight-normal" scope="row"><?= $row['id'] ?></th>
                                    <td class="align-middle font-weight-normal" style="width: 30%"><img style="width: 30%" class="img-fluid img-thumbnail" src="../assets/databaseImg/carrousel/<?= $row['imgCarrousel'] ?>"></td>
                                    <th class="align-middle font-weight-normal"><?php
                                    $newDate = date("d/m/Y", strtotime($row['data']));
                                    echo $newDate;
                                    ?></th>
                                    <td class="align-middle font-weight-normal">
                                        <div class="d-inline-flex">
                                            <a href="carrouselAtualizar?id=<?= $row['id'] ?>" class="btn btn-warning mr-2" style="color: #FFF; font-size: 20px"><i class="fas fa-edit"></i></a>
                                            <a href="configs/carrouselController?id=<?= $row['id'] ?>" class="btn btn-danger" style="color: #FFF; font-size: 20px"><i class="fas fa-trash-alt"></i></a>
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