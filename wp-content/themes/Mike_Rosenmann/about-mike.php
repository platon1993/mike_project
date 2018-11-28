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
                <p class="text-center about-mike-text-under-menu"><?php the_field('title');?></p>
            </div>


            <?php
while( have_posts() ) : the_post();
    the_content(); // выводим контент
endwhile; ?>


            <div class="pricing-best-mode">
                <div class="pricing-best-mode-left">
                    <?php
                    echo get_field('left_block');
                    ?>
                </div>
                <div class="pricing-best-mode-right">
                    <div class="">
                        <ul>
                            <li><?php
                                echo get_field('right_block_list_first');
                                ?></li>
                            <li><?php
                                echo get_field('right_block_list_second');
                                ?></li>
                            <li><?php
                                echo get_field('right_block_list_third');
                                ?></li>
                        </ul>
                    </div>
                    <div class="pricing">
                        <img class="plus" src="/img/icons/plus.svg" alt=""> <hr class="hr_pricing">
                    </div>
                    <span class="pricing-count"><?php
                        echo get_field('pricing_count');

                        ?></span>
                </div>
            </div>
            <div >
                <?php
                echo get_field('over_form');
                ?>
            </div>

            <div class="text-center">
                <div class="row">
                    <?php echo do_shortcode('[contact-form-7 id="104" title="About Mike"]'); ?>
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

<?php

 get_footer();

?>
</body>


</html>
