<?php get_header(); ?>


<div id="banner" class="inactive"></div>
<main id="main">
    <a class="section-title"><?php the_title()?></a>
    <section id="posts-section">
        <?php 
            while (have_posts()) {
                the_post();
                the_content();
            }
        ?>
    </section>
</main>



<?php get_footer(); ?>