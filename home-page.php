<?php
/**
 * Template Name: Home Page
 * @package Skeleton WordPress Theme Framework
 * @subpackage skeleton
 * @author Simple Themes - www.simplethemes.com
*/

get_header();
// count the active widgets to determine column sizes
$footerwidgets = is_active_sidebar('first-box-widget-area') + is_active_sidebar('second-box-widget-area') + is_active_sidebar('third-box-widget-area') + is_active_sidebar('fourth-box-widget-area');
// default
$footergrid = "one_fourth";
// if only one
if ($footerwidgets == "1") {
$footergrid = "full-width";
// if two, split in half
} elseif ($footerwidgets == "2") {
$footergrid = "one_half";
// if three, divide in thirds
} elseif ($footerwidgets == "3") {
$footergrid = "one_third";
// if four, split in fourths
} elseif ($footerwidgets == "4") {
$footergrid = "one_fourth";
}

?>

<?php if ($footerwidgets) : ?>
<div id="callouts" class="container">
<?php if (is_active_sidebar('first-box-widget-area')) : ?>
<div class="<?php echo $footergrid;?>">
	<?php dynamic_sidebar('first-box-widget-area'); ?>
</div>
<?php endif;?>

<?php if (is_active_sidebar('second-box-widget-area')) : $last = ($footerwidgets == '2' ? ' last' : false);?>
<div class="<?php echo $footergrid.$last;?>">
	  <?php dynamic_sidebar('second-box-widget-area'); ?>
</div>
<?php endif;?>

<?php if (is_active_sidebar('third-box-widget-area')) : $last = ($footerwidgets == '3' ? ' last' : false);?>
<div class="<?php echo $footergrid.$last;?>">
	  <?php dynamic_sidebar('third-box-widget-area'); ?>
</div>
<?php endif;?>

<?php if (is_active_sidebar('fourth-box-widget-area')) : $last = ($footerwidgets == '4' ? ' last' : false);?>
<div class="<?php echo $footergrid.$last;?>">
		  <?php dynamic_sidebar('fourth-box-widget-area'); ?>
</div>
<?php endif;?>
<div class="clear"></div>
</div>
<?php endif;?>

<?php st_before_content($columns='ten');?>

<h2><?php echo of_get_option('home_main_title'); ?></h2>
<p><?php echo of_get_option('home_main_text'); ?></p>

<h3>Video Spotlight</h3>
<object class="vid">
	<param name="movie" value="<?php echo of_get_option('video_spotlight'); ?>"></param>
	<param name="allowFullScreen" value="true"></param>
	<param name="allowscriptaccess" value="always"></param>
	<param name="wmode" value="opaque">
	<embed src="<?php echo of_get_option('video_spotlight'); ?>" type="application/x-shockwave-flash" width="360" height="203" allowscriptaccess="always" allowfullscreen="true" wmode="opaque"></embed>
</object>

<?php
st_after_content();
get_sidebar('home');
get_footer();
?>
