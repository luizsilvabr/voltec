<?php
require_once('includes/head.php');
require_once('admin/configs/database.php');
if(isset($_GET['id'])){
    $id = mysqli_real_escape_string($connect, $_GET['id']);
    $queryProduto = "SELECT * FROM produto WHERE id = '$id'";
    $result = mysqli_query($connect, $queryProduto);
    $rowProduto = mysqli_fetch_assoc($result);
}else{
    header("Location: home");
    exit();
}
?>
        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
            </div>
            <div class="page-header-bg-overly"></div>
            <div class="page-header-shape wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms"
                style="background-image: url(assets/images/shapes/page-header-shape.png)"></div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.html">Home</a></li>
                        <li><span>/</span></li>
                        <li>Produtos</li>
                    </ul>
                    <h2>Detalhes do Produto</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Project Details Start-->
        <section class="project-details">
            <div class="container">
                <hr>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="project-details__img-box">
                            <img src="assets/databaseImg/produtos/<?= $rowProduto['imgProduto'] ?>" alt="">
                        </div>
                        <div class="project-details__content">
                            <h2 class="project-details__title"><?= $rowProduto['nome'] ?></h2>
                            <div class="project-details__text-1">
                            <?= $rowProduto['descricao'] ?>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
        </section>
        <!--Project Details End-->

<?php require_once('includes/footer.php'); ?>
