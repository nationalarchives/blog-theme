<?php
/*
Template Name: Allposts
 *
 * @package WordPress
 * @subpackage Redesign
 * @since Redesign HTML5 3.0
 */

get_header(); ?>

<div class="container row banner-seperator">
<div class="col starts-at-full ends-at-two-thirds box clr min-height" id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
  <div class="breather">
    <?php query_posts('posts_per_page=10'); ?>
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
 <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
        <div class="entry-header-date">
          <h2><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'starkers' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
            <?php the_title(); ?>
            </a></h2>
          <?php the_time('l j F Y ') ?>
          | 
          <!-- Date end -->
          <?php comments_popup_link( '' . __( '0 comments', 'Redesign' ) . '', _x( '1 comment', 'comments number', 'Redesign' ), _x( '% comments', 'comments number', 'Redesign' ) ); ?>
        </div>
        <div class="entry-meta"> <span class="sep"><a href="<?php $author = get_query_var('author'); echo get_author_posts_url( $author ); ?>">
          <?php if(function_exists('coauthors_posts_links'))
    					coauthors_posts_links();
							else
    					the_author_posts_link(); ?>
          </a></span> 
          <!--the_author_posts_link(); -->
          
          <?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', 'starkers' ) );
			?>
          <span class="cat-links"> <?php printf( __( '<span class="%1$s"> in</span> %2$s', 'starkers' ), 'entry-utility-prep entry-utility-prep-cat-links', $categories_list );
				$show_sep = true; ?> </span>
          <?php edit_post_link( __( 'Edit', 'starkers' ), '<span class="edit-link">', '</span>' ); ?>
        </div>
        <!-- .entry-meta -->
        
        <div class="entry-content clearfix">
          <?php the_excerpt( __( 'Continue reading &raquo;', 'starkers' ) ); ?>
        </div>
        <?php comments_template( '', true ); ?>
      </article>
      <?php endwhile; ?>
      <?php endif; ?>
      <?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
    
    <nav id="nav-below" class="clearfix">
        
        <ul>
            <li><?php next_posts_link( __( '&laquo; Older posts', 'Redesign' ) ); ?></li>
            <li><?php previous_posts_link( __( 'Newer posts &raquo;', 'Redesign' ) ); ?></li>
        </ul>
        
</nav>

<?php endif; ?>
    </div>
  </div>
  <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
