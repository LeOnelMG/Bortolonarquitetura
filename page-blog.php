<?php?>
<!DOCTYPE html>
<html lang="pt-br">
<?php include 'head.php'; ?>
<body>

    <?php include 'menu.php'; ?>

    <section>
        <div class="container-fluid jobs-header">
            <h2>Mais lidas</h2>
        </div><!--container-fluid-->

        <div class="container-xxl">
            <div class="inicial-blog">
                <div class="inicial-post inicial-definitive">
                    <div class="image-post-inicial">
                    <img src=<?php echo get_template_directory_uri() . '/img/pexels-danish-ahmad-4125267.jpg'?> alt="">
                    </div>
                    <div class="description-post">
                        <h2>Lorem ipsum dolor si</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem blanditiis obcaecati doloribus fugit, eos necessitatibus quo enim sed.</p>
                    </div>
                </div>
                    
                <div class="inicial-post inicial-definitive">
                    <div class="image-post-inicial">
                    <img src=<?php echo get_template_directory_uri() . '/img/pexels-daria-shevtsova-3339460.jpg'?> alt="">
                    </div>
                    <div class="description-post">
                        <h2>Lorem ipsum dolor si</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem blanditiis obcaecati doloribus fugit, eos necessitatibus quo enim sed.</p>
                    </div>
                </div>
            
                <div class="inicial-post inicial-definitive">
                    <div class="image-post-inicial">
                    <img src=<?php echo get_template_directory_uri() . '/img/pexels-brayden-law-1738986.jpg'?> alt="">
                    </div>
                    <div class="description-post">
                        <h2>Lorem ipsum dolor si</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem blanditiis obcaecati doloribus fugit, eos necessitatibus quo enim sed.</p>
                    </div>
                </div>
        
                </div><!--inicial-blog-->        
        </div><!--container-xxl-->
    </section>

    <section>
        <div class="container-fluid container-posts-definitive">
            <div class="container-xxl">
            <div class="post-definitive-all">

            <?php

$ourCurrentPage = get_query_var('paged');

$arquiteturaPosts = new WP_Query(array(
    'category_name' => 'Blog',
    'posts_per_page' => 6,
    'paged' => $ourCurrentPage
)); 

if ($arquiteturaPosts->have_posts()):
    while($arquiteturaPosts->have_posts()): 
    
       $arquiteturaPosts->the_post();

    ?>
                <?php //echo var_dump($post)?>
                <div class="post-definitive">
                    <div class="img-post">
                        <img src=<?php echo the_post_thumbnail_url()?> alt="">
                    </div><!--img-post-->

                        <div class="data-post">
                            <?php echo '<span>'.$post->post_date.'</span>';?>
                            <p>Por: <?php echo '<b>'. get_the_author_meta('display_name', $post->post_author) .'</b></p>'; ?>
                        </div><!--data-post-->

                        <div class="def-description-post">
                         <?php echo '<h2>'. $post->post_title . '</h2>'; ?>
                            <a href=<?php the_permalink(); ?>>Ler mais</a>
                        </div>
                </div><!--post-definitive-->

                <?php endwhile;
            endif;
        ?>
            </div><!--post-definitive-all--> 
            <div class="container-xxl">
        <div class="pagination-posts"> <?php echo '<span>'. paginate_links(array('total' => $arquiteturaPosts->max_num_pages, 'prev_text' => '<span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
</svg></span>','next_text' => '<span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
</svg></span>')) .'</span>' ?> </div>
        </div>
        </div><!--container-xxl-->
        </div><!--container-fluid-->
    </section>

    <section>
        <div class="container-fluid">
            <div class="container-xxl formulario-blog">
                <label for="nome"><h2>Receba os conteúdos</h2></label>
                <div class="inputs-formulario">
                <input type="text" name="nome" id="nome" placeholder="Nome">
                <input type="email" name="email" id="email" placeholder="E-mail">
            </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

</body>
</html>