<?php get_header(); ?>
<script> 
    document.getElementById("banner").classList.add("inactive");
    document.getElementById("top-menu").classList.add("page");
    document.getElementById("banner").innerHTML = "";
</script>
<main id="main">
<div class="container-404">
    <h2 class="page-heading"> 404: Can't get what you searched </h2>
    <img id="img-404" alt="404-image" src="<?php echo get_template_directory_uri() . '/image/404.jpg'; ?>">
    
    <div id="search-again"><?php get_search_form(); ?></div>
</div>
</main>
<?php get_footer(); ?>