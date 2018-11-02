<?php get_header(); ?>




<?php if (have_posts()) : while (have_posts()) : the_post(); ?>



<div id="entry">
<a href="<?php the_permalink() ?>" rel="bookmark" class="blog"><h1><?php the_title(); ?></h1></a>
<date><span class="right" style="margin-bottom:10px;"><?php the_time('F dS, Y') ?> at <?php the_time('h:iA') ?><?php edit_post_link('Edit', ' | '); ?></span></date>

<div id="post">
<?php the_content( ); ?> 
</div>

<dog><span class="right">Filed under <b><?php the_category(', ') ?></b> <?php the_tags('(#',' #', ')'); ?> with <?php comments_popup_link('no comments', '1 comment', '% comments');?>. Would you like to <a href="<?php the_permalink() ?>/#respond">leave one</a>?</span></dog>
</div>

<br />



<?php comments_template(''); ?>

<?php endwhile; ?>

<?php endif; ?>


</div>

<?php get_footer() ?>