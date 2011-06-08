<form id="searchform" method="get" action="<?php bloginfo('url')?>">
<p>
<input type="text" name="s" id="s" size="15" value="<?php the_search_query(); ?>" />
<input type="submit" value="Find" />
</p>
</form>