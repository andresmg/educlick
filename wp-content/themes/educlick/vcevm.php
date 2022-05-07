<?php
/*
Template Name: VCEVM Page
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
      <div class="Main__Vce row">
        <div class="col-12 col-sm-4 Main__Vce__Video" alt="Video">
          <div class="background"></div>
        </div>
        <div class="col-12 col-sm-6 Main__Vce__info">
          <div data-aos="fade-up" data-aos-once="true" data-aos-duration="800">
            <h1 class="title dark">VCE Vocational major</h1>
            <p>
              The VCE Vocational Major is a VCE pathway which in 2023 will
              replace the current VCAL. All senior secondary students studying
              in schools will now have the option to complete the VCE or the NEW
              VCE Vocational Major.
            </p>
            <p>
              Both pathways enable students to receive their VCE certificates
              (upon successful completion). All information schools require can
              be found below in our selection of eduClick Information sheets.
            </p>
          </div>
          <div
            class="Main__Vce__Table"
            data-aos="fade-up"
            data-aos-once="true"
            data-aos-duration="800"
            data-aos-delay="300"
          >
            <div class="Main__Vce__Table__Head">
              When is the change occurring?
            </div>
            <div class="Main__Vce__Table__Body">
              <ul>
                <li>
                  2023, Units 1 and 2 VCE Vocational Major will replace year 11
                  VCAL stream (traditionally Intermediate VCAL)
                </li>
                <li>
                  2023, Units 1 and 2 Victorian Pathways Certificate replace
                  foundation VCAL
                </li>
                <li>
                  2024, Units 1 to 4 VCE Vocational Major replace the
                  traditional Intermediate and Senior VCAL
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-12 Main__Vce__icons">
          <div class="row">
            <a
              href="/"
              class="col-sm-2 col-4 Main__Vce__icon icon dark"
              data-aos="fade-up"
              data-aos-once="true"
              data-aos-duration="800"
              data-aos-delay="350"
            >
              <img
                src="<?php echo esc_url( get_stylesheet_directory_uri() ) ?>/assets/notebook_dark.svg"
                alt="Who are these courses for?"
              />
              <h6>Who are these courses for?</h6>
            </a>
            <a
              href="/"
              class="col-sm-2 col-4 Main__Vce__icon icon dark"
              data-aos="fade-up"
              data-aos-once="true"
              data-aos-duration="800"
              data-aos-delay="400"
            >
              <img src="<?php echo esc_url( get_stylesheet_directory_uri() ) ?>/assets/bulb_dark.svg" alt="All you need to know?" />
              <h6>All you need to know?</h6>
            </a>
            <a
              href="/"
              class="col-sm-2 col-4 Main__Vce__icon icon dark"
              data-aos="fade-up"
              data-aos-once="true"
              data-aos-duration="800"
              data-aos-delay="450"
            >
              <img
                src="<?php echo esc_url( get_stylesheet_directory_uri() ) ?>/assets/notebook_dark.svg"
                alt="What does educlick do?"
              />
              <h6>What does educlick do?</h6>
            </a>
            <a
              href="/"
              class="col-sm-2 col-4 Main__Vce__icon icon dark"
              data-aos="fade-up"
              data-aos-once="true"
              data-aos-duration="800"
              data-aos-delay="500"
            >
              <img
                src="<?php echo esc_url( get_stylesheet_directory_uri() ) ?>/assets/sketch_dark.svg"
                alt="Applied learning in the VCE"
              />
              <h6>Applied learning in the VCE</h6>
            </a>
            <a
              href="/"
              class="col-sm-2 col-4 Main__Vce__icon icon dark"
              data-aos="fade-up"
              data-aos-once="true"
              data-aos-duration="800"
              data-aos-delay="550"
            >
              <img src="<?php echo esc_url( get_stylesheet_directory_uri() ) ?>/assets/workbook_dark.svg" alt="Short Coursoe" />
              <h6>Short Coursoe</h6>
            </a>
            <a
              href="/"
              class="col-sm-2 col-4 Main__Vce__icon icon dark"
              data-aos="fade-up"
              data-aos-once="true"
              data-aos-duration="800"
              data-aos-delay="600"
            >
              <img src="<?php echo esc_url( get_stylesheet_directory_uri() ) ?>/assets/news_dark.svg" alt="VET in the VCEVM" />
              <h6>VET in the VCEVM</h6>
            </a>
          </div>
        </div>
      </div>
    </main>

<?php get_footer(); ?>