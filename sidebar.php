<div id="sidebarWrapper">

<a href="/"><div id="header">rice<br />tard<br/ >.nu</div></a>

<div id="sidebar">


<?php
if ( !function_exists('dynamic_sidebar')
|| !dynamic_sidebar() ) : ?>

<?php endif; ?>

<a href="/archives"><h2 style="margin-top:25px;">ARCHIVE</h2></a>

<?php next_posts_link('<span class="drr">&laquo;</span>') ?>
<?php previous_posts_link('<span class="dr">&raquo;</span>') ?>
<?php if ( is_single() ) {?>
<?php previous_post('%', '<span class="drr">&laquo;</span>', 'no'); ?>   
<?php next_post('%', '<span class="dr">&raquo;</span>', 'no'); ?><?php }?>


</div>
</div>