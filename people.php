<?php
/*
Template Name: People
*/
?>
<?php get_header(); ?>

<!--PEOPLE-->
        <div class=" ">
            <span class="d-block p-2 bg-dark text-white my-2">DIRECTOR</span>
            <?php
              $arg = array(
                'category_name' => 'director-people',
                'post_type'		 => 'lab_content',
                'posts_per_page' => 6
              );

              $get_arg = new WP_Query( $arg );

              while ( $get_arg->have_posts() ) {
                $get_arg->the_post();
              ?>
            <div class="row py-3">
                <div class="col-md-3">
                    <a href="<?php the_post_thumbnail_url( 'large' ); ?>"><?php the_post_thumbnail( '', array( 'class' => 'img-fluid' ) ); ?></a>
                </div>
                <div class="col-md-9">
                    <h6 class="pt-2"><?php the_title() ?></h6>
                    <p><?php the_content() ?></p>
                </div>
            </div>
            <?php } wp_reset_postdata(); ?>
        </div>
        <div class=" ">
            <span class="d-block p-2 bg-dark text-white my-2">LAB MANAGER</span>
            <?php
              $arg = array(
                'category_name' => 'lab-manager-people',
                'post_type'		 => 'lab-content',
                'posts_per_page' => 6
              );

              $get_arg = new WP_Query( $arg );

              while ( $get_arg->have_posts() ) {
                $get_arg->the_post();
              ?>
            <div class="row py-3">
                <div class="col-md-3">
                    <a href="<?php the_post_thumbnail_url( 'large' ); ?>"><?php the_post_thumbnail( '', array( 'class' => 'img-fluid' ) ); ?></a>
                </div>
                <div class="col-md-9">
                    <h6 class="pt-2"><?php the_title() ?></h6>
                    <p><?php the_content() ?></p>
                </div>
            </div>
            <?php } wp_reset_postdata(); ?>
        </div>
        <div class=" ">
            <span class="d-block p-2 bg-dark text-white my-2">POSTDOCTORATE STUDENTS</span>
            <?php
              $arg = array(
                'category_name' => 'postdoc-people',
                'post_type'		 => 'lab_content',
                'posts_per_page' => 6
              );

              $get_arg = new WP_Query( $arg );

              while ( $get_arg->have_posts() ) {
                $get_arg->the_post();
              ?>
            <div class="row py-3">
                <div class="col-md-3">
                    <a href="<?php the_post_thumbnail_url( 'large' ); ?>"><?php the_post_thumbnail( '', array( 'class' => 'img-fluid' ) ); ?></a>
                </div>
                <div class="col-md-9">
                    <h6 class="pt-2"><?php the_title() ?></h6>
                    <p><?php the_content() ?></p>
                </div>
            </div>
            <?php } wp_reset_postdata(); ?>
        </div>
        <div class=" ">
            <span class="d-block p-2 bg-dark text-white my-2">PHD STUDENTS</span>
            <?php
              $arg = array(
                'category_name' => 'phd-people',
                'post_type'		 => 'lab_content',
                'posts_per_page' => 6
              );

              $get_arg = new WP_Query( $arg );

              while ( $get_arg->have_posts() ) {
                $get_arg->the_post();
              ?>
            <div class="row py-3">
                <div class="col-md-3">
                    <a href="<?php the_post_thumbnail_url( 'large' ); ?>"><?php the_post_thumbnail( '', array( 'class' => 'img-fluid' ) ); ?></a>
                </div>
                <div class="col-md-9">
                    <h6 class="pt-2"><?php the_title() ?></h6>
                    <p><?php the_content() ?></p>
                </div>
            </div>
            <?php } wp_reset_postdata(); ?>
        </div>
        <div class=" ">
            <span class="d-block p-2 bg-dark text-white my-2">MASTER STUDENTS</span>
            <?php
              $arg = array(
                'category_name' => 'master-people',
                'post_type'		 => 'lab_content',
                'posts_per_page' => 6
              );

              $get_arg = new WP_Query( $arg );

              while ( $get_arg->have_posts() ) {
                $get_arg->the_post();
              ?>
            <div class="row py-3">
                <div class="col-md-3">
                    <a href="<?php the_post_thumbnail_url( 'large' ); ?>"><?php the_post_thumbnail( '', array( 'class' => 'img-fluid' ) ); ?></a>
                </div>
                <div class="col-md-9">
                    <h6 class="pt-2"><?php the_title() ?></h6>
                    <p><?php the_content() ?></p>
                </div>
            </div>
            <?php } wp_reset_postdata(); ?>
        </div>
        <div class=" ">
            <span class="d-block p-2 bg-dark text-white my-2">UNDERGRADUATE STUDENTS</span>
            <?php
              $arg = array(
                'category_name' => 'undergraduate-people',
                'post_type'		 => 'lab_content',
                'posts_per_page' => 6
              );

              $get_arg = new WP_Query( $arg );

              while ( $get_arg->have_posts() ) {
                $get_arg->the_post();
              ?>
            <div class="row py-3">
                <div class="col-md-3">
                    <a href="<?php the_post_thumbnail_url( 'large' ); ?>"><?php the_post_thumbnail( '', array( 'class' => 'img-fluid' ) ); ?></a>
                </div>
                <div class="col-md-9">
                    <h6 class="pt-2"><?php the_title() ?></h6>
                    <p><?php the_content() ?></p>
                </div>
            </div>
            <?php } wp_reset_postdata(); ?>
        </div>
        <div class=" ">
            <span class="d-block p-2 bg-dark text-white my-2">FORMER STUDENTS</span>
            <?php
              $arg = array(
                'category_name' => 'former-students-people',
                'post_type'		 => 'lab_content',
                'posts_per_page' => 6
              );

              $get_arg = new WP_Query( $arg );

              while ( $get_arg->have_posts() ) {
                $get_arg->the_post();
              ?>
            <div class="row py-3">
                <div class="col-md-3">
                    <a href="<?php the_post_thumbnail_url( 'large' ); ?>"><?php the_post_thumbnail( '', array( 'class' => 'img-fluid' ) ); ?></a>
                </div>
                <div class="col-md-9">
                    <h6 class="pt-2"><?php the_title() ?></h6>
                    <p><?php the_content() ?></p>
                </div>
            </div>
            <?php } wp_reset_postdata(); ?>
        </div>
        <div class=" ">
            <span class="d-block p-2 bg-dark text-white my-2">VISITING STUDENTS AND RESEARCHERS</span>
            <?php
              $arg = array(
                'category_name' => 'visits-people',
                'post_type'		 => 'lab_content',
                'posts_per_page' => 6
              );

              $get_arg = new WP_Query( $arg );

              while ( $get_arg->have_posts() ) {
                $get_arg->the_post();
              ?>
            <div class="row py-3">
                <div class="col-md-3">
                    <a href="<?php the_post_thumbnail_url( 'large' ); ?>"><?php the_post_thumbnail( '', array( 'class' => 'img-fluid' ) ); ?></a>
                </div>
                <div class="col-md-9">
                    <h6 class="pt-2"><?php the_title() ?></h6>
                    <p><?php the_content() ?></p>
                </div>
            </div>
            <?php } wp_reset_postdata(); ?>
        </div>
        <div class=" ">
            <span class="d-block p-2 bg-dark text-white my-2">NATIONAL COLLABORATORS</span>
            <?php
              $arg = array(
                'category_name' => 'national-collaborators-people',
                'post_type'		 => 'lab_content',
                'posts_per_page' => 6
              );

              $get_arg = new WP_Query( $arg );

              while ( $get_arg->have_posts() ) {
                $get_arg->the_post();
              ?>
            <div class="row py-3">
                <div class="col-md-3">
                    <a href="<?php the_post_thumbnail_url( 'large' ); ?>"><?php the_post_thumbnail( '', array( 'class' => 'img-fluid' ) ); ?></a>
                </div>
                <div class="col-md-9">
                    <h6 class="pt-2"><?php the_title() ?></h6>
                    <p><?php the_content() ?></p>
                </div>
            </div>
            <?php } wp_reset_postdata(); ?>
        </div>
        <div class=" ">
            <span class="d-block p-2 bg-dark text-white my-2">INTERNATIONAL COLLABORATORS</span>
            <?php
              $arg = array(
                'category_name' => 'international-collaborators-people',
                'post_type'		 => 'lab_content',
                'posts_per_page' => 6
              );

              $get_arg = new WP_Query( $arg );

              while ( $get_arg->have_posts() ) {
                $get_arg->the_post();
              ?>
            <div class="row py-3">
                <div class="col-md-3">
                    <a href="<?php the_post_thumbnail_url( 'large' ); ?>"><?php the_post_thumbnail( '', array( 'class' => 'img-fluid' ) ); ?></a>
                </div>
                <div class="col-md-9">
                    <h6 class="pt-2"><?php the_title() ?></h6>
                    <p><?php the_content() ?></p>
                </div>
            </div>
            <?php } wp_reset_postdata(); ?>
        </div>
        <div class=" ">
            <span class="d-block p-2 bg-dark text-white my-2">INDUSTRY PARTNERS</span>
            <?php
              $arg = array(
                'category_name' => 'industry-people',
                'post_type'		 => 'lab_content',
                'posts_per_page' => 6
              );

              $get_arg = new WP_Query( $arg );

              while ( $get_arg->have_posts() ) {
                $get_arg->the_post();
              ?>
            <div class="row py-3">
                <div class="col-md-3">
                    <a href="<?php the_post_thumbnail_url( 'large' ); ?>"><?php the_post_thumbnail( '', array( 'class' => 'img-fluid' ) ); ?></a>
                </div>
                <div class="col-md-9">
                    <h6 class="pt-2"><?php the_title() ?></h6>
                    <p><?php the_content() ?></p>
                </div>
            </div>
            <?php } wp_reset_postdata(); ?>
        </div>

<?php get_footer(); ?>
