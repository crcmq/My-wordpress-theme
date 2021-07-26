<form method="get" class="searching" action="<?php echo esc_url(home_url('/')); ?>">
    <input type="search" class="search-input" name="s" placeholder="Search here" value="<?php echo 
    get_search_query(); ?>">
    <input type="submit" class="search-btn" value="">
</form>