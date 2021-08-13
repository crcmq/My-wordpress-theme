<?php get_header(); ?>

<div id="banner" class="inactive"></div>
<script>hljs.highlightAll();</script>
<main id="main">
        
    <div id="post-container"> 
        <?php while (have_posts()) {
            the_post();
        ?>          
        <section id="blogpost">   
            <a class="section-title"><?php the_title() ?></a>             
            <div class="article">
                <div class="article-meta">
                                            
                    <a class="single-post-time">
                        <?php echo the_time('Y-m-d');?>
                    </a>
                    
                    <div class="single-post-category"><i class="fa fa-bookmark"></i><?php echo the_category('');?></div>
                    <div class="single-post-tags">
                        <i class="fa fa-tags"></i>
                        <?php
                            echo get_the_tag_list(' ');                        
                        ?>  
                    </div>   
                </div>
                <hr>
                <div class="article-content">
                    <?php the_content(); ?>
                </div>
            </div> 
            
            <section id="comments-section">  
                <?php
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;
                ?>
            </section>                 
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