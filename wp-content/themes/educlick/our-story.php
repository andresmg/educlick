<?php
/*
Template Name: Our Story Page
*/
?>

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


<?php
// var para todos los custom fields 
// $texto_inicial = get_field( 'texto_inicial' );
// $ranking_internacional = get_field( 'ranking_internacional' );
// $ranking_nacional = get_field( 'ranking_nacional' );
// $texto_barra_naranja = get_field( 'texto_barra_naranja' );
// $whatsapp = get_field( 'whatsapp' );
// $mail = get_field( 'mail' );
// $instagram = get_field( 'instagram' );
// $twitter = get_field( 'twitter' );
// $bio = get_field( 'bio' );
// $texto_perfil = get_field( 'texto_perfil' );
// $quote = get_field( 'quote' );
?>

<?php endwhile; ?>
<?php endif; ?>


<main class="container-fluid Main">
      <div class="container">
        <div class="Main__OurStory row justify-content-between">
          <div class="col-12 col-sm-8 Main__OurStory__info">
            <h1 class="title">Our story</h1>
            <p>
              eduCLick has been founded out of the need for a specialist
              organisation to work with schools in the VCE Vocational Major
              (VCEVM). With over 40 years of experience working in and with
              schools as teachers, leading teachers and then owners of one of
              the largest VET in school RTOs in Australia, eduCLick is using our
              knowledge to further help schools in the VCEVM.
            </p>

            <p>
              We are specialists in the school’s sector, have dedicated our life
              to education and have used our experience to quickly become the
              leaders in the VCE Vocational Major.
            </p>
            <div class="row Main__OurStory__Timeline">
              <div class="col-sm-2 col-12 blue1">
                <h4>2000 to 2010</h4>
                Teachers and leading teachers in schools
              </div>
              <div class="col-sm-2 col-12 blue2">
                <h4>2011 to 2018</h4>
                Started and founded the VET Institute
              </div>
              <div class="col-sm-2 col-12 blue3">
                <h4>2019 to 2021</h4>
                Family time with children
              </div>
              <div class="col-sm-2 col-12 blue4">
                <h4>2021</h4>
                eduClick was born VCEVM Specialists
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-2 Main__OurStory__blocks">
            <div class="block blue"></div>
            <div class="block dark"></div>
          </div>
        </div>
      </div>
    </main>

<?php get_footer(); ?>