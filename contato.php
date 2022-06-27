<?php include("includes/head.php"); ?>

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
                        <li>Contato</li>
                    </ul>
                    <h2>Contato</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Contact Page Start-->
        <section class="contact-page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4">
                        <div class="contact-page__left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Fale Conosco</span>
                                <h2 class="section-title__title">Escreva uma Mensagem para Nossa Empresa</h2>
                            </div>
                            <p class="contact-page__text">
                                Entre em contato com um de nossos consultores para saber mais sobre essas e outras soluções em energia ininterrupta para o seu negócio.
                            </p>
                            <div class="contact-page__social-list">
                                <a href="https://www.facebook.com/voltecsistemasdeenergia/" target="_blank"><i class="fab fa-facebook"></i></a>
                                <a href="https://www.instagram.com/voltecsistemasdeenergia/" target="_blank"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8">
                        <div class="contact-page__right">
                            <form action="admin/configs/sendMail.php" method="POST">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="text" placeholder="Nome Completo" name="name">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="email" placeholder="Endereço de Email" name="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="comment-form__input-box">
                                            <textarea name="message" placeholder="Digite sua Mensagem"></textarea>
                                        </div>
                                        <button type="submit" name="enviarEmail" class="thm-btn comment-form__btn">Enviar Mensagem</button>
                                    </div>
                                </div>
                            </form>
                            <div class="result"></div><!-- /.result -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact Page End-->

        <!--Contact Details End-->
        <section class="contact-details">
            <div class="container">
                <div class="contact-details__inner">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4">
                            <div class="contact-details__single">
                                <div class="contact-details__icon">
                                    <span class="icon-map"></span>
                                </div>
                                <div class="contact-details__content">
                                    <p class="contact-details__sub-title">Visite Nossa Loja</p>
                                    <h5><small>Av. Orígenes Lessa, 99 - Lençóis Paulista</small></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <div class="contact-details__single contact-details__single-2">
                                <div class="contact-details__icon">
                                    <span class="icon-email-1"></span>
                                </div>
                                <div class="contact-details__content">
                                    <p class="contact-details__sub-title">Email de Vendas</p>
                                    <h4><a href="mailto:vendas@voltecsistemas.com.br"><small>vendas@voltecsistemas.com.br</small></a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <div class="contact-details__single contact-details__single-3">
                                <div class="contact-details__icon">
                                    <span class="icon-phone-call"></span>
                                </div>
                                <div class="contact-details__content">
                                    <p class="contact-details__sub-title">Ligue Para Nós</p>
                                    <h4><a href="tel:1499644-1333"><small>(14) 99644-1333</small></a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact Details End-->
<?php include("includes/footer.php"); ?>