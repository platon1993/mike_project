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
            <input placeholder="Your e-mail address" type="text" class="form-best-mode">
            <center> <button name="singlebutton" class="btn btn-primary center-block button-bottom">Contact me about this program</button></center>
        </form>
    </div>
    </header>
<section class="content">
    <div class="content-main">
        <div class="row">

            <?php echo get_post_field('post_content', $post->ID);?>



        </div>
    </div>
</section>



<?php

get_footer();

?>
</body>


</html>
