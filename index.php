<!DOCTYPE html>
<html lang="pt-br">
<?php include 'head.php'; ?>    
<body>

   <?php include 'menu.php'; ?>

   <section>

    <div class="container-fluid inicial-container">
        <div class="inicial-text-area">
            <h1>Lorem ipsum dolor sit amet, consectetur.</h1>
            <button> CTA </button>
        </div>
        <video src=<?php echo get_template_directory_uri() . '/img/videodeslide.mp4'?> muted loop autoplay></video>
    </div>

    <div class="container-xxl">

    <?php foreach ($destaqueposts as $posts): ?>
    <div class="service-destaque">
            <div class="information-post">
                <div class="testetxt">
                <?php echo '<h2>'.$posts->post_title.'</h2>' ;?>
                <?php echo '<p>'. $posts->post_excerpt .'</p>' ;?>
                <a href=<?php the_permalink($posts->ID); ?>><button>Ler mais</button></a>
                </div>
            </div><!--information-post-->
            <img src=<?php echo get_the_post_thumbnail_url($posts->ID); ?> alt="Imagem Thumbnail" class="img-fluid">
    </div><!--servico-destaque-->
    <?php endforeach; ?>
    
    <div id="quemsomos" class="quem-somos">
        <h2>Quem somos?</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates magni, nostrum aliquid possimus perspiciatis incidunt hic, ab esse est natus necessitatibus ratione assumenda sed voluptate veritatis laborum reprehenderit soluta.</p>
    </div>

    <div class="all-inicial-posts">
        <div class="title-inicial-posts"> <h2>Ultimas postagens</h2> </div>
    <div class="inicial-blog">

    <?php foreach ($mypostsblog as $post): ?>
       <a style="text-decoration: none; " href=<?php the_permalink(); ?> >
        <div class="inicial-post">
            <div class="image-post-inicial">
            <img src=<?php the_post_thumbnail_url(); ?> alt="imagem-destaque">
            </div>
            <div class="description-post">
               <?php echo '<h2>'.$post->post_title.'</h2>' ;?>
                <?php echo '<p>'. $post->post_excerpt .'</p>' ;?>
            </div>
        </div>
    </a>

        <?php endforeach; ?>

        </div><!--inicial-blog-->
    </div><!--noticias-inicialpage-->

    </div><!--container-xxl-->

    <div class="container-fluid depoimentos-container">
        <div class="depoimento-description">
            <h2>Lorem ipsum dolor sit</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. debitis suscipit sed nostrum hic repellendus tempora eaque pariatur modi aut.</p>
        </div>

        <div class="swiper mySwiper">
            <div class="swiper-wrapper">

            <?php foreach ($depoimentos as $depoimento): ?>
              <div class="swiper-slide">
                  <div class="img-depoiment">
                  <img src=<?php echo get_the_post_thumbnail_url($depoimento->ID, 'thumbnail'); ?> alt="usuário de depoimento">
                  </div><!--img-depoiment-->
                  <div class="depoiment-text">
                  <?php echo '<h2>'. $depoimento->post_title .'</h2>'; ?>
                  <?php echo '<p>'. $depoimento->post_content .'</p>'; ?>
              </div><!--depoiment-text-->
              </div><!--swiper-slide-->
              <?php endforeach; ?>

              </div><!--swiper-wrapper-->
            <div class="position-slide">
            <div class="navegation-slide">
            <div class="swiper-button-next"></div>
            <div style="left: -30px" class="swiper-button-prev"></div>
            </div>
            </div><!--navegation-->
          </div><!--swiper MySwiper-->

    </div><!--depoimento-container-->
   </section><!--section-containeres-->

   <?php include 'footer.php'; ?>

   <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

   <script>
       var swiper = new Swiper(".mySwiper", {
        slidesPerView: "auto",
        centeredSlides: true,
        spaceBetween: 30,
        autoplay: {
            delay: 3000,
        },
        
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
   </script>

</body>
</html>