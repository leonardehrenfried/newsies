<!--begin sidebar.php-->
<ul id="sidebar">
<?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar() ) : ?>
<?php wp_list_pages('title_li=<h2>Pages</h2>')?>
<?php wp_list_categories('title_li=<h2>Categories</h2>')?>
<?php endif; ?>
</ul>
<!--end sidebar.php-->