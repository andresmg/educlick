<?php
/*
Template Name: Contact Us Page
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


<main class="container-fluid contact">
      <div class="row justify-content-between">
        <div class="Main__Contact__back col-sm-8 col-12"></div>
        <div class="Main__Contact col-sm-4 col-12 Form">
          <h1>Contact us</h1>
          <form action="">
            <div class="form-floating mb-3">
              <input
                type="name"
                class="form-control"
                id="floatingInput"
                placeholder="name@example.com"
              />
              <label for="floatingInput">Name</label>
            </div>
            <div class="form-floating mb-3">
              <input
                type="email"
                class="form-control"
                id="floatingInput"
                placeholder="name@example.com"
              />
              <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
              <textarea
                class="form-control"
                placeholder="Leave a comment here"
                id="floatingTextarea2"
                style="height: 160px"
              ></textarea>
              <label for="floatingTextarea2">Message</label>
            </div>
            <div class="mb-3">
              <button class="btn" type="submit">Send message</button>
            </div>
          </form>
          <div class="row Main__Contact__rrss">
            <div class="col-sm-6 col-12 mail">
              <a href="mailto:zane@educlick.com.au">zane@educlick.com.au</a>
            </div>
            <div class="col-sm-6 col-12 mail">
              <a href="mailto:clair@educlick.com.au">clair@educlick.com.au</a>
            </div>
            <div class="col-sm-6 col-12 tel">
              <a href="tel:0455716777">0455716777</a>
            </div>
            <div class="col-sm-6 col-12 instagram">
              <a href="https://www.instagram.com/eduClickAU" target="_blank">
                eduClickAU</a
              >
            </div>
          </div>
        </div>
      </div>
    </main>

<?php get_footer(); ?>