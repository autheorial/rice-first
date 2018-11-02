<?php get_header(); ?>



<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div id="entry">
<a href="<?php the_permalink() ?>" rel="bookmark" class="blog"><h1><?php the_title(); ?></h1></a>
<date><span class="right" style="margin-bottom:10px;"><?php the_time('F dS, Y') ?> at <?php the_time('h:iA') ?><?php edit_post_link('Edit', ' | '); ?></span></date> 

<div id="post">
<?php the_content( 'Read More &raquo;' , TRUE, ''); ?> 

<dog><span class="right">Filed under <b><?php the_category(', ') ?></b> <?php the_tags('(#',' #', ')'); ?> with <?php comments_popup_link('no comments', '1 comment', '% comments');?>. Would you like to <a href="<?php the_permalink() ?>/#respond">leave one</a>?</span></dog>
</div>
</div>
<div style="clear:both"></div>

<hr />


<?php endwhile; ?>




<?php else : ?>

<h1>Error</h1>

<div id="entry">
<p>This page does not exist! If you've clicked on a broken link, feel free to <a href="http://dumb.ricetard.nu">contact me</a> :)</p>

<p>You can try looking in the <a href="/archives">archives or searching</a> if you are looking for a particular post. <a href="http://love.ricetard.nu/" target="_blank">My network</a> also branches out to my various subdomains, which are separated into web/content, fanlistings, and portfolio.</p>

<h3>Other Info</h3>

<p>My default and preferred browser is Google Chrome, which has the theme "pink pixel." I own a Macbook Pro, but my previous laptop was a Windows XP. File editing is often done in the WordPress theme editor, cPanel, or via Filezilla uploads. TextWrangler is my coding application. I use <a href="http://www.apachefriends.org/en/xampp.html" target="_blank">XAMPP</a> when making themes, for preview. <a href="http://ic.pics.livejournal.com/kingdra/21835039/152028/152028_1000.png">Current desktop wallpaper.</a></p>

<p>This theme is responsive for desktops, tablets, smartphones, and most screen resolutions. It is identical in nearly all browsers, and more recent versions of Internet Explorer.</p>

<p><a href="skype:ricetard?add">Add me on Skype?</a></p>

</div>



<?php endif; ?>
</div>


<?php get_footer() ?>