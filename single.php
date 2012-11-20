<?php
$post = $wp_query->post;
if ( in_category('blog') or ( in_category('archive')) ) {
  include(TEMPLATEPATH . '/lib/includes/single-blog.php'); 
 
 }
 else {
  include(TEMPLATEPATH . '/lib/includes/single-default.php');

}
?>

