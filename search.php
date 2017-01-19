<?php
/**
 * The Template for displaying all single posts.
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
          <h2><span><span>
            No results for '<?php the_search_query() ?>'
              </span></span></h2>
      </div>
              <div class="breather"><p><?php _e( 'There are no posts related to your search term. Please search again or return to the <a href="/">homepage</a>.', 'Redesign' ); ?></p>   
              </div> 
      <?php endif; ?> 
              

      <?php if ( have_posts() ) : ?>
        <div class="heading-holding-banner">
              <h2><span><span>
          Results for '<?php the_search_query() ?>'
                  </span></span></h2>  
        </div>
      <?php endif; ?>  


<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div class="breather">
    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>

      <h3 class="inline"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'Redesign' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h3>


  <span class="entry-meta">
        <?php the_time('l j F Y ') ?>
          |
          <a href="<?php $author = get_query_var('author'); echo get_author_posts_url( $author ); ?>">
      <?php if(function_exists('coauthors_posts_links'))
              coauthors_posts_links();
              else
              the_author_posts_link(); ?>
      </a> |
      <?php
        /* translators: used between list items, there is a space after the comma */
        $categories_list = get_the_category_list( __( ', ', 'Redesign' ) );
      ?>
      <?php printf( __( '<span class="%1$s"></span> %2$s', 'Redesign' ), 'entry-utility-prep entry-utility-prep-cat-links', $categories_list );
        $show_sep = true; ?>

        <?php comments_popup_link( '' . __( '', 'Redesign' ) . '', _x( '1 comment', 'comments number', 'Redesign' ), _x( '% comments', 'comments number', 'Redesign' ) ); ?>

      <?php edit_post_link( __( 'Edit post', 'Redesign' ), '<span class="edit-link">', '</span>' ); ?>
      </span> <!-- .entry-meta -->

                
        <div class="entry-content clearfix">
        <?php the_content( __( 'Continue reading &raquo;', 'Redesign' ) ); ?>
            </div>
 
   
        </article>
</div> <!-- closes breather -->
<?php endwhile; // end of the loop. ?>
        	<!-- Blog post footer end -->
<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>

<?php endif; ?>


</div>
<?php get_sidebar(); ?>

</div>


<!-- closes main -->


<!-- closes main-container -->

<?php get_footer(); ?>
