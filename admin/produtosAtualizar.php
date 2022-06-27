<?php require_once('includesAdmin/headAdmin.php');
$id = $_GET['id'];
$querySelect = "SELECT * FROM produto WHERE id = '$id';";
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
                                <h1 class="m-0">Área Administrativa <small>- Atualizar Produto</small></h1>
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->
                <hr>
                <form action="configs/produtosController" method="POST" enctype="multipart/form-data">
                    <div class="row p-3">
                        <input type="hidden" name="id" value="<?= $row['id'] ?>">
                        <div class="col-md-12 form-group">
                            <label for="nome" class="form-label">Nome do Produto:</label>
                            <input name="nome" type="text" placeholder="insira o nome..." value="<?= $row['nome'] ?>" class="form-control" id="nome" aria-describedby="nome">
                            <small id="nome" class="form-text">Digite o nome do Produto.</small>
                        </div>
                        <div class="col-md-12 form-group ">
                            <label for="descricao" class="form-label">Descrição:</label>
                            <textarea name="descricao" required class="form-control summernote" placeholder="Digite a descrição..." id="descricao"><?= $row['descricao'] ?></textarea>
                            <small id="descricao" class="form-text">Informe a Descrição do Produto.</small>
                        </div>
                        <div class="col-md-6 bg-light p-4 rounded">
                            <label for="imgProduto">Escolha a Imagem do Produto (1170X943)</label><br>
                            <input class="w-100" type="file" required name="imgProduto" id="imgProduto"><br>
                        </div>
                        <div class="col-md-6 bg-light p-4 rounded text-center">
                        <img style="width: 30%" src="../assets/databaseImg/produtos/<?= $row['imgProduto'] ?>" width="200">
                        </div>
                        <div class="col-md-12 text-center d-flex justify-content-center align-items-center mt-4">
                            <button type="submit" name="update" class="btn btn-success px-5">Atualizar</button>
                        </div>
                    </div>
                </form>
                <hr>
            </div>
        </div>
    </div>
</div>
<?php require_once('includesAdmin/footerAdmin.php'); ?>