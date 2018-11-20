<?php
/*
* template name: Get in touch
*/
get_header();
?>

</header>

<section class="content">
    <div class="content-main">
        <div class="row">
            <div class="">
                <p class="text-center about-mike-text-under-menu-get-in-touch">"No need to do this all on your own, let me help you get the best out of life!"</p>
            </div>
            <?php echo get_post_field('post_content', $post->ID);?>
        </div>

        <div class="row">
            <form class="form-horizontal center-block form-contact" role="form">
                    <?php echo do_shortcode('[contact-form-7 id="77" title="Contact form 1"]'); ?>
            </form>
        </div>
    </div>
</section>

<?php
    get_footer();
?>
</body>


</html>
