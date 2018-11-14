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
                    <input  placeholder="Your e-mail address" type="text" class="col-md-8 form-best-mode-alternative">
                    <button name="singlebutton" class="col-md-4 btn btn-primary center-block button-best-mode-alternative">Contact me about this program</button>
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