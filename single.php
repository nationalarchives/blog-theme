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
  <div class="col starts-at-full ends-at-two-thirds box clr" id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
    <div class="breather">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      <h2 class="inline headline"> 
        <?php the_title(); ?>
        </h2>


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
        $show_sep = true; ?> | 

        <?php comments_popup_link( '' . __( 'Comment', 'Redesign' ) . '', _x( '1 comment', 'comments number', 'Redesign' ), _x( '% comments', 'comments number', 'Redesign' ) ); ?>

      <?php edit_post_link( __( 'Edit post', 'Redesign' ), '<span class="edit-link">', '</span>' ); ?>
      </span> <!-- .entry-meta -->
      
      <div class="entry-content border-top clearfix">
        <?php the_content(); ?>
      </div>
        <div class="tags">
          <h3 class="inline">Tags</h3><p> <?php
                    $tags_list = get_the_tag_list( '', ', ' );
                    if ( $tags_list ):
                		?>
            <?php printf( __( '%2$s', 'Redesign' ), 'entry-utility-prep entry-utility-prep-tag-links', $tags_list ); ?>
            <?php endif; ?>
          </p>
        </div>

        <div id="blogsocial">
<div class="addthis_toolbox addthis_default_style addthis_32x32_style">
<a class="addthis_button_facebook"></a><a class="addthis_button_twitter"></a><a class="addthis_button_compact"></a><a class="addthis_counter addthis_bubble_style"></a>
</div>
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=xa-500565897ff2ca83"></script>
                </div>
                
  <?php comments_template( '', true ); ?>
  <div class="disclaimer">We will not be able to respond to personal family history research questions on the blog.<br/> See our <a href="/moderation-policy">moderation policy</a> for more details.
</div>

  <nav id="nav-below" class="clearfix">
      <ul>
                <li><h4>Previous post</h4> <?php previous_post_link( '%link', '' . _x( '', 'starkers' ) . ' %title' ); ?></li>
      <li><h4>Next post</h4><?php next_post_link( '%link', '%title ' . _x( '', 'starkers' ) . '' ); ?></li>
        </ul>
    
</nav>

</div>
<?php endwhile; // end of the loop. ?>
  

</div>
<?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>
