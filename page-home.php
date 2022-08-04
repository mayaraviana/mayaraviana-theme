<?php
// Template Name: Home
?>
<?php get_header(); ?>


<section class="hero">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-lg-8">
        <h1 class="hero-heading">
          <?php echo get_post_meta(get_the_ID(), 'tituloh1', true); ?>
        </h1>
        <h3 class="mt-3 mb-3"><?php echo get_post_meta(get_the_ID(), 'trabalho_atual', true); ?></h3>
      </div>
      <div class="col-12 col-lg-3">
        <img src=" <?php echo get_post_meta(get_the_ID(), 'imagem', true); ?>" alt="Myself photo" class="img-fluid" />
      </div>
      <div class="col-12 col-lg-1"></div>
    </div>
  </div>
</section>
<section id="works" class="section works mt-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 mb-4">
        <h2><?php echo get_post_meta(get_the_ID(), 'titulo_secao2', true); ?></h2>
      </div>
    </div>
    <div class="row justify-content-center mb-5" data-aos="fade-up" data-aos-delay="200">
      <div class="col-12 col-lg-6 item">
        <a href="<?php echo get_post_meta(get_the_ID(), 'link_Figma', true); ?>" target="_blank" class="item-wrap">
          <img src="<?php echo get_post_meta(get_the_ID(), 'imagem_trabalho', true); ?>" alt="Work 1" class="img-fluid" />
        </a>
      </div>
      <div class="col-12 col-lg-6 mt-5 item">
        <h3 class="mt-2 mb-4"><?php echo get_post_meta(get_the_ID(), 'titulo_trabalho', true); ?></h3>
        <p class="p-text">
          <?php echo get_post_meta(get_the_ID(), 'texto_trabalho', true); ?>
        </p>
        <a href="<?php echo get_post_meta(get_the_ID(), 'link_Figma', true); ?>" class="font-weight-bold webnotes-link mt-3" target="_blank">See Figma file <span class="blue">↗</span></a>
      </div>
    </div>
    <div class="d-block d-md-none row justify-content-center align-items-center mb-5 mt-5">
      <div class="col-12 col-md-6 d-flex justify-content-center">
        <a target="_blank" href="./assets/pdfs/PortfolioMayaraViana.pdf">
          <button class="btn btn-dark btn-custom mt-5 mb-5">
            BAIXE MEU PORTFOLIO COMPLETO <img class="img-fluid" style="height: 30px;" src="./assets/img/brazil.png"> ↓
          </button></a>
      </div>
      <div class="col-12 col-md-6 d-flex justify-content-center">
        <a target="_blank" href="./assets/pdfs/EnglishPortfolioMayaraViana.pdf">
          <button class="btn btn-dark btn-custom mt-5 mb-5">
            DOWNLOAD MY COMPLETE PORTFOLIO <img class="img-fluid" style="height: 30px;" src="./assets/img/usa.png"> ↓
          </button></a>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="d-none d-md-block container mt-5 pt-5">
    <div class="row">
      <div class="col-12">
        <h2><?php echo get_post_meta(get_the_ID(), 'titulo_secao3', true); ?></h2>
      </div>
      <div class="col-12">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="<?php echo get_post_meta(get_the_ID(), 'imagem_random1', true); ?>" alt="First slide" />
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="<?php echo get_post_meta(get_the_ID(), 'imagem_random2', true); ?>" alt="Second slide" />
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>

<script src="<?php echo esc_url(get_stylesheet_directory_uri() . '/js.js'); ?>">
</script>
<script src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/vendor/aos/aos.js'); ?>"></script>
<script>
  AOS.init();
</script>

<script async src=" https://unpkg.com/typer-dot-js@0.1.0/typer.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>