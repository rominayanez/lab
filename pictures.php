<?php
/*
Template Name: Pictures
*/
?>
<?php get_header(); ?>
    <div class="">
        <span class="d-block p-2 bg-dark text-white my-2">Pictures</span>

    </div>
    <div class="col-sm " id="gallery">
        <?php echo do_shortcode('[smartslider3 slider=2]'); ?>


    </div>
<?php get_footer(); ?>
