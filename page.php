<?php get_header()?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="entry">
<h2 class="entry-title"><?php the_title()?></h2>
<div class="entry-content">
<?php the_content()?>
</div>
<?php if ( comments_open() ) : ?>
<?php comments_template()?>
<?php endif; ?> 
</div>
<?php endwhile; endif; ?>

<?php get_footer()?>