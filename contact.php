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

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">
                        <h2>Contáctanos</h2>
                        <div class="bt-option">
                            <a href="./index.html">Inicio</a>
                            <span>Contáctanos</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">

                <!-- Información -->
                <div class="col-lg-6">
                    <div class="section-title contact-title">
                        <span>Euforia Gym</span>
                        <h2>Ponte en Contacto</h2>
                    </div>

                    <div class="contact-widget">

                        <div class="cw-text">
                            <i class="fa fa-map-marker"></i>
                            <p>
                                <strong>Sede Chimbote</strong><br>
                                Av. Manuel Ruiz<br>
                                El Porvenir S-16
                            </p>
                        </div>

                        <div class="cw-text">
                            <i class="fa fa-map-marker"></i>
                            <p>
                                <strong>Sede Nuevo Chimbote</strong><br>
                                Av. La Marina<br>
                                Óvalo La Familia
                            </p>
                        </div>

                        <div class="cw-text">
                            <i class="fa fa-mobile"></i>
                            <ul>
                                <li>+51 982 814 717</li>
                            </ul>
                        </div>

                        <div class="cw-text email">
                            <i class="fa fa-envelope"></i>
                            <p>euforiagym@hotmail.com</p>
                        </div>

                    </div>
                </div>

                <!-- Formulario -->
                <div class="col-lg-6">
                    <div class="leave-comment">
                        <form action="#">
                            <input type="text" placeholder="Nombre Completo">
                            <input type="email" placeholder="Correo Electrónico">
                            <input type="text" placeholder="Teléfono">
                            <textarea placeholder="Escribe tu consulta aquí..."></textarea>
                            <button type="submit">Enviar Mensaje</button>
                        </form>
                    </div>
                </div>

            </div>
            <div class="map mt-5">
                <iframe
                    src="https://maps.google.com/maps?q=Euforia%20Gym%20Sede%20La%20Marina%20Nuevo%20Chimbote&z=16&output=embed"
                    height="550"
                    style="border:0; width:100%;"
                    allowfullscreen=""
                    loading="lazy">
                </iframe>
            </div>

            <!-- Mapa -->
            <div class="cw-text">
                <i class="fa fa-map-marker"></i>
                <p>
                    <strong>Sede Nuevo Chimbote</strong><br>
                    Av. La Marina<br>
                    Óvalo La Familia
                </p>

                <a href="https://maps.google.com/?q=VFF8+7X+Nuevo+Chimbote"
                    target="_blank"
                    class="primary-btn mt-3">
                    Cómo llegar
                </a>
            </div>

        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Footer Section Begin -->
    <?php
    include 'template/footer.php';
    ?>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <!-- Js Plugins -->
    <?php
    include 'template/script.php';
    ?>
    <!-- Nac End -->



</body>

</html>