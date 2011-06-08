<?php get_header()?>

<?php if ( have_posts() ) : ?>

<?php 
if ( is_search() ) { ?><p id="archive-what">Search results for &#8216;<?php the_search_query(); ?>&#8217;</p><?php };
if ( is_category() ) { ?><p id="archive-what">Posts filed under &#8216;<?php single_cat_title(); ?>&#8217;</p><?php };
if ( is_tag() ) { ?><p id="archive-what">Posts tagged with &#8216;<?php single_tag_title(); ?>&#8217;</p><?php };
if ( is_date() ) { ?><p id="archive-what">You are browsing the archive for <?php single_month_title(); ?></p><?php };

while ( have_posts() ) : the_post(); ?>

<article class="post">
<h2 class="entry-title"><a href="<?php the_permalink()?>"><?php the_title()?></a></h2>

<?php if ( is_new_day() ) { ?>
  <p class="date"><?php the_date()?></p>
<?php } ?>

<div class="entry-content">
<?php the_content()?>
</div>

<?php if ( comments_open() ) : ?>
  <p class="meta"><?php comments_popup_link(); ?></p>
<?php endif; ?> 

</article>

<div class="hr"></div>
<?php endwhile; ?>

<?php if (show_posts_nav()) : ?>
		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>
<?php endif; ?>
<?php endif; ?>

<?php get_footer()?>
