<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
   <head>
<link rel="shortcut icon" type="image/x-icon" href="http://ricetard.nu/wp-content/themes/first/ghost.ico" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale=1.0">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<title><?php bloginfo('name'); ?><?php wp_title('&bull;'); ?></title>
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); wp_head(); ?>

   </head>
     <body>







<div id="container">

<?php get_sidebar(); ?>

<nav role="navigation" class="site-navigation main-navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav>

<div id="pn"><?php next_posts_link('<span class="drr">&laquo;</span>') ?>
<?php previous_posts_link('<span class="dr">&raquo;</span>') ?>
<?php if ( is_single() ) {?>
<?php previous_post('%', '<span class="drr">&laquo;</span>', 'no'); ?>   
<?php next_post('%', '<span class="dr">&raquo;</span>', 'no'); ?><?php }?>
</div>

<div id="content">