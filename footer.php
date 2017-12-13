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
                        <a href="https://www.linkedin.com/company/15077267"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                        <?php  $val = get_option('footer-section-2-twitter'); if($val!="") {?><a href="https://facebook.com/<?php $val;?>"><i class="fa fa-facebook-square" aria-hidden="true"></i></a><?php  } ?>
                        <?php  $val = get_option('footer-section-2-facebook');  if($val!="") {?><a href="https://twitter.com/<?php $val;?>"><i class="fa fa-twitter-square" aria-hidden="true"></i></a><?php  } ?>
                        <?php  $val = get_option('footer-section-2-youtube');  if($val!="") {?><a href="https://youtube.com/<?php $val;?>"><i class="fa fa-youtube-square" aria-hidden="true"></i></a><?php  } ?>
                        <?php  $val = get_option('footer-section-2-googleplus');  if($val!="") {?><a href="https://plus.google.com/<?php $val;?>"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a><?php  } ?>
                        <?php  $val = get_option('footer-section-2-email');  if($val!="") {?><a href="mailto:<?php $val;?>"><i class="fa fa-envelope-square" aria-hidden="true"></i></a><?php  } ?>
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
    <!-- Scripts -->
    <!-- Bootstrap Script -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
    <!-- Bootstrap Material Design Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.5.9/js/ripples.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.5.9/js/material.min.js"></script>
    <!-- Snackbar-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/snackbarjs/1.1.0/snackbar.min.js"></script>
    <!-- clipboard -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.7.1/clipboard.min.js"></script>
    <!-- momentjs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <!-- DateTimePicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
    <!-- InstantAnnotation -->
<script defer src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/instantAnnotations.js"></script>

<?php } ?>



<script src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/init.js?e=<?php echo rand(0,99)?>"></script>
<a href="#" class="back-to-top" style="display: inline;"><i class="fa fa-angle-up"></i></a>
</body>
</html>
