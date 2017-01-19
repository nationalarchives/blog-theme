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
 
 
 <?php if ( ! have_posts() ) : ?>
        <h2><?php _e( 'Not Found', 'starkers' ); ?></h2>
            <p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'starkers' ); ?></p>
<?php endif; ?>

 	<div id="header-filter">
                          <div id="header-filter-description">
                           <h2>
                           <?php $post = $posts[0]; // Set $post so that the_date() works. ?>
       <?php /* If this is a category archive */ if (is_category()) { ?>
        Posts under the '<?php single_cat_title(); ?>' category
       <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
        Posts tagged '<?php single_tag_title(); ?>'
       <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
        Posts from <?php the_time('F jS Y'); ?>
       <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
        Posts from <?php the_time('F Y'); ?>
        <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
        Posts from <?php the_time('Y'); ?>
       <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
        Blog Archives
        
               
        
       <?php } ?>
                           </h2>

                           </div> <!-- header-filter-description -->
                    </div>



 <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
 
 
 
     	 <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
         
         <!-- Date start --> 
                <div class="entry-date-wrapper"></div>
                <div class="entry-header-date">
				<div class="entry-date"><?php the_time('j') ?></div>
                <div class="entry-date-dm"><?php the_time('D M') ?></div>
                <div class="entry-date-y"><?php the_time('Y') ?></div>
				</div>
                <!-- Date end --> 
                <!-- Blog post header start -->
			
            <header> 	

			<h2><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'starkers' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>


            	<div class="entry-meta">
                
                <span class="sep">Posted by <a href="<?php $author = get_query_var('author'); echo get_author_posts_url( $author ); ?>"><?php if(function_exists('coauthors_posts_links'))
    					coauthors_posts_links();
							else
    					the_author_posts_link(); ?></a></span> 
                <!--the_author_posts_link(); -->

				<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', 'starkers' ) );
			?>
            
			<span class="cat-links">
				<?php printf( __( '<span class="%1$s"> in</span> %2$s', 'starkers' ), 'entry-utility-prep entry-utility-prep-cat-links', $categories_list );
				$show_sep = true; ?>
			</span>
			

						<?php edit_post_link( __( 'Edit', 'starkers' ), '<span class="edit-link">', '</span>' ); ?>
       
			</div><!-- .entry-meta -->
            

            </header>

                
                <div class="entry-content clearfix">
				
				<?php the_content( __( 'Continue reading &raquo;', 'starkers' ) ); ?>

    			  </div>
                  
    
		
        <?php comments_template( '', true ); ?>
     
   
        </article>

         


	



<?php endwhile; // end of the loop. ?>
        	<!-- Blog post footer end -->
<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
    <nav id="nav-below" class="clearfix">
        
        <ul>
            <li><?php next_posts_link( __( '&laquo; Older posts', 'starkers' ) ); ?></li>
            <li><?php previous_posts_link( __( 'Newer posts &raquo;', 'starkers' ) ); ?></li>
        </ul>
        
</nav>
<?php endif; ?>
</div>
<?php get_sidebar(); ?>

    
     </div> <!-- closes main-container --> 

<?php get_footer(); ?>