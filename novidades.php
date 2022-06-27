<?php 
require_once ('includes/head.php');
require_once('admin/configs/database.php');
if(isset($_GET['id'])){
    $id = mysqli_real_escape_string($connect, $_GET['id']);
    $queryNovidade = "SELECT * FROM novidade WHERE id = '$id'";
    $result = mysqli_query($connect, $queryNovidade);
    $rowNovidade = mysqli_fetch_assoc($result);
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
                        <li>Novidades</li>
                    </ul>
                    <h2>Novidades</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--News Details Start-->

        <section class="news-details">
            <div class="container">
                <hr>
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="news-details__left">
                            <div class="news-details__img">
                                <img src="assets/databaseImg/novidades/<?= $rowNovidade['imgNovidade']?>">
                                <div class="news-details__date-box">
                                    <p><?php 
                                    $newDate = date("d/m/Y", strtotime($rowNovidade['data']));
                                    echo $newDate;?></p>
                                </div>
                            </div>
                            <div class="news-details__content">
                                <h3 class="news-details__title"><?= $rowNovidade['titulo']?></h3>
                                <p class="news-details__text-1">
                                <?= $rowNovidade['descricao']?>
                                </p>
                            </div>
                        
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </section>
        <!--News Details End-->
<?php require_once "includes/footer.php";?>
