<?php
/*
Template Name: WRS Includes Page
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
      <div class="Main__Includes">
        <div class="row">
          <div class="col-12 col-sm-6 Main__Includes__left">
            <h1
              class="dark"
              class="light"
              data-aos="fade-right"
              data-aos-once="true"
              data-aos-duration="800"
              data-aos-delay="300"
            >
              Work Related Skills
            </h1>
            <h2 data-aos="fade" data-aos-once="true" data-aos-duration="1000">
              Inclusions
            </h2>
            <p
              data-aos="fade-up"
              data-aos-once="true"
              data-aos-duration="800"
              data-aos-delay="450"
            >
              eduCLick specialise in VCE Vocational Major with a direct focus on
              content for WRS and PDS. Everything we do covers the new VCEVM
              curriculum as well has an applied learning focus. Students and
              teachers receive their own hard copy resources as well as have
              FREE AND UNLIMITED access to all of our Applied Activities, short
              courses, eduCLIck support and more.
            </p>

            <p
              data-aos="fade-up"
              data-aos-once="true"
              data-aos-duration="800"
              data-aos-delay="550"
            >
              Our content and value cannot be matched and all inclusions and
              costs are included to keep it simple for schools.
            </p>
          </div>
          <div class="col-12 col-sm-4 Main__Includes__right">
            <div class="row justify-content-around">
              <a
                href="/"
                class="col-4 icon"
                data-aos="fade-up"
                data-aos-once="true"
                data-aos-duration="800"
                data-aos-delay="650"
              >
                <img src="<?php echo esc_url( get_stylesheet_directory_uri() ) ?>/assets/include_blue.svg" alt="What we include" />
                <h6 class="blue">What we include</h6>
              </a>
              <a
                href="/"
                class="col-4 icon"
                data-aos="fade-up"
                data-aos-once="true"
                data-aos-duration="800"
                data-aos-delay="700"
              >
                <img src="<?php echo esc_url( get_stylesheet_directory_uri() ) ?>/assets/list_blue.svg" alt="Costs" />
                <h6 class="blue">Costs</h6>
              </a>
              <a
                href="/"
                class="col-4 icon"
                data-aos="fade-up"
                data-aos-once="true"
                data-aos-duration="800"
                data-aos-delay="750"
              >
                <img src="<?php echo esc_url( get_stylesheet_directory_uri() ) ?>/assets/calc_blue.svg" alt="What does eduClick do?" />
                <h6 class="blue">What does eduClick do?</h6>
              </a>
              <div
                class="col-12 p-0"
                data-aos="fade-up"
                data-aos-once="true"
                data-aos-duration="800"
                data-aos-delay="900"
              >
                <div class="order">
                  <p>Orders open in September for <strong>2023</strong>.</p>

                  <p>
                    Contact us for information
                    <a href="mailto:info@educlick.com.au"
                      >info@educlick.com.au</a
                    >
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div
            class="col-sm-2 col-12 Main__Includes__background"
            style="
              background: url(<?php echo esc_url( get_stylesheet_directory_uri() ) ?>/assets/pds_resources_bg.jpg) no-repeat center /
                cover;
            "
          ></div>
        </div>
      </div>
    </main>

<?php get_footer(); ?>