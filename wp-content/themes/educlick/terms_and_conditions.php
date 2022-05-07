<?php
/*
Template Name: Terms & Conditions Page
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


<main class="container-fluid terms">
      <div class="container">
        <div class="Main__Terms row">
          <div class="col-12 Main__Terms__info">
            <h1>Terms and conditions</h1>
            <p>
              <strong>eduCLIck</strong> is committed to protecting personal
              information provided and complies with the National Privacy
              Principles, the Information Privacy Principles contained in the
              Commonwealth Privacy Amendment Act (2000), the Victorian
              Information Privacy Act (2000), and the Privacy Amendment
              (Notifiable Data Breaches) Bill 2016.
            </p>
            <p>
              If <strong>eduCLick</strong> for any reason is required to collect
              students, teachers or schools details, collection is by lawful and
              fair means and is not unreasonably intrusive.
            </p>
            <p>
              <strong>eduClick</strong> will make every effort to collect
              personal information directly from the individual student, techer
              or school if required.
            </p>
            <p>
              When working with schools, an order number (purchae order) must be
              submitted. This is confimred as guarenteed payment and the order
              will be met. If <strong>eduClick</strong> can not meet the order,
              refunded money will be returned in consultation with the school
              and <strong>eduCLick</strong>.
            </p>
            <p>
              <strong>eduClick</strong> does not deal with individual student
              directly.
            </p>
            <p>
              <strong>eduCLick</strong> does not sell individual copies directly
              to school, teachers or students, materiasl are provided as per our
              whats the costs menu.
            </p>
            <p>
              All of the materials <strong>eduClick</strong> provide schools are
              solely owned by <strong>eduCLick</strong> and all of the IP
              associaed with our content is owned by <strong>eduCLick</strong>.
              Schools, teachers and students are not permitted to copy,
              reproduce or on sell any of <strong>eduClick</strong>s materials
              without written consent.
            </p>
            <p>
              <strong>eduClick</strong> do not permit and will not lawfully
              tollerate any reproduction of materials.
            </p>
          </div>
          <div class="btn">Copyright and Infringement</div>
        </div>
      </div>
    </main>

<?php get_footer(); ?>