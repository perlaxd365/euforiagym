<?php
$current_page = basename($_SERVER['PHP_SELF']);

function active($pages)
{
    global $current_page;

    if (is_array($pages)) {
        return in_array($current_page, $pages) ? 'active' : '';
    }

    return ($current_page == $pages) ? 'active' : '';
}
?>

<!-- Preloader -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Offcanvas Menu Section Begin -->
<div class="offcanvas-menu-overlay"></div>
<div class="offcanvas-menu-wrapper">
    <div class="canvas-close">
        <i class="fa fa-close"></i>
    </div>

    <div class="canvas-search search-switch">
        <i class="fa fa-search"></i>
    </div>

    <nav class="canvas-menu mobile-menu">
        <ul>
            <li class="<?= active('index.php') ?>">
                <a href="./index.php">Inicio</a>
            </li>

            <li class="<?= active(['class-details.php']) ?>">
                <a href="./class-details.php">Clases</a>
            </li>

            <li class="<?= active('services.php') ?>">
                <a href="./services.php">Servicios</a>
            </li>

            <li class="<?= active('team.php') ?>">
                <a href="./team.php">Nuestro Equipo</a>
            </li>

            <li class="<?= active([
                            'about-us.php',
                            'class-timetable.php',
                            'bmi-calculator.php',
                            'gallery.php',
                            'blog.php'
                        ]) ?>">
                <a href="#">Páginas</a>
                <ul class="dropdown">
                    <li><a href="./about-us.php">About us</a></li>
                    <li><a href="./class-timetable.php">Classes timetable</a></li>
                    <li><a href="./bmi-calculator.php">BMI calculate</a></li>
                    <li><a href="./team.php">Our team</a></li>
                    <li><a href="./gallery.php">Gallery</a></li>
                    <li><a href="./blog.php">Our blog</a></li>
                    <li><a href="./404.php">404</a></li>
                </ul>
            </li>

            <li class="<?= active('contact.php') ?>">
                <a href="./contact.php">Contacto</a>
            </li>
        </ul>
    </nav>

    <div id="mobile-menu-wrap"></div>

    <div class="canvas-social">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-youtube-play"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
    </div>
</div>
<!-- Offcanvas Menu Section End -->


<!-- Header Section Begin -->
<header class="header-section">
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-3">
                <div class="logo">
                    <a href="./index.php">
                        <img src="img/logo.png" alt="Logo">
                    </a>
                </div>
            </div>

            <div class="col-lg-6">
                <nav class="nav-menu">
                    <ul>

                        <li class="<?= active('index.php') ?>">
                            <a href="./index.php">Inicio</a>
                        </li>

                        <li class="<?= active(['class-details.php']) ?>">
                            <a href="./class-details.php">Clases</a>
                        </li>

                        <li class="<?= active('services.php') ?>">
                            <a href="./services.php">Servicios</a>
                        </li>

                        <li class="<?= active('team.php') ?>">
                            <a href="./team.php">Nuestro Equipo</a>
                        </li>

                        <li class="<?= active([
                                        'about-us.php',
                                        'class-timetable.php',
                                        'bmi-calculator.php',
                                        'gallery.php',
                                        'blog.php'
                                    ]) ?>">
                            <a href="#">Páginas</a>
                            <ul class="dropdown">
                                <li><a href="./about-us.php">About us</a></li>
                                <li><a href="./class-timetable.php">Classes timetable</a></li>
                                <li><a href="./bmi-calculator.php">BMI calculate</a></li>
                                <li><a href="./team.php">Our team</a></li>
                                <li><a href="./gallery.php">Gallery</a></li>
                                <li><a href="./blog.php">Our blog</a></li>
                                <li><a href="./404.php">404</a></li>
                            </ul>
                        </li>

                        <li class="<?= active('contact.php') ?>">
                            <a href="./contact.php">Contacto</a>
                        </li>

                    </ul>
                </nav>
            </div>

            <div class="col-lg-3">
                <div class="top-option">
                    <div class="to-search search-switch">
                        <i class="fa fa-search"></i>
                    </div>

                    <div class="to-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>

        </div>

        <div class="canvas-open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>
<!-- Header End -->