<?php
/*
Template Name: PDS Resources Page
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
      <div class="Main__Resources">
        <div class="row">
          <div class="col-12 col-sm-6">
            <div class="row">
              <div class="col-sm-6 col-12 Main__Resources__column"></div>
              <div class="col-sm-4 col-12">
                <div class="row align-items-center Main__Resources__buttons">
                  <div
                    class="col-sm-12 col-6 button active topbtn light"
                    onclick="showTop()"
                  >
                    <p>STUDENT WORKBOOKS</p>
                  </div>
                  <div
                    class="col-sm-12 col-6 button bttmbtn light"
                    onclick="showBottom()"
                  >
                    <p>TEACHER RESOURCES</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-4 Main__Resources__info">
            <div id="top" class="d-block">
              <div
                data-aos="fade-up"
                data-aos-once="true"
                data-aos-duration="800"
              >
                <h3>Personal Development Skills</h3>
                <h1 class="title light student">Student Workbooks</h1>
                <p>
                  Our VCE Vocational Major student workbooks have been designed
                  to cover all key skills and knowledge as well as incorporate
                  engaging and interactive student activities. A new course
                  requires detailed content and our student workbooks have it
                  all.
                </p>

                <p>
                  All of our content is mapped to VCAA requirements and no
                  photocopying is required. Students and teachers now have a
                  structured resource allowing more time on teaching and
                  engagement and less time on stressing over content
                  development.
                </p>
              </div>
              <div class="row Main__Resources__icons">
                <a
                  href="/"
                  class="col-sm-3 col-6 icon light"
                  data-aos="fade-up"
                  data-aos-once="true"
                  data-aos-duration="800"
                  data-aos-delay="300"
                >
                  <img
                    src="<?php echo esc_url( get_stylesheet_directory_uri() ) ?>/assets/notebook_light.svg"
                    alt="STUDENT WORKBOOKS"
                  />
                  <h6 class="light">STUDENT WORKBOOK</h6>
                </a>
                <a
                  href="/"
                  class="col-sm-3 col-6 icon light"
                  data-aos="fade-up"
                  data-aos-once="true"
                  data-aos-duration="800"
                  data-aos-delay="350"
                >
                  <img
                    src="<?php echo esc_url( get_stylesheet_directory_uri() ) ?>/assets/sketch_light.svg"
                    alt="VCAA CONTENT MAPPING
                "
                  />
                  <h6 class="light">VCAA CONTENT MAPPING</h6>
                </a>
                <a
                  href="/"
                  class="col-sm-3 col-6 icon light"
                  data-aos="fade-up"
                  data-aos-once="true"
                  data-aos-duration="800"
                  data-aos-delay="400"
                >
                  <img
                    src="<?php echo esc_url( get_stylesheet_directory_uri() ) ?>/assets/workbook_light.svg"
                    alt="TEACHER WORKBOOK_light
                "
                  />
                  <h6 class="light">TEACHER WORKBOOK</h6>
                </a>
                <a
                  href="/"
                  class="col-sm-3 col-6 icon light"
                  data-aos="fade-up"
                  data-aos-once="true"
                  data-aos-duration="800"
                  data-aos-delay="450"
                >
                  <img
                    src="<?php echo esc_url( get_stylesheet_directory_uri() ) ?>/assets/news_light.svg"
                    alt="TEACHER KIT INCLUSIONS
                "
                  />
                  <h6 class="light">TEACHER KIT INCLUSIONS</h6>
                </a>
              </div>
            </div>
            <div id="bottom" class="d-none">
              <h3>Personal Development Skills</h3>
              <h1 class="title light teacher">Teacher Resources</h1>
              <p>
                Teacher resources allow teachers to focus on what they do best,
                teach. We supply everything a teacher needs including their own
                copies of student workbooks as well as teacher guides with
                answers to all activities and extension tasks.
              </p>

              <p>
                eduCLicks teacher pack also includes all applied learning games
                and activities so teachers do not need to source anything, it’s
                all in one place. Check out our inclusions.
              </p>
              <div class="row Main__Resources__icons">
                <a href="/" class="col-sm-3 icon light">
                  <img
                    src="<?php echo esc_url( get_stylesheet_directory_uri() ) ?>/assets/notebook_light.svg"
                    alt="STUDENT WORKBOOKS"
                  />
                  <h6 class="light">STUDENT WORKBOOK</h6>
                </a>
                <a href="/" class="col-sm-3 icon light">
                  <img
                    src="<?php echo esc_url( get_stylesheet_directory_uri() ) ?>/assets/sketch_light.svg"
                    alt="VCAA CONTENT MAPPING
                "
                  />
                  <h6 class="light">VCAA CONTENT MAPPING</h6>
                </a>
                <a href="/" class="col-sm-3 icon light">
                  <img
                    src="<?php echo esc_url( get_stylesheet_directory_uri() ) ?>/assets/workbook_light.svg"
                    alt="TEACHER WORKBOOK
                "
                  />
                  <h6 class="light">TEACHER WORKBOOK</h6>
                </a>
                <a href="/" class="col-sm-3 icon light">
                  <img
                    src="<?php echo esc_url( get_stylesheet_directory_uri() ) ?>/assets/news_light.svg"
                    alt="TEACHER KIT INCLUSIONS
                "
                  />
                  <h6 class="light">TEACHER KIT INCLUSIONS</h6>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <script src="<?php echo esc_url( get_stylesheet_directory_uri() ) ?>/js/resources.js"></script>

<?php get_footer(); ?>