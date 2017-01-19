<?php
/**
 * The Template for displaying all single pages.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */

get_header(); ?>

<div class="container row banner-seperator">
  <div class="col starts-at-full ends-at-two-thirds box clr " id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>

<div class="breather"> 
 <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
 

            <h2 class="inline headline"><?php the_title(); ?></h2>
                
               <span class="entry-meta"><?php the_time('l j F Y ') ?>
          | 
          <!-- Date end -->
          
          <?php if(function_exists('coauthors_posts_links'))
              coauthors_posts_links();
              else
              the_author_posts_link(); ?>
           |  
          <!--the_author_posts_link(); -->
          
          <?php
        /* translators: used between list items, there is a space after the comma */
        $categories_list = get_the_category_list( __( ', ', 'Redesign' ) );
      ?>
    
          <?php comments_popup_link( '' . __( 'Comment', 'Redesign' ) . '', _x( '1 comment', 'comments number', 'Redesign' ), _x( '% comments', 'comments number', 'Redesign' ) ); ?> 


        </span>
        <!-- .entry-meta -->

  <div class="entry-content border-top  clearfix">
				<?php the_content( __( 'Continue reading &rarr;', 'Redesign' ) ); ?>
      </div>
                  
                  
        <?php comments_template( '', true ); ?>
      <div class="disclaimer">We will not be able to respond to personal family history research questions on the blog.<br/> See our <a href="/moderation-policy">moderation policy</a> for more details.
</div>
 </div>


<?php endwhile; // end of the loop. ?>

</div>
<?php get_sidebar(); ?>

     </div> <!-- closes main-container --> 

<?php get_footer(); ?>