<?php get_header(); ?> 
<script> 
    document.getElementById("top-menu").classList.remove("page"); 
</script>
<div id="banner">  
            <div id="page-title"><h1>Mengqiu's Blog</h1></div>
</div>
<!-- Main section -->
        <main id="main">
            <a href="<?php echo site_url('/blog') ?>" class="front-section-title">Blogs</a>

            <section id="posts-section">
<!-- regular post section -->
            <?php 
                $args = array (
                    'post_type' => 'post',
                    'post_per_page' => 8,    
                );

                $blogposts = new WP_Query($args);
                $post_count = 0;
                while ($blogposts->have_posts()) {
                    $blogposts->the_post();
            ?>
            <!-- For each card of post -->
            <div class="card">
                    
                    <?php echo the_category('');?>
                    
                    <a href="<?php echo the_permalink(); ?>">
                        <h2 class="post-title"><?php the_title(); ?></h2>
                    </a>
                    <a class="post-time">
                        <?php echo the_time('Y-m-d');?>
                    </a>
                    <div class="post-excerpt">
                        <?php echo wp_trim_words(get_the_excerpt(), 150); ?>
                    </div>
                    <div class="post-tags">
                        <?php
                            echo get_the_tag_list(' ');                        
                        ?>  
                    </div>
                    <a href="<?php echo the_permalink(); ?>"class="btn-readmore">Read more</a>
                </div>
<!-- End of one card -->          
            <?php
                    $post_count++;
                    if($post_count >=4) break;
                }
                wp_reset_query();
            ?>
<!-- Projects section -->                
            </section>
            <a class="front-section-title" href="<?php echo site_url('/projects') ?>">Projects</a>
            <section id="projects-section">

            <?php 
                $args = array (
                    'post_type' => 'project',
                    'post_per_page' => 8,    
                );

                $blogposts = new WP_Query($args);
                $post_count = 0;
                while ($blogposts->have_posts()) {
                    $blogposts->the_post();
            ?>
            <!-- For each card of post -->
            <div class="card">
                    
                    <?php echo the_category('');?>
                    
                    <a href="<?php echo the_permalink(); ?>">
                        <h2 class="post-title"><?php the_title(); ?></h2>
                    </a>
                    <a class="post-time">
                        <?php echo the_time('Y-m-d');?>
                    </a>
                    <div class="post-excerpt">
                        <?php echo wp_trim_words(get_the_excerpt(), 150); ?>
                    </div>
                    <div class="post-tags">
                        <?php
                            echo get_the_tag_list(' ');                        
                        ?>  
                    </div>
                    <a href="<?php echo the_permalink(); ?>"class="btn-readmore">Read more</a>
                </div>
<!-- End of one card -->          
            <?php
                    $post_count++;
                    if($post_count >= 4) break;
                }
                wp_reset_query();
            ?>              
            </section>
        </main>
<?php get_footer(); ?>        