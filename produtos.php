<?php
require_once("includes/head.php");
require_once("admin/configs/database.php");
?>
<!--Page Header Start-->
<section class="page-header">
    <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
    </div>
    <div class="page-header-bg-overly"></div>
    <div class="page-header-shape wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms" style="background-image: url(assets/images/shapes/page-header-shape.png)"></div>
    <div class="container">
        <div class="page-header__inner">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index.html">Home</a></li>
                <li><span>/</span></li>
                <li>Produtos</li>
            </ul>
            <h2>Produtos</h2>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Projects Page Start-->
<section class="project-two project-page">
    <div class="container">
        <div class="row">
            <div class="section-title text-center">
                <span class="section-title__tagline">Conheça nossos Produtos</span>
                <h2 class="section-title__title">Produtos</h2>
            </div>
            <?php
            $queryProduto = "SELECT * FROM produto ORDER BY id ASC;";
            $result = mysqli_query($connect, $queryProduto);
            while ($rowProduto = mysqli_fetch_array($result)) {
            ?>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="100ms">
                    <div class="project-one_single">

                        <div class="project-one__single">
                            <div class="project-one__img">
                                <img style="width: 500px !important;" src="assets/databaseImg/produtos/<?= $rowProduto['imgProduto'] ?>">
                            </div>
                            <div class="project-one__content">
                                <p class="project-one__tagline">Saiba Mais</p>
                                <h2 class="project-one__title"><a href="detalhesProduto?id=<?= $rowProduto['id'] ?>"><?= $rowProduto['nome'] ?></a></h2>
                                <div class="project-one__arrow">
                                    <a href="detalhesProduto?id=<?= $rowProduto['id'] ?>"><span class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</section>
<!--Projects Page End-->

<?php require_once "includes/footer.php"; ?>