<?php
/* If the bellow   category slug is used then load the appropriate layout*/

/* Portfolio styled layouts */
if ( is_category('portfolio-1column-img-left')) {    
include(TEMPLATEPATH . '/templates/category-portfolio-1column-img-left.php'); 

} elseif ( is_category('portfolio-1column-img-right')) {	

include(TEMPLATEPATH . '/templates/category-portfolio-1column-img-right.php');

} elseif ( is_category('portfolio-2column')) { 
include(TEMPLATEPATH . '/templates/category-portfolio-2column.php');

} elseif ( is_category('portfolio-3column')) { 
include(TEMPLATEPATH . '/templates/category-portfolio-3column.php');

} elseif ( is_category('portfolio-4column')) { 
include(TEMPLATEPATH . '/templates/category-portfolio-4column.php');


/* Gallery styled layouts */
} elseif ( is_category('gallery-4column')) { 
include(TEMPLATEPATH . '/templates/category-gallery-4column.php');

} elseif ( is_category('gallery-3column')) { 
include(TEMPLATEPATH . '/templates/category-gallery-3column.php');

} elseif ( is_category('gallery-2column')) { 
include(TEMPLATEPATH . '/templates/category-gallery-2column.php');

} elseif ( is_category('gallery-4column-with-title')) { 
include(TEMPLATEPATH . '/templates/category-gallery-4column-with-title.php');


/* News styled layouts */
} elseif ( is_category('news')) { 
include(TEMPLATEPATH . '/templates/category-news.php');

/* Blog styled layouts */
} elseif ( is_category('blog')) { 
include(TEMPLATEPATH . '/templates/category-blog.php');

/* If there is not slug above then use this file */
} else { 
include(TEMPLATEPATH . '/archive.php');}

?>




