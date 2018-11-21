<?php
/*
* template name: Beast Mode Alternative
*/
get_header();
?>
    </header>
    <div class="row">
        <div class="main-best-mode-alternative">BEASTMODE</div>
    </div>


<section class="content">
    <div class="content-main">
        <div class="row">

            <?php echo get_post_field('post_content', $post->ID);?>


            <div class="text-center">
                <div class="row">

                    <?php echo do_shortcode('[contact-form-7 id="106" title="Best Mode Alternative"]'); ?>
                </div>
            </div>
        </div>

    </div>
</section>


    <?php

get_footer();

?>
</body>


</html>