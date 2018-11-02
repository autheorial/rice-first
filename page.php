<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


<h1><?php the_title(); ?> </h1>


<?php the_content(); ?>

<div style="text-align:right"><?php edit_post_link('<b>Edit this page</b>', ' '); ?></div>



<?php comments_template(''); ?>
<?php endwhile; ?>

<?php endif; ?>
</div>


<?php get_footer() ?>