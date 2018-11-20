<?php wp_footer(); ?>
<footer class="footer">
        <div class="row">
            <ul class="list-inline text-center footer-icons">
                <li><a href="<?php echo get_option('insta_url')?>"><img class="" src="<?php echo get_template_directory_uri(); ?>/img/icons/instagram.svg" alt=""></a></li>
                <li><a href="<?php echo get_option('message_url')?>"><img class="" src="<?php echo get_template_directory_uri(); ?>/img/icons/messeger.svg" alt=""></a></li>
                <li><a href="<?php echo get_option('facebook_url')?>"><img class="" src="<?php echo get_template_directory_uri(); ?>/img/icons/facebook.svg" alt=""></a></li>
            </ul>
            <div class="col-md-8 col-md-offset-2 text-center footer-text">
                <p>Mike Rosenmann is a life coach. Aliquet euismod metus at vehicula. Phasellus facilisis diam ac tortor imperdiet congue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non sem lacinia.</p>
            </div>
        </div>
        <div class="row">
            <div class="text-center">


                <?php wp_nav_menu(array(
                        "name" => "main",
                    "before" => "<span class='footer_point'><img src=".get_template_directory_uri()."/img/icons/point.svg\" ></span>",
                    'container' => '',
                    'items_wrap' => '<ul class="navi-footer_new ">%3$s</ul>'
                ));?>
            </div>
        </div>
    </footer>

