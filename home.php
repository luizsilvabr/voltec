<?php require_once("includes/head.php");
require_once("admin/configs/database.php")
?>

<!-- Carrousel -->
<section class="main-slider">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <?php
            $queryCarrousel = "SELECT * FROM carrousel ORDER BY id ASC;";
            $resultCarrousel = mysqli_query($connect, $queryCarrousel);
            $carrouselController = 1;
            $carrouselNumSlide = 1;
            $carrouselNum = mysqli_num_rows($resultCarrousel);
            if ($carrouselNum >= 1) {
                while ($rowCarrousel = mysqli_fetch_array($resultCarrousel)) {
                    if ($carrouselController == 1) { ?>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 0"></button>
                    <?php $carrouselController = 2;
                    } else { ?>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?= $carrouselNumSlide ?>" aria-label="<?= $carrouselNumSlide ?>"></button>
            <?php $carrouselNumSlide++;
                    }
                }
            } ?>
        </div>
        <div class="carousel-inner">
            <div class="image-layer-overlay"></div>
            <?php
            $queryCarrousel = "SELECT * FROM carrousel ORDER BY id ASC;";
            $resultCarrousel = mysqli_query($connect, $queryCarrousel);
            $carrouselController = 1;
            $carrouselNum = mysqli_num_rows($resultCarrousel);
            if ($carrouselNum >= 1) {
                while ($rowCarrousel = mysqli_fetch_array($resultCarrousel)) {
                    if ($carrouselController == 1) { ?>
                        <div class="carousel-item active" data-bs-interval="5000">
                            <img src="assets/databaseImg/carrousel/<?= $rowCarrousel['imgCarrousel'] ?>" class="d-block w-100">
                        </div>
                    <?php $carrouselController = 2;
                    } else { ?>
                        <div class="carousel-item" data-bs-interval="5000">
                            <img src="assets/databaseImg/carrousel/<?= $rowCarrousel['imgCarrousel'] ?>" class="d-block w-100">
                        </div>
            <?php }
                }
            } ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>
<!-- End Carrousel -->

<!-- Partners -->
<section class="brand-one">
    <div class="container">
        <div class="section-title text-center">
            <h2 class="section-title__title text-white">Nossos Parceiros</h2>
        </div>
        <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                    "0": {
                        "spaceBetween": 30,
                        "slidesPerView": 2
                    },
                    "375": {
                        "spaceBetween": 30,
                        "slidesPerView": 2
                    },
                    "575": {
                        "spaceBetween": 30,
                        "slidesPerView": 3
                    },
                    "767": {
                        "spaceBetween": 50,
                        "slidesPerView": 4
                    },
                    "991": {
                        "spaceBetween": 50,
                        "slidesPerView": 5
                    },
                    "1199": {
                        "spaceBetween": 100,
                        "slidesPerView": 6
                    }
                }}'>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="assets/images/brand/brand-1-1.png" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="assets/images/brand/brand-1-2.png" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="assets/images/brand/brand-1-3.png" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="assets/images/brand/brand-1-4.png" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="assets/images/brand/brand-1-5.png" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="assets/images/brand/brand-1-6.png" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="assets/images/brand/brand-1-1.png" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="assets/images/brand/brand-1-2.png" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="assets/images/brand/brand-1-3.png" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="assets/images/brand/brand-1-4.png" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="assets/images/brand/brand-1-5.png" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="assets/images/brand/brand-1-6.png" alt="">
                </div><!-- /.swiper-slide -->
            </div>
        </div>
    </div>
</section>
<!-- End Partners-->

<!-- Features -->
<section class="feature-one">
    <div class="container">
        <div class="feature-one__top">
            <div class="row">
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                    <!--Feature One Single-->
                    <div class="feature-one__single">
                        <div class="feature-one__icon">
                            <i class="fa-solid fa-charging-station"></i>
                        </div>
                        <div class="feature-one__text">
                            <h3>Energia Limpa</h3>
                            <p>Nossos nobreaks que oferecem energia limpa e consistente.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                    <!--Feature One Single-->
                    <div class="feature-one__single">
                        <div class="feature-one__icon">
                            <i class="fa-solid fa-screwdriver-wrench"></i>
                        </div>
                        <div class="feature-one__text">
                            <h3>Manutenção</h3>
                            <p>Conte com a nossa equipe para fazer a manutenção que o seu nobreak precisa.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                    <!--Feature One Single-->
                    <div class="feature-one__single">
                        <div class="feature-one__icon">
                            <i class="fa-solid fa-shield"></i>
                        </div>
                        <div class="feature-one__text">
                            <h3>Segurança</h3>
                            <p>Garantimos segurança para seus eletrônicos com nossos nobreaks</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="feature-one__bottom">
            <div class="row">
                <div class="col-lg-12">
                    <div class="feature-one__bottom-inner">
                        <p>Solução Energética de qualidade você só encontra
                            <a href="servicos">Aqui!</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Features -->

