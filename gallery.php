<?php require 'header.php'; ?>
<?php
    $title = 'Nuestro Local';
    require 'wrapper.php';
?>
    <!-- Gallery Section -->
    <div class="wi_gallery_section popup_gallery zoomIn wow" data-wow-delay="200ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: zoomIn;">
        <div class="container">
            <div class="row">
                <?php
                    $folder = 'assets/img/gallery/';
                    $images = glob($folder . '*.jpeg');
                    foreach ($images as $image) {
                    ?>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                            <div class="wed_gallery_section mb_30"
                                style="
                                    width: 100%;
                                    height: 400px;
                                    position: relative;
                                    background-image: url(<?php echo $image; ?>);
                                    background-repeat: no-repeat;
                                    background-size: cover;">
                                <a href="<?php echo $image; ?>" title="">
                                    <div class="wed_galsec_overlay">
                                        <p>Yoau Eventos</p>
                                        <span><i class="fa fa-search" aria-hidden="true"></i></span>
                                    </div>  
                                </a>
                            </div>
                        </div>
                    <?php
                    }
                ?>
            </div>
        </div>
   </div>
<?php require 'footer.php'; ?>
