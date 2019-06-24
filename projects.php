<?php
/*
Template Name: Projects
*/
?>
<?php get_header(); ?>

<!--Projects-->
    <div class="">
        <span class="d-block p-2 bg-dark text-white my-2">PROJECTS</span>
        <p class="h6">Competitive Research Grants</p>
    </div>
    <div class="border-bottom py-2">
        <?php
          $arg = array(
            'category_name' => 'projects',
            'post_type'		 => 'lab_content',
            'posts_per_page' => 20,

          );

          $get_arg = new WP_Query( $arg );

          while ( $get_arg->have_posts() ) {
            $get_arg->the_post();
          ?>
        <p class="my-0 azul"><U><?php the_title() ?></U></p>
        <p class="my-0 font-weight-light"><?php the_content() ?></p>
        <?php } wp_reset_postdata(); ?>

    </div>


<?php get_footer(); ?>
