<?php

if ( post_password_required() )
    return;
?>

<div id="comments" class="comments-area">

<?php if ( have_comments() ) : ?>
    <h4 id="comments"><?php comments_number('No Comments', 'One Comment', '% Comments' );?></h4>
    <ul class="commentlist">
        <?php wp_list_comments(); ?></ul>
    <div class="navigation">
    <div class="alignleft"><?php previous_comments_link() ?></div>
    <div class="alignright"><?php next_comments_link() ?></div>
    </div>
    <?php else : // this is displayed if there are no comments so far ?>
        <?php if ( comments_open() ) : ?>
            <!-- <p>No comments so far.</p> -->
        <?php else : // comments are closed ?>
    <?php endif; ?>
<?php endif; ?>

<?php comment_form(); ?>

</div><!-- #comments -->
