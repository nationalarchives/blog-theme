<?php
/**
 * The Template for displaying all single pages.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */

get_header(); ?>

  <div id="main" class="clearfix">
        <div id="main-subheader"></div>

 <div id="primary">


 <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
 
     	 <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
         
            <header class="page-header">  

                <div class="comments-link">
                <?php comments_popup_link( '<div class="comments-link-blank">' . __( '', 'starkers' ) . '</div>', _x( '1', 'comments number', 'starkers' ), _x( '%', 'comments number', 'starkers' ) ); ?>
                </div>
            
      <h2><?php the_title(); ?></h2>
                
            </header>


                
                <div class="entry-content clearfix">
				
				<?php the_content( __( 'Continue reading &rarr;', 'starkers' ) ); ?>

    			  </div>
                  
                 <footer>               
		
            </footer> <!-- .entry-content -->     
		
        <?php comments_template( '', true ); ?>
     
   
        </article>


<?php endwhile; // end of the loop. ?>

</div>
<?php get_sidebar(); ?>

    
     </div> <!-- closes main-container --> 

<?php get_footer(); ?>