<?php require_once('includesAdmin/headAdmin.php');
$id = $_GET['id'];
$querySelect = "SELECT * FROM feedback WHERE id = '$id';";
$resultSelect = mysqli_query($connect, $querySelect);
$row = mysqli_fetch_array($resultSelect)
?>
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
                                <h1 class="m-0">Área Administrativa <small>- Atualizar Feedback</small></h1>
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->
                <hr>
                <form action="configs/feedbacksController" method="POST" enctype="multipart/form-data">
                    <div class="row p-3">
                        <input type="hidden" name="id" value="<?= $row['id']?>">
                        <div class="col-md-12 form-group">
                            <label for="nomePessoa" class="form-label">Nome da Pessoa:</label>
                            <input name="nomePessoa" type="text"  placeholder="Insira o nome..." value="<?= $row['nomePessoa'] ?>" class="form-control" id="nomePessoa" aria-describedby="nomePessoa">
                            <small id="nomePessoa" class="form-text">Insira o nome da Pessoa.</small>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="testemunho" class="form-label">Testemunho:</label>
                            <textarea name="testemunho" class="form-control summernote" placeholder="Insira o testemunho..." id="testemunho"><?= $row['testemunho'] ?></textarea>
                            <small id="testemunho" class="form-text">Informe o Testemunho.</small>
                        </div>
                        <div class="col-md-6 bg-light p-4 rounded">
                            <label for="imgFeedback">Escolha uma Imagem para a Pessoa (77X77)</label><br>
                            <input class="w-100" type="file" required name="imgFeedback" id="imgfeedback"><br>
                        </div>
                        <div class="col-md-6 bg-light p-4 rounded text-center">
                        <img style="width: 30%" src="../assets/databaseImg/feedback/<?= $row['imgFeedback'] ?>" width="200">
                        </div>
                        <div class="col-md-12 text-center"><button type="submit" name="update" class="btn btn-success mt-4 px-4">Atualizar</button></div>
                    </div>
                </form>
                <hr>
            </div>
        </div>
    </div>
</div>
<?php require_once('includesAdmin/footerAdmin.php'); ?>