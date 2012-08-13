<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package Skeleton WordPress Theme Framework
 * @subpackage skeleton
 * @author Simple Themes - www.simplethemes.com
 */

$category = get_the_category();
$cat_id = $category[0]->cat_ID;
if(cat_is_ancestor_of(4, $cat_id))		
{
get_header('newsletter');

?>
	
	<?php
	// Apply the markup
	echo "<a name=\"top\" id=\"top\"></a>";
	echo "<div class=\"container\">";
	get_sidebar('newsletter');
	echo "<div id=\"content\" class=\"eleven columns\">";	
  
	/* Run the loop for the category page to output the posts.
	 * If you want to overload this in a child theme then include a file
	 * called loop-category.php and that will be used instead.
	 */
	get_template_part( 'loop', 'newsletter' );
	st_after_content();
	
	wp_footer();
	echo "</body>";
	echo "</html>";
	?>
	<?
}
else
{
get_header();
st_before_content($columns='');

?>
	
<h1><?php
		printf( single_cat_title( '', false ) );
	?></h1>
	<?php
		$category_description = category_description();
		if ( ! empty( $category_description ) )
			echo '' . $category_description . '';
  
	/* Run the loop for the category page to output the posts.
	 * If you want to overload this in a child theme then include a file
	 * called loop-category.php and that will be used instead.
	 */
	get_template_part( 'loop', 'category' );
	st_after_content();
	get_sidebar();
	get_footer();
}
?>
