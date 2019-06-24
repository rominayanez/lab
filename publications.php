<?php
/*
Template Name: Publications
*/
?>
<?php get_header(); ?>

<!--PUBLICATIONS-->
    <div class="">
        <span class="d-block p-2 bg-dark text-white my-2">PUBLICATIONS</span>
    </div>
    <div class="">
        <p class="h6 my-4"><strong>Peer-reviewed papers</strong> </p>
    </div>

    <div class="">
        <p class="h6 my-4"><strong>Pre-prints</strong> </p>
        <?php
          $arg = array(
            'category_name' => 'pre-prints',
            'post_type'		 => 'lab_content',
            'posts_per_page' => 6,
            'orderby'=>'title'
          );

          $get_arg = new WP_Query( $arg );

          while ( $get_arg->have_posts() ) {
            $get_arg->the_post();
          ?>
        <p class="my-0 azul"><u><?php the_title() ?></u></p>
        <p class="my-0"><?php the_content() ?></p>
        <?php } wp_reset_postdata(); ?>
    </div>
    <div class="">
        <p class="h6 my-4"><strong>2019</strong> </p>
        <?php
          $arg = array(
            'category_name' => 'papers-2019',
            'post_type'		 => 'lab_content',
            'posts_per_page' => 12,
            'orderby'=>'title'
          );

          $get_arg = new WP_Query( $arg );

          while ( $get_arg->have_posts() ) {
            $get_arg->the_post();
          ?>
        <p class="my-0 azul"><u><?php the_title() ?></u></p>
        <p class="my-0"><?php the_content() ?></p>
        <?php } wp_reset_postdata(); ?>
    </div>
    <div class="">
        <p class="h6 my-4"><strong>2018 </strong></p>
        <?php
          $arg = array(
            'category_name' => 'papers-2018',
            'post_type'		 => 'lab_content',
            'posts_per_page' => 12,
            'orderby'=>'title'
          );

          $get_arg = new WP_Query( $arg );

          while ( $get_arg->have_posts() ) {
            $get_arg->the_post();
          ?>
        <p class="my-0 azul"><u><?php the_title() ?></u></p>
        <p class="my-0"><?php the_content() ?></p>
        <?php } wp_reset_postdata(); ?>
    </div>
    <div class="">
        <p class="h6 my-4"><strong>2017</strong> </p>
        <p class="my-0 azul"><u>31. Bayesian Genome-wide association study for body weight and average daily gain in Atlantic salmon (<em>Salmo salar</em>).</u></p>
        <p class="my-0">Yoshida GM, Lhorente JP, Carvalheiro R,<strong>Yáñez JM</strong></p>
        <p class="my-0"><a href="https://onlinelibrary.wiley.com/doi/abs/10.1111/age.12621">Animal Genetics 48: 698-703</a></p>
    </div>
    <div class="my-3">
        <p class="my-0 azul"><u>30. Functional Analysis of All Salmonid Genomes (FAASG): an international initiative supporting future salmonid research, conservation and aquaculture.</u></p>
        <p class="my-0">Macqueen DJ, Primmer, C, Houston R, Nowak B, Bernatchez L, Bergseth S, Davidson WS, Gallardo-Escárate C, Goldammer T, Guiguen Y, Iturra P, Kijas JW, Koop B, Lien S, Maass A, Martin S, McGinnity P, Montecino M, Naish K, Nichols K, Ólafsson K, Omholt S, Palti Y, Plastow G, Rexroad 3rd C, Rise M, Ritchie R, Sandve SR, Schulte P, Tello A, Vidal R, Vik JO, Wargelius A, <strong>Yáñez JM.</strong></p>
        <p class="my-0"><a href="https://bmcgenomics.biomedcentral.com/articles/10.1186/s12864-017-3862-8">BMC Genomics 18: 484</a></p>
    </div>
    <div class="my-3">
        <p class="my-0 azul"><u>29. Resistance against infectious pancreatic necrosis exhibits significant genetic variation and is not genetically correlated with harvest weight in rainbow trout (<em>Oncorhynchus mykiss</em>).</u></p>
        <p class="my-0">Flores-Mara R, Rodríguez FH, Bangera R, Lhorente JP, Neira R, Newman S, <strong>Yáñez JM.</strong></p>
        <p class="my-0"><a href="https://www.sciencedirect.com/science/article/abs/pii/S0044848617300455">Aquaculture 479: 155-160</a></p>
    </div>
    <div class="my-3">
        <p class="my-0 azul"><u>28. Mate selection in aquaculture breeding using differential evolution algorithm. </u></p>
        <p class="my-0">Yoshida GM, <strong>Yáñez JM,</strong> Lopes de Oliveira CA, Ribeiro RP,  Lhorente JP, Aidar de Queiroz S, Carvalheiro R. </p>
        <p class="my-0"><a href="https://onlinelibrary.wiley.com/doi/full/10.1111/are.13365">Aquaculture Research 48: 5490–5497</a></p>
    </div>
    <div class="my-3">
        <p class="my-0 azul"><u>27. The use of genomic information increases the reliability of breeding value predictions for sea louse (<em>Caligus rogercresseyi</em>) resistance in Atlantic salmon (<em>Salmo salar</em>).</u></p>
        <p class="my-0">Correa K, Bangera R, Lhorente JP, <strong>Yáñez JM.</strong>  </p>
        <p class="my-0"><a href="https://gsejournal.biomedcentral.com/articles/10.1186/s12711-017-0291-8">Genetics Selection Evolution 49: 15</a></p>
    </div>
    <div class="my-3">
        <p class="my-0 azul"><u>25. Genomic predictions can accelerate selection for resistance against Piscirickettsia salmonis Atlantic salmon (<em>Salmo salar</em>).</u></p>
        <p class="my-0">Bangera R, Correa K, Lhorente JP, Figueroa R, <strong>Yáñez JM.</strong>  </p>
        <p class="my-0"><a href="https://bmcgenomics.biomedcentral.com/articles/10.1186/s12864-017-3487-y">BMC Genomics 18: 121</a></p>
    </div>
    <div class="my-3">
        <p class="my-0 azul"><u>24. Genome wide association study for resistance to <em>Caligus rogercresseyi</em> in Atlantic salmon (<em>Salmo salar L. </em>) using a 50K SNP genotyping array.</u></p>
        <p class="my-0">Correa K, Lhorente JP, Bassini L, López ME, Di Génova A, Maass A, Davidson WS, <strong>Yáñez JM.</strong>  </p>
        <p class="my-0"><a href="https://www.sciencedirect.com/science/article/abs/pii/S0044848616301818">Aquaculture 472-S1: 61-65</a></p>
    </div>
    <div class="my-3">
        <p class="my-0 azul"><u>23. Correlated response of flesh color to selection for harvest weight in coho salmon (<em>Oncorhynchus kisutch</em>).</u></p>
        <p class="my-0">Dufflocq P, Lhorente JP, Bangera R, Neira R, Newman S, <strong>Yáñez JM.</strong>  </p>
        <p class="my-0"><a href="https://www.sciencedirect.com/science/article/abs/pii/S0044848616304379">Aquaculture 472-S1: 38-43</a></p>
    </div>

    <div class="">
        <p class="h6 my-4">2016 </p>
        <p class="my-0 azul"><u>22. Assessment of genetic variation for pathogen-specific mastitis resistance in Valle del Belice dairy sheep.</u></p>
        <p class="my-0">Tolone M, Larrondo C, <strong>Yáñez JM,</strong> Newman S, Sardina MT, Portolano B.</p>
        <p class="my-0"><a href="https://bmcvetres.biomedcentral.com/articles/10.1186/s12917-016-0781-x">BMC Veterinary Research 12: 158</a></p>
    </div>
    <div class="my-3">
        <p class="my-0 azul"><u>21. Negative genetic correlation between harvest weight and resistance against <em>Piscirickettsia salmonis</em> in coho salmon (<em>Oncorhynchus kisutch</em>).</u></p>
        <p class="my-0"><strong>Yáñez JM,</strong> Bangera R, Lhorente JP, Barría A, Oyarzún M, Neira R, Newman S.  </p>
        <p class="my-0"><a href="https://www.sciencedirect.com/science/article/abs/pii/S0044848616301302">Aquaculture 459: 8-13</a></p>
    </div>
    <div class="my-3">
        <p class="my-0 azul"><u>20. Genome wide single nucleotide polymorphism (SNP) discovery in Atlantic salmon (<em>Salmo salar</em>): validation in farmed and wild American and European populations.</u></p>
        <p class="my-0"><strong>Yáñez JM,</strong> , Naswa S, López ME, Bassini L, Correa K, Gilbey J, Bernatchez L, Norris A, Neira R, Lhorente JP, Schnable P, Newman N, Mileham A, Deeb N, Di Genova A, Maass A.  </p>
        <p class="my-0"><a href="https://onlinelibrary.wiley.com/doi/abs/10.1111/1755-0998.12503">Molecular Ecology Resources 16: 1002-1011</a></p>
    </div>
    <div class="my-3">
        <p class="my-0 azul"><u>19. Evidence of recent signatures of selection during domestication in an Atlantic salmon population.</u></p>
        <p class="my-0">Gutierrez AP, <strong>Yáñez JM,</strong> Davidson WS.</p>
        <p class="my-0"><a href="https://www.sciencedirect.com/science/article/pii/S1874778715300623?via%3Dihub">Marine Genomics 26: 41-50</a></p>
    </div>

    <div class="my-3">
        <p class="my-0 azul"><u>18. Characterization of antimicrobial susceptibility and its association to virulence genes related with adherence, invasion and citotoxicity in <em>Campylobacter jejuni</em> and <em>Campylobacter coli</em> isolates from animals, meat and humans.</u></p>
        <p class="my-0">Lapierre L, Gatica MA, Riquelme V, Vergara C, <strong>Yáñez JM, </strong>San Martín B, Sáenz L, Vidal M, Martínez MC, Araya P, Flores R.</p>
        <p class="my-0"><a href="https://www.liebertpub.com/doi/10.1089/mdr.2015.0055">Microbial Drug Resistance 22: 432-444</a></p>
    </div>

    <div class="my-3">
        <p class="my-0 azul"><u>17. Evaluation of the growth and carcass quality of diallel crosses of four strains of Nile tilapia (<em>Oerochromis niloticus</em>).</u></p>
        <p class="my-0">Neira R, García X, Lhorente JP, Filp M, <strong>Yáñez JM, </strong>Cascante AM.</p>
        <p class="my-0"><a href="https://www.sciencedirect.com/science/article/abs/pii/S0044848615301526">Aquaculture 451: 213-222</a></p>
    </div>

    <div class="">
        <p class="h6 my-4">2015 </p>
        <p class="my-0 azul"><u>16. Genome-wide association analysis reveals loci associated with resistance against <em>Piscirickettsia salmonis</em> in two Atlantic salmon (<em>Salmo salar L.</em>) chromosomes. </u></p>
        <p class="my-0">Correa K, Lhorente JP, López ME, Bassini L, Naswa S, Deeb N, Di Genova A, Maass A, Davidson WS, <strong>Yáñez JM.</strong>  </p>
        <p class="my-0"><a href="https://bmcgenomics.biomedcentral.com/articles/10.1186/s12864-015-2038-7">BMC Genomics 16: 854</a></p>
    </div>
    <div class="my-3">
        <p class="my-0 azul"><u>15. High-throughput transcriptome analysis of ISAV-infected Atlantic salmon <em>Salmo salar</em> unravels divergent immune responses associated to head-kidney, liver and gills tissues.</u></p>
        <p class="my-0">Valenzuela-Miranda D, Cabrejos ME, Cisterna D, <strong>Yáñez JM, </strong>Gallardo-Escárate C.</p>
        <p class="my-0"><a href="https://www.sciencedirect.com/science/article/abs/pii/S1050464815001552">Fish and Shellfish Immunology 45: 367-377</a></p>
    </div>
    <div class="my-3">
        <p class="my-0 azul"><u>14. Genomics in aquaculture to better understand species biology and accelerate genetic progress.</u></p>
        <p class="my-0"><strong>Yáñez JM, </strong>Houston R, Newman S.</p>
        <p class="my-0"><a href="http://journal.frontiersin.org/article/10.3389/fgene.2015.00128/full">Frontiers in Genetics 6: 128</a></p>
    </div>
    <div class="my-3">
        <p class="my-0 azul"><u>13. Genome-wide association study (GWAS) for growth rate and sexual maturation in Atlantic salmon (<em>Salmo salar</em>).</u></p>
        <p class="my-0">Gutierrez AP, <strong>Yáñez JM, </strong>Fukui S, Swift B, Davidson WS.</p>
        <p class="my-0"><a href="https://journals.plos.org/plosone/article?id=10.1371/journal.pone.0119730">PLOS One 10: e0119730</a></p>
    </div>
    <div class="my-3">
        <p class="my-0 azul"><u>12. Applications in the search for genomic selection signatures in fish.</u></p>
        <p class="my-0">López ME, Neira R, <strong>Yáñez JM.</strong>  </p>
        <p class="my-0"><a href="https://www.frontiersin.org/articles/10.3389/fgene.2014.00458/full">Frontiers in Genetics 5: 458</a></p>
    </div>
    <div class="my-3">
        <p class="my-0 azul"><u>11. From the viral perspective: Infectious salmon anemia virus (ISAV) transcriptome during the infective process in Atlantic salmon (<em>Salmo salar</em>).</u></p>
        <p class="my-0">Valenzuela-Miranda D, Cabrejos ME, <strong>Yáñez JM, </strong>Gallardo-Escárate C.</p>
        <p class="my-0"><a href="https://www.sciencedirect.com/science/article/pii/S1874778714001688">Marine Genomics 20: 39-43</a></p>
    </div>

    <div class="">
        <p class="h6 my-4">2014 </p>
        <p class="my-0 azul"><u>10. Genetics and genomics of disease resistance in salmonid species.</u></p>
        <p class="my-0"><strong>Yáñez JM,</strong> Houston R, Newman S.</p>
        <p class="my-0"><a href="http://journal.frontiersin.org/journal/10.3389/fgene.2014.00415/abstract">Frontiers in Genetics 5: 415</a></p>
    </div>
    <div class="my-3">
        <p class="my-0 azul"><u>9. Effect of triploidy in the expression of immune-related genes in coho salmon (<em>Oncorhynchus kisutch</em> Walbaum) infected with <em>Piscirickettsia salmonis</em>.</u></p>
        <p class="my-0">Correa K, Filp M, Cisterna D, Cabrejos ME, Gallardo-Escárate C, <strong>Yáñez JM.</strong> </p>
        <p class="my-0"><a href="https://onlinelibrary.wiley.com/doi/abs/10.1111/are.12584">Aquaculture Research 46: 59-63</a></p>
    </div>
    <div class="my-3">
        <p class="my-0 azul"><u>8. Genetic co-variation between resistance against both <em>Caligus rogercresseyi</em> and <em>Piscirickettsia salmonis</em>, and body weight in Atlantic salmon (<em>Salmo salar</em>).</u></p>
        <p class="my-0"><strong>Yáñez JM, </strong>Lhorente JP, Bassini LN, Oyarzún M, Neira R, Newman S.</p>
        <p class="my-0"><a href="https://www.sciencedirect.com/science/article/abs/pii/S0044848614003214">Aquaculture 433:295-298</a></p>
    </div>
    <div class="my-3">
        <p class="my-0 azul"><u>7. Inbreeding and effective population size in a coho salmon (<em>Oncorhynchus kisutch</em>) breeding nucleus in Chile.</u></p>
        <p class="my-0"><strong>Yáñez JM, </strong>Bassini LN, Lhorente JP, Filp M, Ponzoni R, Neira R.</p>
        <p class="my-0"><a href="https://www.sciencedirect.com/science/article/abs/pii/S0044848613002627">Aquaculture 420-421:S15-S19</a></p>
    </div>
    <div class="">
        <p class="h6 my-4">2013 </p>
        <p class="my-0 azul"><u>6. Quantitative genetic variation of resistance against <em>Piscirickettsia salmonis</em> in Atlantic salmon (<em>Salmo salar</em>).</u></p>
        <p class="my-0"><strong>Yáñez JM, </strong>Bangera R, Lhorente JP, Oyarzún M, Neira R. </p>
        <p class="my-0"><a href="https://www.sciencedirect.com/science/article/abs/pii/S0044848613004079">Aquaculture 414-415:155-159</a></p>
    </div>
    <div class="my-3">
        <p class="my-0 azul"><u>5. Characterization of <em>Mycobacterium salmoniphilum</em> as causal agent of mycobacteriosis in Atlantic salmon, <em>Salmo salar L.</em>, from a freshwater recirculation system.</u></p>
        <p class="my-0">Aro L, Correa K, Martínez A, Ildefonso R, <strong>Yáñez JM.</strong></p>
        <p class="my-0"><a href="https://onlinelibrary.wiley.com/doi/abs/10.1111/jfd.12108">Journal of Fish Diseases 37: 341-348</a></p>
    </div>
    <div class="my-3">
        <p class="my-0 azul"><u>4. Assessing footprints of selection in commercial Atlantic salmon populations using microsatellite data.</u></p>
        <p class="my-0">Martinez V, Detleff P, López P, Fernández G, Jedlicki A, <strong>Yáñez JM, </strong>Davidson WS.</p>
        <p class="my-0"><a href="https://onlinelibrary.wiley.com/doi/abs/10.1111/j.1365-2052.2012.02387.x">Animal Genetics 44: 233-236</a></p>
    </div>
    <div class="">
        <p class="h6 my-4">2007-2010 </p>
        <p class="my-0 azul"><u>3. Genetic factors involved in resistance to infectious diseases in salmonids and their application in breeding programmes.</u></p>
        <p class="my-0"><strong>Yáñez JM, </strong>Martínez V.</p>
        <p class="my-0"><a href="https://scielo.conicyt.cl/scielo.php?script=sci_arttext&pid=S0301-732X2010000200002">Archivos de Medicina Veterinaria 42: 1-15</a></p>
    </div>
    <div class="my-3">
        <p class="my-0 azul"><u>2. Characterization of new microsatellite markers derived from sequence databases for the emu (<em>Dromaius novaehollandiae</em>).</u></p>
        <p class="my-0"><strong>Yáñez JM, </strong>González R, Angulo J, Vidal R, Santos JL, Martínez V.</p>
        <p class="my-0"><a href="https://onlinelibrary.wiley.com/doi/abs/10.1111/j.1755-0998.2008.02315.x?deniedAccessCustomisedMessage=&userIsAuthenticated=false">Molecular Ecology Resources 8: 1442-1444</a></p>
    </div>
    <div class="my-3">
        <p class="my-0 azul"><u>1. The CK1 gene family: expression patterning in zebrafish development. </u></p>
        <p class="my-0">Albornoz A*, <strong>Yáñez JM*, </strong>Foerster C, Aguirre C, Pereiro L, Burzio V, Moraga M, Reyes AE, Antonelli M.</p>
        <p class="my-0"><a href="https://scielo.conicyt.cl/scielo.php?script=sci_arttext&pid=S0716-97602007000200015&lng=en&nrm=iso&tlng=en">Biological Research 40: 251-266</a></p>
        <p class="my-0">*Both authors contributed equally to this work</p>
    </div>

    <div class="">
        <p class="h6 my-4">Peer-reviewed conference proceedings </p>
        <?php
          $arg = array(
            'category_name' => 'pr-conference',
            'post_type'		 => 'lab_content',
            'posts_per_page' => 20,

          );

          $get_arg = new WP_Query( $arg );

          while ( $get_arg->have_posts() ) {
            $get_arg->the_post();
          ?>


        <p class="my-0"><?php the_title() ?></p>
        <p class="my-0"><?php the_content() ?></p>
        <?php } wp_reset_postdata(); ?>
    </div>

    <div class="">
        <p class="h6 my-4">Other publications </p>
        <?php
          $arg = array(
            'category_name' => 'other-pub',
            'post_type'		 => 'lab_content',
            'posts_per_page' => 20,

          );

          $get_arg = new WP_Query( $arg );

          while ( $get_arg->have_posts() ) {
            $get_arg->the_post();
          ?>
         <p class="my-0"><?php the_title() ?></p>
         <p class="my-0"><?php the_content() ?></p>
         <?php } wp_reset_postdata(); ?>
    </div>

    <div class="">
        <p class="h6 my-4">Invited Conferences (selected, 10 out of 31)</p>
        <?php
          $arg = array(
            'category_name' => 'invited-conferences',
            'post_type'		 => 'lab_content',
            'posts_per_page' => 20,

          );

          $get_arg = new WP_Query( $arg );

          while ( $get_arg->have_posts() ) {
            $get_arg->the_post();
          ?>
          <div class="">
              <p class="my-0"><?php the_title() ?></p>
              <p class="my-0"><?php the_content() ?></p>
              <?php } wp_reset_postdata(); ?>

          </div>
    </div>

    <div class="">
        <p class="h6 my-4">Abstracts in International Conferences (selected, 10 out of 34)</p>
        <?php
          $arg = array(
            'category_name' => 'abstracts-international',
            'post_type'		 => 'lab_content',
            'posts_per_page' => 20,

          );

          $get_arg = new WP_Query( $arg );

          while ( $get_arg->have_posts() ) {
            $get_arg->the_post();
          ?>
          <div class="">
              <p class="my-0"><?php the_title() ?></p>
              <p class="my-0"><?php the_content() ?></p>
              <?php } wp_reset_postdata(); ?>

          </div>
    </div>

    <div class="">
        <p class="h6 my-4">Abstracts in Chilean Conferences (selected, 10 out of 25)</p>
        <?php
          $arg = array(
            'category_name' => 'abstracts-chilean',
            'post_type'		 => 'lab_content',
            'posts_per_page' => 20,

          );

          $get_arg = new WP_Query( $arg );

          while ( $get_arg->have_posts() ) {
            $get_arg->the_post();
          ?>
          <div class="">
              <p class="my-0"><?php the_title() ?></p>
              <p class="my-0"><?php the_content() ?></p>
              <?php } wp_reset_postdata(); ?>

          </div>
    </div>
<?php get_footer(); ?>
