<!DOCTYPE html>
<html>
    <head>
        <title>
            Mengqiu (Roger) Chen
        </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content ="ie=edge">
        <link rel="icon" href="<?php echo get_template_directory_uri() . '/image/logo.jpg'; ?>" type="image/x-icon">
        <?php wp_head();?>
    </head>
    <body>
        <script>hljs.highlightAll();</script>
        <div id="slide-out-menu">
            <div id="slide-out-menu-items">
                <a href="<?php echo site_url('/home');?>">Home</a>
                <a href="<?php echo site_url('/blog');?>">Blog</a>
                <a href="<?php echo site_url('/projects');?>">Projects</a>
                <a href="<?php echo site_url('/about');?>">About</a>
                <a href="<?php echo site_url('/contact');?>">Contact</a>               
                               
                <div class="searchbox-slide-menu">
                    <?php get_search_form(); ?>
                </div>
            </div>            
        </div>
        <nav id="top-menu">
            <div id="web-icon">
                <a href="<?php echo site_url('/home');?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/image/20150901033150 (2).JPG" alt="site logo">
                </a>
                <a href="<?php echo site_url('/home');?>">
                    <div id="web-title">
                        <h4>Mengqiu's Blog</h4>
                    </div>
                </a>
            </div>
                      
            <div id="menu-icon" class="top-menu-icon" onclick="menuIconToggle(this);">
                <div class="menu-icon-bar1"></div>
                <div class="menu-icon-bar2"></div>
                <div class="menu-icon-bar3"></div>
            </div>
            <ul id="menu-items">
                <li><a href="<?php echo site_url('/home');?>">Home</a></li>
                <li><a href="<?php echo site_url('/blog');?>">Blog</a></li>
                <li><a href="<?php echo site_url('/projects');?>">Projects</a></li>
                <li><a href="<?php echo site_url('/about');?>">About</a></li>
                <li><a href="<?php echo site_url('/contact');?>">Contact</a></li>  
                <li>
                    <div id="search-icon">
                        <i class="fas fa-search"></i>
                    </div>
                </li> 
                <li>
                    <div id="search-box" >
                        <?php get_search_form(); ?>
                    </div> 
                </li>                          
            </ul>                       
        </nav>        
        <div id="banner">  
            <div id="page-title"><h1>Mengqiu's Blog</h1></div>
        </div>
