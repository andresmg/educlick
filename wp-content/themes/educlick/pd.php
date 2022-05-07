<?php
/*
Template Name: PD Page
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


<main class="container-fluid">
      <div class="Main__Pd row justify-content-end align-items-center">
        <div
          class="col-12 col-sm-4 Main__Pd__info"
          data-aos="fade-up"
          data-aos-once="true"
          data-aos-duration="800"
        >
          <h1 class="title">PROFESSIONAL DEVELOPMENT</h1>
          <p>
            eduClick PDs are perfect for teachers delivering the VCEVM, VCE
            coordinators and anyone else in the school community requiring
            information on the VCE Vocational Major. We have a wide range of
            Professional development activities and conduct these on line or in
            person and ensure we deliver relevant and engaging sessions. All of
            our PD’s are FREE for teachers and are part of eduCLick’s unlimited
            access.
          </p>

          <p>Upcoming professional development activities:</p>
        </div>
        <div
          class="col-12 col-sm-4 Form"
          data-aos="fade-up"
          data-aos-once="true"
          data-aos-duration="800"
          data-aos-delay="300"
        >
          <h1>Book Now</h1>
          <a href="#" class="Button btn">Book</a>
        </div>
        <div class="col-sm-3 col-12 Back"></div>
      </div>
    </main>

<?php get_footer(); ?>