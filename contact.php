<?php require 'header.php'; ?>
<?php
    $title = 'Contáctanos';
    require 'wrapper.php';
?>
    <!-- contact single page -->
    <div class="wi_contact_info">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="wi_con_box_wrapper flipInX wow" data-wow-delay="200ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: flipInX;">
                        <div class="wi_con_box_icon">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </div>
                        <div class="wi_con_box_text">
                            <h3>Contacto :</h3>
                            <a href="tel:+">964 215 549 , </a>
                            <a href="tel:+">964 237 626</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="wi_con_box_wrapper flipInX wow" data-wow-delay="200ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: flipInX;">
                        <div class="wi_con_box_icon">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        </div>
                        <div class="wi_con_box_text">
                            <h3>Correo :</h3>
                            <a href="javascript:;"><span class="__cf_email__" data-cfemail="60090e060f200518010d100c054e030f0d">ventas@joaneventos.com</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 offset-md-3">
                    <div class="wi_con_box_wrapper flipInX wow" data-wow-delay="200ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: flipInX;">
                        <div class="wi_con_box_icon">
                            <i class="fa fa-street-view" aria-hidden="true"></i>
                        </div>
                        <div class="wi_con_box_text">
                            <h3>Dirección :</h3>
                            <p>Calle lima 796 San Jerónimo de Tunan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wi_con_form_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="wi_contact_form zoomIn wow" data-wow-delay="200ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: zoomIn;">
                        <div class="wi_con_form_head">
                            <h5>Envíanos un mensaje</h5>
                            <img src="assets/images/heading_white.png" alt="">
                        </div>
                        <form id="formulario">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group form-block">
                                        <input type="text" class="form-control require" placeholder="Nombre Completo"
                                            name="full_name" id="full_name">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group form-block">
                                        <textarea cols="3" rows="5" class="form-control require" placeholder="Mensaje"
                                            id="message" name="message"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="btn wed_btn submitForm">Enviar Whatsapp</button>
                                    <div class="response"></div>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="wi_map_wrapper" style="top: 170px; height: 630px;">
            <div class="container-fluid">
                <div class="row">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d580.2384868815758!2d-75.2827170680841!3d-11.949301145002574!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x910eb9320aef6f81%3A0x5cd55a40b7fab91c!2sPlaza%20De%20Armas%20de%20San%20Jer%C3%B3nimo!5e0!3m2!1sen!2spe!4v1758944552676!5m2!1sen!2spe"
                        width="600"
                        height="450"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
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
