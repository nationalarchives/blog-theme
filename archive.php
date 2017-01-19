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
  <div class="col starts-at-full ends-at-two-thirds box clr min-height">

<?php if ( ! have_posts() ) : ?>
    <div class="heading-holding-banner">
      <h2><span>
        <span>
        <?php _e( 'Not Found', 'Redesign' ); ?>
      </span>
      </span>
    </h2>
  </div>

<div class="breather">
      <p>
        <?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'Redesign' ); ?>
      </p>
</div>

      <?php endif; ?>
        
        <div class="heading-holding-banner">
          <h2><span>
        <span>

          <div id="header-filter-description">
            <?php $post = $posts[0]; // Set $post so that the_date() works. ?>
            <?php /* If this is a category archive */ if (is_category()) { ?>
            Posts under the <?php single_cat_title(); ?> category
            <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
            Posts tagged '<?php single_tag_title(); ?>'
            <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
            Posts from
            <?php the_time('F jS Y'); ?>
            <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
            Posts from
            <?php the_time('F Y'); ?>
            <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
            Posts from
            <?php the_time('Y'); ?>
            <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
              Blog Archives
              <?php } ?>
          </div>
        <!-- header-filter-description --> 
          </span>
      </span>
    </h2>
        </div>
      
<div class="breather">

      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
        

          <h3 class="inline"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'Redesign' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
            <?php the_title(); ?>
            </a></h3>
          
        
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
          <span class="cat-links"> <?php printf( __( '<span class="%1$s"></span> %2$s', 'Redesign' ), 'entry-utility-prep entry-utility-prep-cat-links', $categories_list );
				$show_sep = true; ?> </span> |  
    
          <?php comments_popup_link( '' . __( 'Comment', 'Redesign' ) . '', _x( '1 comment', 'comments number', 'Redesign' ), _x( '% comments', 'comments number', 'Redesign' ) ); ?> 


        </span>
        <!-- .entry-meta -->


        <div class="entry-content clearfix">
          <?php the_content( __( 'Continue reading &raquo;', 'Redesign' ) ); ?>
        </div>
        <?php comments_template( '', true ); ?>
      </article>
      <?php endwhile; // end of the loop. ?>

      </div><!-- closes breather -->

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
