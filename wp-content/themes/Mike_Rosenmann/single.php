<?php
get_header();

?>
</header>





    <section class="content-blog">
        <div class="content-main">

            <div class="row">

    <?php


the_post_navigation( array(
                'next_text' => '<span class="blog-navigation" "><img class="arrow-left" src="'. get_template_directory_uri().'/img/icons/arrow.svg" alt=""/>PREVIOUS POST</span>',
                'prev_text' => '<span class="blog-navigation" ">NEXT POST<img class="arrow-right" src="'. get_template_directory_uri().'/img/icons/arrow.svg" alt=""/></span>',
                    'screen_reader_text' => ' ',
            ) );
?>

</div>
            <div class="row">
                <p class="text-center about-mike-text-under-menu-blog"><?php the_field('title_blog_post');?></p>
                <p class="blog-header"><?php the_field('subtitle_blog_post');?></p>



                <?php
                while( have_posts() ) : the_post();
                    the_content(); // выводим контент
                endwhile; ?>

<!--                <div class="text-center">-->
<!--                    <div class="row">-->
<!--                        --><?php //echo do_shortcode('[contact-form-7 id="118" title="Blog"]'); ?>
<!--                    </div>-->
<!--                </div>-->




                <div >
                    <?php
                    echo get_field('over_form');
                    ?>
                </div>
                <div class="text-center">
                    <div class="row">
                        <?php echo do_shortcode('[contact-form-7 id="118" title="Blog"]'); ?>
                    </div>
                </div>
                <div>
                    <?php
                    echo get_field('under_form');
                    ?>
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