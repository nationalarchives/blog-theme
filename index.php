
<?php
/**
 * The main template file.
 *
 * @package WordPress
 * @subpackage Redesign
 * @since Redesign HTML5 3.0
 */

get_header(); 
?>
  
 
 <div class="container row banner-seperator">
  <div class="col starts-at-full ends-at-two-thirds box clr min-height">
<div class="filter clr">
          <h2><span>
        <span>All posts</span></span>
    </h2>
</div>
  	

    <?php get_template_part( 'loop', 'index' ); ?>

  </div>
  <?php get_sidebar(); ?>
</div>
<!-- closes main-container -->

<?php get_footer(); ?>