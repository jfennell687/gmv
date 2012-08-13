<?php
/**
 * The Sidebar containing the primary blog sidebar
 *
 * @package WordPress
 * @subpackage skeleton
 * @since skeleton 0.1
 */
?>
<?php do_action('st_before_sidebar');?>

<ul>
	<li class="widget-container">
		<h3 class="widget-title">In This Newsletter...</h3>
		<ul>
<?php
$IDOutsideLoop = $post->ID;
	foreach( ( get_the_category() ) as $category )
		$my_query = new WP_Query('category_name=' . $category->category_nicename . '&showposts=100');
	if( $my_query ) {
		while ( $my_query->have_posts() ) {
			$my_query->the_post(); ?>
			<li>
				<a href="#<?php the_ID(); ?>" title="<?php the_title(); ?>" class="anchorLink"><?php the_title(); ?></a>
			</li>
<?php
		}
	}
?>
		</ul>
	</li>
</ul>


<?php do_action('st_after_sidebar');?>

