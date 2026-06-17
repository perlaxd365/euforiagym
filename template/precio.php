<style>
    .active-item {
        transform: scale(1.08);
        border: 3px solid #fdbb2d;
        box-shadow: 0 0 35px rgba(253, 187, 45, .5);
        position: relative;
        z-index: 2;
    }

    .active-item .pi-price h2 {
        color: #fdbb2d;
        font-size: 60px;
    }

    .active-item .pricing-btn {
        background: #fdbb2d;
        color: #000;
        font-weight: 700;
    }

    .ps-item {
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .ps-item ul {
        flex-grow: 1;
    }

    .active-item {
        transform: scale(1.05);
        border: 3px solid #fdbb2d;
        box-shadow: 0 0 30px rgba(253, 187, 45, .4);
    }

    .popular-tag {
        background: #fdbb2d;
        color: #000;
        font-weight: 700;
        padding: 8px;
        margin: -40px -40px 20px -40px;
        text-align: center;
    }

    .ps-item h3 {
        font-size: 32px;
        font-weight: 900;
        letter-spacing: 3px;
        text-transform: uppercase;
        color: #ffffff;
    }

    .pi-price h2 {
        font-size: 64px;
        font-weight: 900;
        color: #fdbb2d;
        text-shadow: 0 0 15px rgba(253, 187, 45, .35);
    }

    .pi-price span {
        font-size: 14px;
        letter-spacing: 2px;
        text-transform: uppercase;
        font-weight: 700;
    }

    .ps-item ul li {
        font-size: 15px;
        font-weight: 600;
        letter-spacing: .5px;
    }

    .popular-tag {
        background: #fdbb2d;
        color: #000;
        font-size: 14px;
        font-weight: 900;
        letter-spacing: 2px;
        text-transform: uppercase;
        padding: 10px;
        text-align: center;
    }

    .active-item {
        transform: scale(1.08);
        border: 3px solid #fdbb2d;
        box-shadow: 0 0 40px rgba(253, 187, 45, .35);
    }
</style>
<section class="pricing-section service-pricing spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>Nuestros Planes</span>
                    <h2>ELIGE TU MEMBRESÍA</h2>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">

            <!-- PLAN BASICO -->
            <div class="col-lg-4 col-md-8">
                <div class="ps-item">
                    <h3>STARTER</h3>

                    <div class="pi-price">
                        <h2>S/ 59</h2>
                        <span>POR MES</span>
                    </div>

                    <ul>
                        <li>✔ Acceso al gimnasio</li>
                        <li>✔ Horario libre</li>
                        <li>✔ Zona de musculación</li>
                        <li>✔ Evaluación inicial</li>
                        <li>✔ Rutina personalizada</li>
                        <li>✔ Asesoría básica</li>
                        <li>✔ 1 sede disponible</li>
                        <li>✔ Soporte presencial</li>
                    </ul>

                    <a href="https://wa.me/51982814717"
                        target="_blank"
                        class="primary-btn pricing-btn">
                        COMENZAR
                    </a>
                </div>
            </div>

            <!-- PLAN PLUS -->
            <div class="col-lg-4 col-md-8">
                <div class="ps-item">
                    <h3>POWER</h3>

                    <div class="pi-price">
                        <h2>S/ 99</h2>
                        <span>POR MES</span>
                    </div>

                    <ul>
                        <li>✔ Acceso ilimitado</li>
                        <li>✔ Clases de Spinning</li>
                        <li>✔ Clases de Zumba</li>
                        <li>✔ Entrenamiento funcional</li>
                        <li>✔ Rutina personalizada</li>
                        <li>✔ Seguimiento mensual</li>
                        <li>✔ Todas las sedes</li>
                        <li>✔ Acceso prioritario</li>
                    </ul>

                    <a href="https://wa.me/51982814717"
                        target="_blank"
                        class="primary-btn pricing-btn">
                        QUIERO POWER
                    </a>
                </div>
            </div>

            <!-- PLAN PREMIUM -->
            <div class="col-lg-4 col-md-8">
                <div class="ps-item active-item">

                    <div class="popular-tag">
                        🔥 MEJOR OFERTA
                    </div>

                    <h3>ELITE FIN DE AÑO</h3>

                    <div class="pi-price">
                        <h2>S/ 380</h2>
                        <span>PAGO ÚNICO</span>
                    </div>

                    <ul>
                        <li>✔ Entrena hasta fin de año</li>
                        <li>✔ Acceso libre e ilimitado</li>
                        <li>✔ Todas las sedes</li>
                        <li>✔ Spinning ilimitado</li>
                        <li>✔ Zumba ilimitada</li>
                        <li>✔ Funcional ilimitado</li>
                        <li>✔ Rutina VIP personalizada</li>
                        <li>✔ Atención preferencial</li>
                    </ul>

                    <a href="https://wa.me/51982814717?text=Hola,%20quiero%20el%20Plan%20Elite%20Fin%20de%20Año"
                        target="_blank"
                        class="primary-btn pricing-btn">
                        🔥 QUIERO SER ELITE
                    </a>

                </div>
            </div>

        </div>
    </div>
</section>