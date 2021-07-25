<?php get_header(); ?>
<script> 
    document.getElementById("banner").classList.add("inactive");
    document.getElementById("top-menu").classList.add("page");
    document.getElementById("banner").innerHTML = "";
</script>
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