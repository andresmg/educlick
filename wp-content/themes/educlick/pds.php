<?php
/*
Template Name: PDS Page
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


<main class="container-fluid splash__custom">
      <div class="Banner row">
        <div class="col-12 text-center">
          <h1>PDS</h1>
          <h3>VCEVM PERSONAL DEVELOPMENT SKILLS</h3>
          <p>VCE Units 1 to 4</p>
        </div>
      </div>
      <div class="Main__Pds container d-flex justify-content-center">
        <div class="row d-flex justify-content-between">
          <div class="col-12 col-sm-5">
            <a
              href="<?php echo get_home_url(); ?>/pds-resources-page"
              class="Main__Pds__cards"
              data-aos="fade-up"
              data-aos-once="true"
              data-aos-duration="800"
            >
              <div class="icons icons__book"></div>
              PDS RESOURCES
            </a>
          </div>
          <div class="col-12 col-sm-5">
            <a
              href="<?php echo get_home_url(); ?>/pds-includes-page"
              class="Main__Pds__cards"
              data-aos="fade-up"
              data-aos-once="true"
              data-aos-delay="300"
              data-aos-duration="800"
            >
              <div class="icons icons__dollar"></div>
              WHAT WE INCLUDE <br />WHATS THE COST
            </a>
          </div>
          <div
            href="#"
            class="col-12"
            data-aos="fade"
            data-aos-once="true"
            data-aos-delay="500"
            data-aos-duration="800"
          >
            <a href="#" class="Cta"> All you need to know about PDS</a>
          </div>
        </div>
      </div>
    </main>

<?php get_footer(); ?>