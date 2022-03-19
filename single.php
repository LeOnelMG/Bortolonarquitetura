<!DOCTYPE html>
<html lang="pt-br">
<?php include 'head.php'; ?>
<body class="body-single-page">

   <?php include 'menu.php'; ?>

    <div class="container-xxl indvidual-post-center">
            <?php while (have_posts()): the_post(); ?>
        <div class="post-individual-body">
           <div class="thumbnail-post">
            <?php echo get_the_post_thumbnail()?>
           </div><!--thumbnail-post-->
           <div class="tittle-post-individual">
               <h2><?php the_title(); ?></h2>
           </div>
           <div class="content-individual-post">
              <?php the_content(); ?>
           </div>

           <div class="author-informations-individual">

           <figure class="fir-image-figure">

  <a class="fir-imageover" rel="noopener" target="_blank" href="https://twitter.com/_davideast">
    <img class="fir-author-image fir-clickcircle" src=<?php echo get_avatar_url(get_the_author_meta('ID')); ?> alt="David East - Author">
    <div class="fir-imageover-color"></div>
    <img class="fir-imageover-image fir-clickcircle" src=<?php echo get_template_directory_uri() . '/img/newlogopngauthor.png'?> />
  </a>

  <figcaption>
    <div class="fig-author-figure-title"><?php echo get_the_author_meta('display_name'); ?></div>
    <div class="fig-author-figure-title"><?php echo get_the_author_meta('user_description'); ?></div>
    <div class="fig-author-figure-title">Jan. 16th, 2017 &#8212; 5m read</div>
  </figcaption>
</figure>

</div><!--author-individuals-->

        </div><!--post-individual-->
            <?php endwhile; ?>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>

