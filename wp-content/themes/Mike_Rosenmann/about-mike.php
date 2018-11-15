<?php
/*
* template name: About Mike
*/
get_header();
?>

  </header>

<section class="content">
    <div class="content-main">
        <div class="row">
            <div class="">
                <p class="text-center about-mike-text-under-menu">"If you don't like the result, change the approach"</p>
            </div>


            <?php echo get_post_field('post_content', $post->ID);?>

            <div class="text-center">
                <div class="row">
                    <?php echo do_shortcode('[contact-form-7 id="104" title="About Mike"]'); ?>
                </div>
            </div>
        </div>


    </div>
</section>

</div>

<?php

 get_footer();

?>
</body>


</html>
