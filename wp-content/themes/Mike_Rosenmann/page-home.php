<?php
/*
* template name: Main
*/
get_header();
?>

        <div class="row">
            <div class="main text-center">#GOALZ</div>
        </div>
        <div class="row">
            <div class="main-under text-center">Let me help you reach yours.</div>
        </div>
        <div class="row">
            <center> <button name="singlebutton" class="btn btn-primary center-block button-bottom">Read more about my Beast Mode program</button></center>
        </div>
    </header>
    <section class="content">
        <div class="content-main">
            <div class="row">

                <?php echo get_post_field('post_content', $post->ID);?>

            </div>
        </div>
    </section>

</div>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>-->
<?php
 get_footer();
?>
</body>


</html>