<!-- About -->
<section class="about-one">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="about-one__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                    <div class="about-one__img-box">
                        <div class="about-one__img">
                            <img src="assets/images/resources/about-one-img-1.jpg" alt="">
                        </div>
                        <div class="about-one__small-img">
                            <img src="assets/images/resources/about-one-small-img.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="about-one__right">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">Conheça-nos</span>
                        <h2 class="section-title__title">Somos Voltec</h2>
                    </div>
                    <p class="about-one__text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal</p>
                    <div class="about-one__points-box">
                        <ul class="about-one__points list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="icon-check"></span>
                                </div>
                                <div class="text">
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply </p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-check"></span>
                                </div>
                                <div class="text">
                                    <p>Lorem Ipsum has been the industry's standard</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-check"></span>
                                </div>
                                <div class="text">
                                    <p>The point of using Lorem Ipsum is that</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <a href="about.html" class="about-one__btn thm-btn mt-5">Lorem Ipsum</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About -->

<!-- Services -->
<section class="services-one">
    <div class="container">
        <div class="section-title text-center">
            <span class="section-title__tagline">Serviços de Qualidade</span>
            <h2 class="section-title__title">Conheça nossos Serviços</h2>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms">
                <!--Services One Single-->
                <div class="services-one__single">
                    <div class="services-one__icon">
                        <i class="fa-solid fa-headset"></i>
                    </div>
                    <h3 class="services-one__title">
                        <a href="somosVoltec">Suporte Técnico</a>
                    </h3>
                    <p class="services-one__text">
                        Com a Voltec você tem garantia de serviço técnico de qualidade para não esquentar a cabeça, nem o seu equipamento.<br>
                        Temos a assistência técnica que proporciona a melhor solução para você!
                    </p>
                    <div class="services-one__arrow">
                        <a href="somosVoltec"><span class="icon-right-arrow"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                <!--Services One Single-->
                <div class="services-one__single">
                    <div class="services-one__icon">
                        <i class="fa-solid fa-car-battery"></i>
                    </div>
                    <h3 class="services-one__title">
                        <a href="custom-software.html">Equipamentos de Ultima Geração</a>
                    </h3>
                    <p class="services-one__text">
                        Oferecemos Equipamentos de Ultima Geração Adequados a necessidade da sua empresa, com total Garantia!.
                    </p>
                    <div class="services-one__arrow">
                        <a href="custom-software.html"><span class="icon-right-arrow"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 wow fadeInRight" data-wow-delay="100ms">
                <!--Services One Single-->
                <div class="services-one__single">
                    <div class="services-one__icon">
                        <i class="fa-solid fa-battery-full"></i>
                    </div>
                    <h3 class="services-one__title">
                        <a href="cloud-computing.html">Segurança Energética</a>
                    </h3>
                    <p class="services-one__text">
                        Garantimos a ininterrupção da sua produção se o problema for causado por oscilações na energia, garantindo energia limpa e consistente, evitando danos ao seu maquinário.
                    </p>
                    <div class="services-one__arrow">
                        <a href="cloud-computing.html"><span class="icon-right-arrow"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Services-->

<!--Share The Joy Start-->
<section class="share-the-joy">
    <div class="share-the-joy__inner">
        <div class="share-the-joy-map" style="background-image: url(assets/images/shapes/share-the-joy-map.png)"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-7">
                    <div class="share-the-joy__left">
                        <h2 class="share-the-joy__title">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h2>
                        <a href="#" class="share-the-joy__btn thm-btn">Lorem Ipsum</a>
                        <div class="share-the-joy__shape-1">
                            <img src="assets/images/shapes/share-the-joy-shape-1.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="share-the-joy__right">
                        <div class="share-the-joy__img-box">
                            <div class="share-the-joy__img wow fadeInRight" data-wow-duration="1500ms">
                                <img src="assets/images/resources/share-the-joy-img-1.png" alt="" class="float-bob-2">
                            </div>
                            <div class="share-the-joy__trusted wow fadeIn" data-wow-duration="1500ms">
                                <span class="icon-social-media"></span>
                                <div class="share-the-joy__trusted__content">
                                    <p>Lorem Ipsum</p>
                                    <h3 class="odometer" data-count="8800">00</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Share The Joy End-->

<!-- Products -->
<section class="project-one">
    <div class="container">
        <div class="section-title text-center">
            <span class="section-title__tagline">Conheça nossos Produtos</span>
            <h2 class="section-title__title">Produtos</h2>
        </div>
        <div class="project-one__carousel owl-theme owl-carousel">
            <?php
                $queryProduto = "SELECT * FROM produto ORDER BY id ASC;";
                $result = mysqli_query($connect, $queryProduto);
                while ($rowProduto = mysqli_fetch_array($result)) {
            ?>
            <div class="project-one__single">
                <div class="project-one__img">
                    <img src="assets/databaseImg/produtos/<?= $rowProduto['imgProduto'] ?>">
                </div>
                <div class="project-one__content">
                    <p class="project-one__tagline">Saiba Mais</p>
                    <h2 class="project-one__title"><a href="detalhesProduto?id=<?= $rowProduto['id'] ?>"><?= $rowProduto['nome'] ?></a></h2>
                    <div class="project-one__arrow">
                        <a href="detalhesProduto?id=<?= $rowProduto['id'] ?>"><span class="icon-right-arrow"></span></a>
                    </div>
                </div>
            </div>
            <?php } ?>
            
        </div>
    </div>
