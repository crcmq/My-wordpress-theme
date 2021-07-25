<form method="get" class="searching" action="<?php echo esc_url(home_url('/')); ?>">
    <input type="search" id="search-input" name="s" placeholder="Search here" value="<?php echo 
    get_search_query(); ?>">
    <input type="submit" id="search-btn" value="">
</form>