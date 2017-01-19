<?php
/**
 * The Template for displaying all posts by author.
 *
 * @package WordPress
 * @subpackage Redesign
 * @since Redesign HTML5 3.0
 */

get_header(); ?>

<div class="container row banner-seperator">
  <div class="col starts-at-full ends-at-two-thirds box clr min-height" id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
    

      <?php if ( ! have_posts() ) : ?>
      <div class="heading-holding-banner">
          <h2><span>
        <span>
        <?php _e( 'Not Found', 'Redesign' ); ?>
      </h2>
            </span>
      </span></div>
      <div class="breather">
      <p>
        <?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'Redesign' ); ?>
      </p>
    </div>
      <?php endif; ?>


  
          <div class="heading-holding-banner">
          <h2><span>
        <span>
            <?php $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author)); ?>
            Posts by <?php echo $curauth->display_name; ?> </h2>
            </span>
      </span></div>

        <div id="header-filter-description">
<div class="breather">
          <div id="author" class="<?php if ((get_userdata(intval($author))->ID) == '1') echo 'administrator';
        /* elseif ((get_userdata(intval($author))->ID) == '2') echo 'jellybeen'; */ /* sample */
        /* add additional user_id following above example, echo the 'CSS element' you want to use for styling */
        ?>">
            <p><?php echo $curauth->user_description; ?></p>
          </div>
          <!-- #author -->
          
          <?php the_author_meta( $field, $userID ); ?>
        
      </div>
      </div>
      
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

     <div class="breather"> 
      <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>> 
        
        

          <h3 class="inline">
          <a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'Redesign' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
          <?php the_title(); ?>
          </a></h3>
        
        
        
        <span class="entry-meta"><?php the_time('l j F Y ') ?> | <span class="sep"><a href="<?php $author = get_query_var('author'); echo get_author_posts_url( $author ); ?>">
          <?php if(function_exists('coauthors_posts_links'))
    					coauthors_posts_links();
							else
    					the_author_posts_link(); ?>
          </a></span> 
          |  
          <!--the_author_posts_link(); -->
          
          <?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', 'Redesign' ) );
			?>
          <span class="cat-links"> <?php printf( __( '<span class="%1$s"></span> %2$s', 'Redesign' ), 'entry-utility-prep entry-utility-prep-cat-links', $categories_list );
				$show_sep = true; ?> </span> | 

        <?php comments_popup_link( '' . __( 'Comment', 'Redesign' ) . '', _x( '1 comment', 'comments number', 'Redesign' ), _x( '% comments', 'comments number', 'Redesign' ) ); ?>


          <?php edit_post_link( __( 'Edit', 'Redesign' ), '<span class="edit-link">| ', '</span>' ); ?>
        </span>
        <!-- .entry-meta -->
        
        <div class="entry-content clearfix">
          <?php the_content( __( 'Continue reading &raquo;', 'Redesign' ) ); ?>
        </div>
        <?php comments_template( '', true ); ?>
      </div><!-- closes breather -->  


</article>



      <?php endwhile; // end of the loop. ?>
      <!-- Blog post footer end -->
      <?php /* Display navigation to next/previous pages when applicable */ ?>
      <?php if (  $wp_query->max_num_pages > 1 ) : ?>

    <div class="breather">
    <nav id="nav-below" class="clearfix">
        
        <span><?php next_posts_link( __( '&laquo; Older posts', 'Redesign' ) ); ?></span>

        <span><?php previous_posts_link( __( 'Newer posts &raquo;', 'Redesign' ) ); ?></span>
        
</nav>
</div><!-- closes breather -->



      <?php endif; ?>


      
  </div>
 <?php get_sidebar(); ?>
</div>
 
<!-- closes main-container -->

<?php get_footer(); ?>
