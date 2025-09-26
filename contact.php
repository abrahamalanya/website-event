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
                        <form>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group form-block">
                                        <input type="text" class="form-control require" placeholder="Enter Your Name"
                                            name="full_name" id="full_name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group form-block">
                                        <input type="text" class="form-control require" placeholder="Enter Your Number"
                                            id="number">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group form-block">
                                        <input type="text" class="form-control require" placeholder="Enter Your Email"
                                            name="email" id="email" data-valid="email"
                                            data-error="Email should be valid.">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group form-block">
                                        <input type="text" class="form-control require" placeholder="Subject"
                                            id="subject" name="subject">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group form-block">
                                        <textarea cols="3" rows="5" class="form-control require" placeholder="Message"
                                            id="message" name="message"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <button type="button" class="btn wed_btn submitForm">Submit</button>
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
        <div class="wi_map_wrapper">
            <div class="container-fluid">
                <div class="row">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d117763.55154239164!2d75.79380997633002!3d22.72411583768725!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3962fcad1b410ddb%3A0x96ec4da356240f4!2sIndore%2C%20Madhya%20Pradesh!5e0!3m2!1sen!2sin!4v1634751778862!5m2!1sen!2sin"
                        width="600" height="450" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>
<?php require 'footer.php'; ?>