</section>
<!-- End Products -->

<!--Improve One Start-->
<section class="improve-one">
    <div class="improve-one-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%" style="background-image: url(assets/images/backgrounds/improve-one-bg.jpg)"></div>
    <div class="improve-one-bg-overly"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="improve-one__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                    <div class="improve-one__img-box">
                        <div class="improve-one__img">
                            <img src="assets/images/resources/improve-one-img-1.jpg" alt="">
                        </div>
                        <div class="improve-one__project-complete">
                            <p>Lorem Ipsum sit Dolor Amet</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="improve-one__right">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">Lorem Ipsum sit</span>
                        <h2 class="section-title__title">Lorem Ipsum sit Dolor Amet the printing</h2>
                    </div>
                    <ul class="list-unstyled improve-one__points">
                        <li>
                            <div class="icon">
                                <span class="icon-artificial-intelligence"></span>
                            </div>
                            <div class="text">
                                <h3>Lorem Ipsum</h3>
                                <p>Scrambled it to make a type specimen, book. It has survived not only five centuries.</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-ai"></span>
                            </div>
                            <div class="text">
                                <h3>Lorem Ipsum</h3>
                                <p>Scrambled it to make a type specimen, book. It has survived not only five centuries.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Improve One End-->

<!-- Feedback -->
<section class="testimonial-one">
    <div id="particles-js"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-5">
                <div class="testimonial-one__left">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">Feedback de Nossos Clientes</span>
                        <h2 class="section-title__title">O que estão falando da Voltec Sistemas</h2>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-7">
                <div class="testimonial-one__right">
                    <div class="testimonial-one__carousel owl-theme owl-carousel">
                        <?php
                        $queryFeedback = "SELECT * FROM feedback ORDER BY id ASC;";
                        $resultFeedback = mysqli_query($connect, $queryFeedback);
                        while ($rowFeedback = mysqli_fetch_array($resultFeedback)) {
                        ?>
                            <div class="testimonial-one__single">

                                <div class="testimonial-one__client-info">
                                    <div class="testimonial-one__client-img">
                                        <img style="width: 77px !important;" src="assets/databaseImg/feedback/<?= $rowFeedback['imgFeedback'] ?>">
                                    </div>
                                    <div class="testimonial-one__client-details">
                                        <h5 class="testimonial-one__client-name"><?= $rowFeedback['nomePessoa'] ?></h5>
                                    </div>
                                </div>
                                <p class="testimonial-one__text"><?= $rowFeedback['testemunho'] ?></p>
                                <div class="testimonial-one__quote">
                                    <span class="icon-right-quote"></span>
                                </div>
                            </div>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Feedback-->

<!-- News -->
<section class="news-one">
    <div class="container">
        <div class="section-title text-center">
            <span class="section-title__tagline">Artigos e Novidades</span>
            <h2 class="section-title__title">Novidades</h2>
        </div>
        <div class="row">
            <?php
                $queryNovidade = "SELECT * FROM novidade ORDER BY id ASC;";
                $result = mysqli_query($connect, $queryNovidade);
                while ($rowNovidade = mysqli_fetch_array($result)) {
            ?>
            <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms">
                <div class="news-one__single">
                    <div class="news-one__img">
                        <img width="370" src="assets/databaseImg/novidades/<?= $rowNovidade['imgNovidade'] ?>" alt="">
                        <a href="novidades?id=<?= $rowNovidade['id'] ?>">
                            <span class="news-one__plus"></span>
                        </a>
                        <div class="news-one__date-box">
                            <p><?php
                                $newDate = date("d/m/Y", strtotime($rowNovidade['data']));
                                echo $newDate;
                             ?></p>
                        </div>
                    </div>
                    <div class="news-one__content">
                        <h3 class="news-one__title">
                            <a href="novidades?id=<?= $rowNovidade['id'] ?>"><?= $rowNovidade['titulo'] ?></a>
                        </h3>
                        <p class="news-one__text"><?php 
                        $descricaoCortada = substr($rowNovidade['descricao'], 0, 70);
                        echo $descricaoCortada."...";
                         ?>
                        </p>
                        <div class="news-one__read-more">
                            <a href="novidades?id=<?= $rowNovidade['id'] ?>" class="news-one__read-more-btn">Saiba Mais</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<!-- End News-->

<?php include("includes/footer.php"); ?>