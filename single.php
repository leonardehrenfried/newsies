<?php get_header()?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article class="post">
  <h2 class="entry-title"><?php the_title()?></h2>
  <p class="date"><?php the_date()?></p>
  <div class="entry-content">
  
    <?php the_content()?>
    <p class="pagelink"><?php wp_link_pages('pagelink=Page %&before=&after='); ?></p>

  </div>

  <p class="meta">Filed under: <?php the_category(', '); ?><?php the_tags('<br />Tags: '); ?></p>
  <?php comments_template()?>
</article>
<?php endwhile; ?>
		<div class="navigation">
			<div class="alignleft"><?php previous_post_link('&laquo; %link') ?></div>
			<div class="alignright"><?php next_post_link('%link &raquo;') ?></div>
		</div>
<?php endif; ?>
<?php get_footer()?>
