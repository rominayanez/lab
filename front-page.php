<?php get_header(); ?>
    <?php $header = get_field("header");?>
    <div class="row">
        <?php
echo do_shortcode('[smartslider3 slider=1]');
?>

    </div>
    <!--descripcion-->
    <?php $descripcion = get_field("descripcion");?>
    <div class="jumbotron bg-white text-center">
        <h2 class="jumbotron-heading"><?php echo $descripcion["titulo"];?></h2>
        <p class="lead text-muted "><?php echo $descripcion["texto"];?></p>
        <i class="fas fa-angle-down azul"></i>
        <h3 class="jumbotron-heading"><?php echo $descripcion["titulo2"];?></h3>
    </div>
    <div class="row lab-research">
        <div class="col-sm-4 text-align-center py-4">
            <i class="fas fa-fish"></i>
            <p class="lead line-height"><?php echo $descripcion["texto1"];?></p>
        </div>
        <div class="col-sm-4 text-align-center py-4">
            <i class="fas fa-dna"></i>
            <p class="lead line-height"><?php echo $descripcion["texto2"];?></p>

        </div>
        <div class="col-sm-4 text-align-center py-4">
            <i class="far fa-chart-bar"></i>
            <p class="lead"><?php echo $descripcion["texto3"];?></p>

        </div>
    </div>
    <!--    twitter-->
    <div class="row my-4">
        <div class="col-md-6 twitter">
            <h3 class="font-italic azul">Twitter</h3>
            <?php echo do_shortcode("[custom-twitter-feeds]");?>

        </div>
        <div class="col-md-6">
            <h3 class="font-italic azul ">Events</h3>
            <?php echo do_shortcode("[ai1ec]"); ?>

        </div>
    </div>

    <!--Contacto-->
    <!--<div class="row py-4 bg-dark text-white">
        <div class="col-md-5">
            <h2 class="jumbotron-heading mb-4 celeste text-center">Contact</h2>
            <address class="text-center">
                <strong>Aquaculture Genomics Lab</strong><br>
                Faculty of Veterinary and Animal Sciences <br>
                University of Chile <br>
                Av. Santa Rosa 11735 <br>
                La Pintana,Santiago <br>

            </address>
            <address class="text-center">
                <strong>Dr. José Manuel Yáñez</strong><br>
                Fono: +56 2 2978 5533 <br>
                <a href="mailto:#">jmayanez@uchile.cl</a>

            </address>

        </div>
        <div class="col-md-7">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3324.2227517027122!2d-70.63217304997364!3d-33.573565280644345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662d9f8f184a76d%3A0x5c8e495d3dfc6382!2sAv.+Sta.+Rosa+11735%2C+La+Pintana%2C+Regi%C3%B3n+Metropolitana!5e0!3m2!1ses-419!2scl!4v1553462652426" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>

        </div>


    </div>-->


    </div>
<?php get_footer(); ?>
