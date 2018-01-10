<footer class="footer parallax-img" id="footer">
    <div class="outer special">
        <div class="triangeldown"></div>
    </div>
    <div class="container section">

        <?php if(is_front_page()){ ?>
        <div class="row bigger">
            <div class="col s12">
                <div class="nadpis center">
                    <h1 class="white">
                        <span id="annotations_count">1 565 473</span>
                    </h1>
                    <h5 class="future"><?php echo get_option('footer-annotations-delivered-text'); ?></h5>
                    <br/><br/>
                </div>
            </div>
        </div>
        <?php } ?>

        <div class="row white-text">
            <div class="col s12 l4 m4 lef about">
                <div class="preview-box ">
                    <h2 class="">

                        <?php echo get_option('footer-section-1-title'); ?>
                    </h2>
                    <p class="no-margin">
                        <?php echo get_option('footer-section-1-text'); ?>
                    </p>
                    <div class=""><i class="fa fa-map-pin" aria-hidden="true"></i><p><?php echo nl2br(get_option('footer-section-1-address')); ?></p></div>
                    <div><i class="fa fa-phone" aria-hidden="true"></i><p><a href="tel:<?php echo str_replace(" ","", get_option('footer-section-1-phone')); ?>"><?php echo get_option('footer-section-1-phone'); ?></a></p></div>
                    <div class=""><i class="fa fa-envelope" aria-hidden="true"></i><p><a href="mailto:<?php echo get_option('footer-section-1-email'); ?>"><?php echo get_option('footer-section-1-email'); ?></a></p></div>

                </div>
            </div>
            <div class="col s12 l4 m4 cente">
                <div class="preview-box">
                    <h2 class="">
                        <?php echo get_option('footer-section-2-title'); ?>
                    </h2>
                    <p>
                        <?php echo get_option('footer-section-2-text'); ?>
                    </p>
                    <div class="icons-get">
                        <?php  $val = get_option('footer-section-2-linkedin'); if(trim($val)!="") {?><a href="https://www.linkedin.com/<?php echo $val;?>"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a><?php  } ?>
                        <?php  $val = get_option('footer-section-2-faceook'); if(trim($val)!="") {?><a href="https://facebook.com/<?php echo $val;?>"><i class="fa fa-facebook-square" aria-hidden="true"></i></a><?php  } ?>
                        <?php  $val = get_option('footer-section-2-twitter');  if(trim($val)!="") {?><a href="https://twitter.com/<?php echo $val;?>"><i class="fa fa-twitter-square" aria-hidden="true"></i></a><?php  } ?>
                        <?php  $val = get_option('footer-section-2-youtube');  if(trim($val)!="") {?><a href="https://youtube.com/<?php echo $val;?>"><i class="fa fa-youtube-square" aria-hidden="true"></i></a><?php  } ?>
                        <?php  $val = get_option('footer-section-2-googleplus');  if(trim($val)!="") {?><a href="https://plus.google.com/<?php echo $val;?>"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a><?php  } ?>
                        <?php  $val = get_option('footer-section-2-email');  if(trim($val)!="") {?><a href="mailto:<?php echo $val;?>"><i class="fa fa-envelope-square" aria-hidden="true"></i></a><?php  } ?>
                    </div>
                </div>
            </div>
            <div class="col s12 l4 m4 righ">
                <div class="preview-box">
                    <h2 class="">
                        <?php echo get_option('footer-section-3-title'); ?>
                    </h2>
                    <p>
                        <?php echo get_option('footer-section-3-text'); ?>
                    </p>

                </div>
            </div>
        </div>
        <?php if(is_front_page()){ ?>
        <div class="row bigger">
            <div class="col s12">
                <div class="nadpis center">
                    <a href="<?php echo get_bloginfo( 'wpurl' );?>"><img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/logo-white.svg"></a>
                    <h6 class="future"><?php echo get_option('footer-made-in'); ?></h6>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</footer>

<!--  Scripts-->

<script src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/jquery-2.1.1.min.js"></script>
<script src="<?php echo get_bloginfo('template_directory'); ?>/components/materialize/js/materialize.js"></script>
<!-- MasterSlider main JS file -->
<script src="<?php echo get_bloginfo('template_directory'); ?>/components/highlight/highlight.pack.js"></script>

<?php if(is_front_page()){ ?>
  <script  src="<?php echo get_bloginfo('template_directory'); ?>/components/instant-annotator-master/javascript/instantAnnotations.js?<?php echo rand(0,1111);?>"></script>

<?php } ?>



<script src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/init.js?e=<?php echo rand(0,99)?>"></script>
<a href="#" class="back-to-top" style="display: inline;"><i class="fa fa-angle-up"></i></a>
</body>
</html>
