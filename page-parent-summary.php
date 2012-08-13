<?php
/**
 * Template Name: Parent Page Summary
 *
 * @package bbPress
 * @subpackage Theme
 */

get_header();
st_before_content($columns='', TRUE);
get_template_part( 'loop', 'page-summary' );
st_after_content();
get_footer();
?>