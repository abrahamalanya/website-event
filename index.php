<?php require 'header.php'; ?>
<!-- Main Wraapper -->
<div class="main_wrapper">
    <!-- Banner Wraapper -->
    <div class="single_section" data-scroll-index='1'>
        <section class="wed_banner_wrapper relative">
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="wed_banner_text fadeInLeft wow"
                                data-wow-delay="200ms"
                                data-wow-duration="1500ms"
                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: fadeInLeft;">
                                <img src="assets/images/title-bg.png" alt="">
                                <h1>El lugar ideal para tus momentos inolvidables</h1>
                                <p>
                                    Descubre espacios versátiles y elegantes perfectos para bodas, cumpleaños,
                                    reuniones corporativas y todo tipo de celebraciones. ¡Haz de tu evento una experiencia única!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wed_bottom_shape"></div>
            </div>
        </section>
    </div>
    <!-- Ring section -->
    <div class="wed_ring_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="wed_ring_boy_img fadeInLeft wow" data-wow-delay="200ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: fadeInLeft;">
                        <img src="assets/img/img1.png" alt="img1">
                        <div class="wed_ring_content">
                            <h3>Un momento para recordar</h3>
                            <h6>Celebra el inicio de una nueva historia en un lugar especial.</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="wed_ring_girl_img fadeInRight wow" data-wow-delay="200ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: fadeInRight;">
                        <img src="assets/img/img2.png" alt="img2">
                        <div class="wed_ring_content">
                            <h3>Tu día, a lo grande</h3>
                            <h6>Disfruta momentos inolvidables rodeado de quienes más quieres.</h6>
                        </div>
                    </div>
                </div>
                <div class="wed_ring_img zoomIn wow"
                    data-wow-delay="200ms"
                    data-wow-duration="1500ms"
                    style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: zoomIn;
                        background-color: #c99d44;">
                    <img src="assets/images/ring.png" alt="ring-img">
                </div>
            </div>
        </div>
    </div>
    <!-- Guest section -->
    <div class="wed_guest_section">
        <div class="wed_guest_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="wed_guest_heading">
                        <h2>Tu evento, nuestro espacio</h2>
                        <img src="assets/images/heading_white.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="wed_guest_infobox slideInUp wow" data-wow-delay="200ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: slideInUp;">
                        <h2>Celebra momentos inolvidables con nosotros</h2>
                        <h4>Reserva tu evento con anticipación</h4>
                        <p>
                            Ofrecemos el espacio perfecto para compromisos,
                            cumpleaños, reuniones y celebraciones especiales.
                            Un lugar elegante, cómodo y totalmente equipado
                            para que cada detalle sea perfecto.
                        </p>
                        <h2><span>Reserva tu fecha</span></h2>
                        <p>
                            Queremos ser parte de tus mejores recuerdos.
                            Contáctanos para conocer disponibilidad, servicios personalizados
                             y todo lo que tenemos para hacer tu evento inolvidable.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="wed_guest_formbox zoomIn wow" data-wow-delay="200ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: zoomIn;">
                        <span>¡Haz tu reserva ahora!</span>
                        <h4>Solicitar información</h4>
                        <div class="wed_guest_form">
                            <form id="formulario">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="wed_form-wrapper">
                                            <label>Nombre Completo :</label>
                                            <input type="text"
                                                id="full_name"
                                                name="full_name"
                                                placeholder="Nombre Completo"
                                                class="require">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="wed_form-wrapper">
                                            <label>Mensaje :</label>
                                            <textarea cols="3"
                                                rows="5"
                                                class="form-control require"
                                                placeholder="Mensaje"
                                                id="message"
                                                name="message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="response"></div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="wd_btn">
                                            <button type="submit"
                                                class="submitForm wed_btn">
                                                Enviar Whatsapp
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Counter Section Start -->
    <?php require 'counter.php'; ?>
    <!-- Gallery Section Start-->
    <div class="single_section" data-scroll-index='4'>
        <section class="wed_gallery_wrapper">
            <!-- <div class="wed_top_shape"></div> -->
            <div class="container">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                    <div class="wed_service_heading wed_gal_heading">
                        <h2>Momentos Inolvidables</h2>
                        <img src="assets/images/heading.png" alt="bottom-img">
                    </div>
                </div>
                <div class="wed_gallery_slides popup_gallery slideInLeft wow" data-wow-delay="200ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: slideInLeft;">
                    <div class="wedingService swiper-container">
                        <div class="swiper-wrapper">
                            <!-- Slide One -->
                            <div class="swiper-slide">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="wed_gallery_section mb_30">
                                            <a href="assets/img/img3.png" title="">
                                                <img src="assets/img/img3.png" alt="img3" />
                                                <div class="wed_galsec_overlay">
                                                    <p>Decoración de Fotos</p>
                                                    <span><i class="fa fa-search" aria-hidden="true"></i></span>    
                                                </div>  
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="wed_gallery_section mb_30">
                                            <a href="assets/img/img4.png" title="">
                                                <img src="assets/img/img4.png" alt="img4" />
                                                <div class="wed_galsec_overlay">
                                                    <p>Decoración de Mesa</p>
                                                    <span><i class="fa fa-search" aria-hidden="true"></i></span>    
                                                </div>  
                                            </a>
                                        </div>
                                        <div class="wed_gallery_section mb_30">
                                            <a href="assets/img/img5.png" title="">
                                                <img src="assets/img/img5.png" alt="img5" />
                                                <div class="wed_galsec_overlay">
                                                    <p>Decoración de Pastel</p>
                                                    <span><i class="fa fa-search" aria-hidden="true"></i></span>    
                                                </div>  
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Slider Dots -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<script>
    document.getElementById("formulario").addEventListener("submit", function(e) {
        e.preventDefault();
        let nombre = document.getElementById("full_name").value;
        let mensaje = document.getElementById("message").value;
        let telefono = "51964237626";
        let texto = `Hola, soy ${nombre}. ${mensaje}`;
        let url = `https://wa.me/${telefono}?text=${encodeURIComponent(texto)}`;
        window.open(url, "_blank");
    });
</script>
<?php require 'footer.php'; ?>
