<?php
/*
Template Name: Archives
*/
get_header(); ?>

<?php the_post(); ?>

<h1>Search</h1>
		<?php get_search_form(); ?>

<h1 class="entry-title"><?php the_title(); ?></h1>
		
		<ul>
		<?php wp_get_archives('type=monthly&show_post_count=true' ); ?>	
		</ul>	
		<h1>Most Recent</h1>
		<ul>
			<?php wp_get_archives('type=postbypost&limit=5'); ?>
		</ul>

		<h1>Tags</h1>
		<br /><?php wp_tag_cloud('smallest=8&largest=22'); ?><br /><br />
		
		<h1>Categories</h1>
		<ul>
			<?php
$categories = get_categories();
foreach ($categories as $cat) {
	if ($cat->category_parent != 0) {
		echo '<span style="padding-left:10px;">';
	}
	echo '<li><b><a href="'.get_option('home').get_option('category_base').'/category/'.$cat->category_nicename.'/">'.$cat->cat_name.'</b></a>';
	if ($cat->category_description != '') {
		echo ' - '.$cat->category_description;
	}
	if ($cat->category_parent != 0) {
		echo '</span>';
	}
	echo '</li>';
}
?>
		</ul>
		
	</div>
</div>

<?php get_footer(); ?>