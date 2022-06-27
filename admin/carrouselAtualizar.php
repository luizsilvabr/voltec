<?php require_once('includesAdmin/headAdmin.php');
require_once('configs/database.php');
$id = $_GET['id'];
$query = "SELECT * FROM carrousel WHERE id = '$id';";
$result = mysqli_query($connect, $query);
$row = mysqli_fetch_assoc($result);
?>
<div class="content-wrapper">

    <!-- Main content -->
    <div class="content">
        <div class="container">
            <div class="card w-100 p-4 mt-5">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container">
                        <div class="row mb-2">
                            <div class="col-sm-12 text-center">
                                <h1 class="m-0"> Área Administrativa <small>- Atualizar Carrousel</small></h1>
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->
                <hr>
                <form action="configs/carrouselController" method="POST" enctype="multipart/form-data">
                    <div class="form-group row bg-light p-3 rounded">
                        <div class="col-md-6">
                            <input type="hidden" name="id" value="<?= $id ?>">
                            <label for="imgCarrousel">Escolha uma Imagem para Atualizar o Carrousel (1894X818)</label>
                            <input class="w-100" type="file" required name="imgCarrousel" id="imgCarrousel"><br>
                        </div>
                        <div class="col-md-6 text-center d-flex justify-content-center align-items-center">
                            <button type="submit" name="update" class="btn btn-success px-4">Atualizar</button>
                        </div>
                    </div>
                </form>
                <hr>
                <div class="text-center">
                    <img style="width: 30%" class="img-fluid img-thumbnail" src="../assets/databaseImg/carrousel/<?= $row['imgCarrousel'] ?>"></td>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once('includesAdmin/footerAdmin.php'); ?>