<?php

if ( post_password_required() )
    return;
?>
 
<div id="comments" class="comments-area">
 
    
    <h2 class="comments-title">
        Comments
    </h2>

    <?php 
        $fields = array (
            'author' =>
                '<input placeholder="Name" id="author" name="author" type="text" value="' . 
                esc_attr( $commenter['comment_author']) .
                '" size="30" pattern="[A-Za-z.\- _]+" required' . ' />',
            'email' =>
                '<input placeholder="Email"  id="email" name="email" type="email" value="' .
                esc_attr( $commenter['comment_author_email']) .
                '" size="30" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]" required' . ' />',
            'cookies' => ''
        );

        $args = array (
                        'fields' => $fields,
                        'comment_field' => '<textarea placeholder="Your comment" id="comment" name="comment" cols="50" rows="8" maxlength="65525" required></textarea>',
                        'comment_notes_before' => '<p class="comment-notes">Your email address will not be published.</p>'
                        );
        comment_form($args); 
    ?>
    <?php if ( have_comments() ) : ?>
        <ol class="comment-list">
            <?php
                wp_list_comments( array(
                    'style'       => 'ul',
                    'short_ping'  => true,
                    'avatar_size' => 32,
                ) );
            ?>
        </ol><!-- .comment-list -->
 
        <?php
            // Are there comments to navigate through?
            if ( get_comment_pages_count() > 5 && get_option( 'page_comments' ) ) :
        ?>
        <nav class="navigation comment-navigation" role="navigation">
            <h1 class="screen-reader-text section-heading"><?php _e( 'Comment navigation'); ?></h1>
            <div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments') ); ?></div>
            <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;') ); ?></div>
        </nav><!-- .comment-navigation -->
        <?php endif; // Check for comment navigation ?>
 
        <?php if ( ! comments_open() && get_comments_number() ) : ?>
        <p class="no-comments"><?php _e( 'Comments are closed.'); ?></p>
        <?php endif; ?>
 
    <?php endif; // have_comments() ?>
 
    
 
</div>
<script>document.getElementById("commentform").removeAttribute("novalidate");</script><!-- #comments -->