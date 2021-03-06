<!DOCTYPE html>
<html lang="pt-br">
<?php include 'head.php'; ?>
<body class="jobs-page">

    <?php include 'menu.php'; ?>

    <div class="jobs-title-page">
    <h2>Arquitetura</h2>
    </div>

    <section>
        <div class="container-xxl arquitetura-blog">

        <?php

        $ourCurrentPage = get_query_var('paged');

        $arquiteturaPosts = new WP_Query(array(
            'category_name' => 'Arquitetura',
            'posts_per_page' => 4,
            'paged' => $ourCurrentPage
        )); 
        
        if ($arquiteturaPosts->have_posts()):
            while($arquiteturaPosts->have_posts()): 
            
               $arquiteturaPosts->the_post();

            ?>

            <div class="job-post-definitive">
                <div class="jobs-post-img">
                <img src=<?php the_post_thumbnail_url();  ?> alt="">
                </div>
                <div class="jobs-post-description"> <?php '<h2>'.the_title().'</h2>' ?> </div>
            </div>

            <?php endwhile;
            endif;
        ?>
        </div><!--arquitetura-blog-->
        <div class="container-xxl contai-pagination-all">
        <div class="pagination-posts"> <?php echo '<span>'. paginate_links(array('total' => $arquiteturaPosts->max_num_pages, 'prev_text' => '<span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
</svg></span>','next_text' => '<span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
</svg></span>')) .'</span>' ?> </div>
        </div>
    </section>
    <?php include 'footer.php'; ?>
</body>
</html>