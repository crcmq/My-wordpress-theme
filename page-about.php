<?php get_header(); ?>
<script> 
    document.getElementById("banner").classList.add("inactive");
    document.getElementById("top-menu").classList.add("page");
    document.getElementById("banner").innerHTML = "";
</script>
<main id="main">
<div id="post-container"> 
            <?php while (have_posts()) {
                the_post();
            ?>          
            <section id="blogpost">   
                <a class="section-title"><?php the_title() ?></a>             
                <div class="article">
                    <div>&nbsp;</div>
                    <hr>
                    <div class="article-content">
                        <?php the_content(); ?>
                    </div>
                </div> 
                                              
            </section>
            <?php } ?>
            <aside id="side-bar">

                <?php 
                    get_search_form();
                    dynamic_sidebar('main_sidebar'); 
                ?>
                <p></p>
            </aside>
        </div>  
</main>



<?php get_footer(); ?>