<?php
/**
 * Created by PhpStorm.
 * User: Sumit Shrestha
 * Date: 1/9/2018
 * Time: 1:51 PM
 */
include "include/commonHeader.php"?>

    <section id="gallery" class="home-section color-dark text-center bg-white">
        <div class="container marginbot-50">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
                        <div class="section-heading text-center">
                            <h2 class="h-bold">Gallery</h2>
                            <div class="divider-header"></div>
                            <!--<p>Lorem ipsum dolor sit amet, agam perfecto sensibus usu at duo ut iriure.</p>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="wow bounceInUp" data-wow-delay="0.4s">
                        <div class="row">
                            <?php
                            $i = 1;
                            for($i=1; $i<=40;$i++){?>
                                <div class="col-md-3 pad">
                                    <a href="img/2017/<?php echo $i; ?>.jpg" target="_blank" title="Job Fair" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/1@2x.jpg">
                                        <img src="img/2017/<?php echo $i; ?>.jpg" class="img-responsive fixedImageGallery" alt="Job Fair"/>
                                    </a>
                                </div>
                            <?php    } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include "include/footer.php"?>