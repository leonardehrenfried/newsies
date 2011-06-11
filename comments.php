<?php
// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
	<?php
		return;
	}
?>

<!-- You can start editing here. -->

<?php if ( have_comments() ) : ?>
  <h3 id="comments"><?php comments_number();?></h3>

  <?php if ((int) get_option('page_comments') === 1): ?>
	  <div class="comment-navigation">
		  <div class="alignleft"><?php previous_comments_link() ?></div>
		  <div class="alignright"><?php next_comments_link() ?></div>
		  <div class="clear"></div>
	  </div>
  <?php endif; ?>

	<ol class="commentlist">
    <?php wp_list_comments(); ?>
	</ol>

<?php if ((int) get_option('page_comments') === 1): ?>
	<div class="comment-navigation">
		<div class="alignleft"><?php previous_comments_link() ?></div>
		<div class="alignright"><?php next_comments_link() ?></div>
		<div class="clear"></div>
	</div>
<?php endif; ?>
 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ( comments_open() ) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments">Comments are closed.</p>

	<?php endif; ?>
<?php endif; ?>


<?php if ( comments_open() ) : ?>

<div id="respond">
  <?php comment_form(); ?>
</div>

<?php endif; // if you delete this the sky will fall on your head ?>
