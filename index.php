<!DOCTYPE html>
<html lang="zxx">

<?php
include 'template/head.php';
?>

<body>

    <!-- Nav inicio -->
    <?php
    include 'template/nav.php';
    ?>
    <!-- Nac End -->


    <style>
        .sede-img {
            width: 140px;
            height: 140px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid #fdbb2d;
            margin-bottom: 20px;
            transition: .3s;
            box-shadow: 0 0 20px rgba(253, 187, 45, .4);
        }

        .sede-img:hover {
            transform: scale(1.05);
        }

        .cs-item {
            text-align: center;
        }

        .cs-item h4 {
            color: #ffffff !important;
            font-size: 22px;
            font-weight: 700;
            margin-top: 15px;
        }

        .cs-item p {
            color: #cfcfcf !important;
        }

        .cs-item {
            text-align: center;
        }

        .sede-img {
            width: 170px;
            height: 170px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid #f5b11f;
            box-shadow: 0 0 25px rgba(245, 177, 31, 0.8);
            margin-bottom: 20px;
        }
    </style>
    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="hs-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="img/hero/jhon3.png">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-6">
                            <div class="hi-text">
                                <span>Más de 21,000 personas ya entrenan con nosotros</span>
                                <h1>TRANSFORMA TU CUERPO EN <strong>EUFORIA GYM</strong></h1> <a href="https://wa.me/51982814717" class="primary-btn"> Solicitar Información </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hs-item set-bg" data-setbg="img/hero/jhon2.png">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-6">
                            <div class="hi-text">
                                <span>Acceso a nuestras 4 sedes con una sola membresía</span>
                                <h1>ENTRENA SIN LÍMITES Y <strong>ALCANZA TUS METAS</strong></h1> <a href="https://wa.me/51982814717" class="primary-btn"> Únete Hoy </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- ChoseUs Section Begin -->
    <section class="choseus-section spad">
        <div class="container">

            <!-- Nuestras Sedes -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Nuestras Sedes</span>
                        <h2>ENTRENA DONDE TE QUEDE MÁS CERCA</h2>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="cs-item text-center">
                        <img src="img/sedes/porvenir.png" alt="Sede El Porvenir" class="sede-img">
                        <h4>📍 El Porvenir</h4>
                        <p>
                            Av. Buenos Aires S-16<br>
                            Frente a la Posta El Carmen
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="cs-item text-center">
                        <img src="img/sedes/centro.png" alt="Sede Centro" class="sede-img">
                        <h4>📍 Centro</h4>
                        <p>
                            Av. Manuel Ruiz 455 - 2do Piso<br>
                            Frente al Mercado Modelo
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="cs-item text-center">
                        <img src="img/sedes/ovalo.png" alt="Sede Óvalo" class="sede-img">
                        <h4>📍 Óvalo</h4>
                        <p>
                            Urb. Casuarinas A11 II Etapa<br>
                            Frente al Parque del Amor
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="cs-item text-center">
                        <img src="img/sedes/marina.png" alt="Sede La Marina" class="sede-img">
                        <h4>📍 La Marina</h4>
                        <p>
                            Av. La Marina K3-12<br>
                            Frente a Real Plaza
                        </p>
                    </div>
                </div>

            </div>

            <!-- Beneficios -->
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>¿Por qué elegir Euforia Gym?</span>
                        <h2>TRANSFORMA TU CUERPO Y SUPERA TUS LÍMITES</h2>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span class="flaticon-002-dumbell"></span>
                        <h4>Equipamiento Moderno</h4>
                        <p>
                            Entrena con máquinas de última generación diseñadas para mejorar tu fuerza, resistencia y rendimiento físico.
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span class="flaticon-033-juice"></span>
                        <h4>Zona Funcional & Combat</h4>
                        <p>
                            Disfruta de espacios especializados para entrenamiento funcional, acondicionamiento físico y disciplinas de combate.
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span class="flaticon-014-heart-beat"></span>
                        <h4>Clases Grupales</h4>
                        <p>
                            Participa en clases de baile, cardio y actividades grupales que harán tus entrenamientos más motivadores.
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span class="flaticon-033-juice"></span>
                        <h4>Experiencia Premium</h4>
                        <p>
                            Disfruta de beneficios exclusivos como Xbox, Step, sillones masajeadores e instructores capacitados en cada sede.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- ChoseUs Section End -->

    <!-- Clases  Begin -->
    <?php
    include 'template/clases.php';
    ?>
    <!-- Clases Section End -->

    <!-- Banner Section Begin -->
    <section class="banner-section set-bg" data-setbg="img/banner-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="bs-text">
                        <h2>TU MEJOR VERSIÓN EMPIEZA HOY</h2>
                        <div class="bt-tips">
                            Spinning • Zumba • Funcional • Musculación
                        </div>
                        <a href="https://wa.me/51982814717?text=Hola,%20quiero%20información%20sobre%20las%20membresías%20del%20gimnasio"
                            class="primary-btn btn-normal"
                            target="_blank">
                            INSCRÍBETE AHORA
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->

    <!-- Pricing Section Begin -->
    <?php
    include 'template/precio.php';
    ?>
    <!-- Pricing Section End -->

    <!-- Gallery Section Begin -->
    <div class="gallery-section">
        <div class="gallery">
            <div class="grid-sizer"></div>
            <div class="gs-item grid-wide set-bg" data-setbg="img/gallery/local1.png">
                <a href="img/gallery/local1.png" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
            </div>
            <div class="gs-item set-bg" data-setbg="img/gallery/local6.png">
                <a href="img/gallery/local6.png" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
            </div>
            <div class="gs-item set-bg" data-setbg="img/gallery/local3.png">
                <a href="img/gallery/local3.png" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
            </div>
            <div class="gs-item set-bg" data-setbg="img/gallery/local2.png">
                <a href="img/gallery/local2.png" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
            </div>
            <div class="gs-item set-bg" data-setbg="img/gallery/local5.png">
                <a href="img/gallery/local5.png" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
            </div>
            <div class="gs-item grid-wide set-bg" data-setbg="img/gallery/local4.png">
                <a href="img/gallery/local4.png" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
            </div>
        </div>
    </div>
    <!-- Gallery Section End -->

    <!-- Team  Begin -->
    <?php
    include 'template/team.php';
    ?>
    <!-- Team  End -->


    <!-- Footer Section Begin -->
    <?php
    include 'template/footer.php';
    ?>
    <!-- Footer Section End -->



    <!-- Js Plugins -->
    <?php
    include 'template/script.php';
    ?>
    <!-- Nac End -->



</body>

</html>