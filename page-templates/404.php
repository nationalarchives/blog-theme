<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */

get_header(); ?>

  <div id="main" class="clearfix">
        <div id="main-subheader"></div>

 <div id="primary">
 
 <div id="header-filter">
 	<div id="header-filter-description">
        <h2>Sorry, the page you were looking for can't be found.</h2>
            <p>The page may have been moved, updated or deleted. We may have a missing page or an incorrect link. Please <a href="http://www.nationalarchives.gov.uk/contact">contact us</a> to let us know and we will correct our mistake.</p>

<p>We recommend you start again from the <a href="<?php bloginfo( 'url' ); ?>" />homepage</a>.
</p>
</div>
</div>
 
 </div>
 
 
<?php get_sidebar(); ?>
    
     
</div>
<?php get_footer(); ?>