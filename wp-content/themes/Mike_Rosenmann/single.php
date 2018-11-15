<?php
get_header();

?>
</header>





    <section class="content">
        <div class="content-main">

            <div class="row">

    <?php


the_post_navigation( array(
                'next_text' => '<span class="blog-navigation" style="float:left"><img class="arrow-left" src="'. get_template_directory_uri().'/img/icons/arrow.svg" alt=""/>PREVIOUS POST</span>',
                'prev_text' => '<span class="blog-navigation" style="float:right">NEXT POST<img class="arrow-right" src="'. get_template_directory_uri().'/img/icons/arrow.svg" alt=""/></span>',
                    'screen_reader_text' => ' ',
            ) );
?>
    <div style="clear: both"></div>
</div>
            <div class="row">

               
     

                <?php echo get_post_field('post_content', $post->ID);?>

                <div class="text-center">
                    <div class="row">
                        <?php echo do_shortcode('[contact-form-7 id="118" title="Blog"]'); ?>
                    </div>
                </div>
            </div>


        </div>
    </section>

    </div>
      <div class="next-prev-wrap">



</span>


<?php
get_footer();
?>