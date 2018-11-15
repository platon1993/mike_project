<?php
/*
* template name: Blog Thoughts
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
<!--                    <input  placeholder="Your e-mail address" type="text" class="col-md-8 form-best-mode-alternative">-->
<!--                    <button name="singlebutton" class="col-md-4 btn btn-primary center-block button-best-mode-alternative">Contact me about this program</button>-->
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

