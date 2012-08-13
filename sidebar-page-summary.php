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
		<h3 class="widget-title"> <?php echo get_the_title(); ?></h3>
		<div>
			<?php
			$child = $post->ID;
				$args=array(
				  'post_parent'=> $child,
				  'post_type' => 'page',
				  'post_status' => 'publish',
				  'posts_per_page' => -1,
				  'caller_get_posts'=> 1
				);
				$my_query = null;
				$my_query = new WP_Query($args);
				if( $my_query->have_posts() ) {
				  while ($my_query->have_posts()) : $my_query->the_post(); ?>
				    <div class="latest-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></div>
				  <?php endwhile;
				}
				wp_reset_query();  // Restore global post data stomped by the_post().?>
		</div>
	</li>
</li>
<?php do_action('st_after_sidebar');?>

