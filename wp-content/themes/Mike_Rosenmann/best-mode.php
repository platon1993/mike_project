<?php
/*
* template name: Beast Mode
*/
get_header();
?>



    <div class="row">
        <div class="main-best-mode">BEASTMODE</div>
    </div>
    <div class="row">
        <div class="main-under text-center">How to maximize your efforts and fulfil your ambitions</div>
    </div>
    <div class="row">
        <form class="form-inline text-center">
            <?php echo do_shortcode('[contact-form-7 id="105" title="Best Mode"]'); ?>
        </form>
    </div>
    </header>
<section class="content">
    <div class="content-main">
        <div class="row">

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

        </div>
        <?php
        echo get_field('over_form11');
        ?>
    </div>
</section>



<?php

get_footer();

?>
</body>


</html>
