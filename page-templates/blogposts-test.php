<?php
/*
Template Name: Blogposts
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */

get_header(); 
?>


       <div id="main" class="clearfix">
        
        
        <div id="primary">
    <?php get_template_part( 'loop', 'index' ); ?>
 
<?php get_sidebar(); ?>

    </div>
    </div>
     
<?php get_footer(); ?>
