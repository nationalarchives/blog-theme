<?php
/**
 * The loop that displays posts.
 *
 * @package WordPress
 * @subpackage Redesign
 * @since Redesign HTML5 3.0
 */
?>
 

<?php /* If there are no posts to display, such as an empty archive page */ ?>
<?php if ( ! have_posts() ) : ?>
        
        <div class="breather">
            <h3><?php _e( 'Not Found', 'Redesign' ); ?></h3>
            <p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'Redesign' ); ?></p>
         </div>
<?php endif; ?>
 
<?php while ( have_posts() ) : the_post(); ?>
 
<?php /* How to display posts of the Gallery format. The gallery category is the old way. */ ?>
 <div class="breather">
    <?php if ( ( function_exists( 'get_post_format' ) && 'gallery' == get_post_format( $post->ID ) ) || in_category( _x( 'gallery', 'gallery category slug', 'Redesign' ) ) ) : ?>
     
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
              

                <h3 class="inline"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'Redesign' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
 
                <?php Redesign_posted_on(); ?>
            
 
<?php if ( post_password_required() ) : ?>
                <?php the_content(); ?>
<?php else : ?>
<?php $images = get_children( array( 'post_parent' => $post->ID, 'post_type' => 'attachment', 'post_mime_type' => 'image', 'orderby' => 'menu_order', 'order' => 'ASC', 'numberposts' => 999 ) );
    if ( $images ) :
        $total_images = count( $images );
        $image = array_shift( $images );
        $image_img_tag = wp_get_attachment_image( $image->ID, 'thumbnail' ); ?>
        
        <a href="<?php the_permalink(); ?>"><?php echo $image_img_tag; ?></a>
         
        <p><?php printf( _n( 'This gallery contains <a %1$s>%2$s photo</a>.', 'This gallery contains <a %1$s>%2$s photos</a>.', $total_images, 'Redesign' ), 'href="' . get_permalink() . '" title="' . sprintf( esc_attr__( 'Permalink to %s', 'Redesign' ), the_title_attribute( 'echo=0' ) ) . '" rel="bookmark"', number_format_i18n( $total_images )); ?></p>

	<?php endif; ?>
     
    <?php the_excerpt(); ?>
 
<?php endif; ?>
 
            <footer>
	            <?php if ( function_exists( 'get_post_format' ) && 'gallery' == get_post_format( $post->ID ) ) : ?>
	            <a href="<?php echo get_post_format_link( 'gallery' ); ?>" title="<?php esc_attr_e( 'View Galleries', 'Redesign' ); ?>"><?php _e( 'More Galleries', 'Redesign' ); ?></a> | 
	            
	            <?php elseif ( in_category( _x( 'gallery', 'gallery category slug', 'Redesign' ) ) ) : ?>
	            <a href="<?php echo get_term_link( _x( 'gallery', 'gallery category slug', 'Redesign' ), 'category' ); ?>" title="<?php esc_attr_e( 'View posts in the Gallery category', 'Redesign' ); ?>"><?php _e( 'More Galleries', 'twentyten' ); ?></a> | 
	            
	            <?php endif; ?>
	            
	            <?php comments_popup_link( __( 'Leave a comment', 'Redesign' ), __( '1 Comment', 'Redesign' ), __( '% Comments', 'Redesign' ) ); ?>
	            <?php edit_post_link( __( 'Edit', 'Redesign' ), '| ', '' ); ?>
            </footer> 
        </article>
 </div>
<?php /* How to display posts of the Aside format. The asides category is the old way. */ ?>
    <div class="breather">
    <?php elseif ( ( function_exists( 'get_post_format' ) && 'aside' == get_post_format( $post->ID ) ) || in_category( _x( 'asides', 'asides category slug', 'Redesign' ) )  ) : ?>
     
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
 
        <?php if ( is_archive() || is_search() ) : // Display excerpts for archives and search. ?>
                <?php the_excerpt(); ?>
        <?php else : ?>
                <?php the_content( __( 'Continue reading &raquo;', 'Redesign' ) ); ?>
        <?php endif; ?>
         
            <footer>
                <?php Redesign_posted_on(); ?> | <?php comments_popup_link( __( 'Leave a comment', 'Redesign' ), __( '1 Comment', 'Redesign' ), __( '% Comments', 'Redesign' ) ); ?> <?php edit_post_link( __( 'Edit', 'Redesign' ), '| ', '' ); ?>
            </footer>
        </article>
 </div>
<?php /* How to display all other posts. */ ?>

 <div class="breather">
    <?php else : ?>
     	 
         <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        
         <!-- Blog post header start -->

                <?php if ( is_sticky() ) : ?>
	
					<h2><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'Redesign' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
					<div class="entry-format"><?php _e( 'Featured', 'Redesign' ); ?></div>
	


			<?php else : ?>

           
  			<h3 class="inline"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'Redesign' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h3>

			<?php endif; ?>
            
           

		<span class="entry-meta"><?php the_time('l j F Y ') ?>
          | 
          <!-- Date end -->
                 <?php if(function_exists('coauthors_posts_links'))
                        coauthors_posts_links();
                            else
                        the_author_posts_link(); ?>
           |  
          <!--the_author_posts_link(); -->

			<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
			
            <?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', 'Redesign' ) );
				if ( $categories_list ):
			?>
            
			<span class="cat-links"> <?php printf( __( '<span class="%1$s"></span> %2$s', 'Redesign' ), 'entry-utility-prep entry-utility-prep-cat-links', $categories_list );
                $show_sep = true; ?> </span> | 

			<?php endif; // End if categories ?>

			<?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', __( ', ', 'Redesign' ) );
				if ( $tags_list ):
				if ( $show_sep ) : ?>
				<?php endif; // End if $show_sep ?>

                
			<?php endif; // End if 'post' == get_post_type() ?>	
<?php comments_popup_link( '' . __( 'Comment', 'Redesign' ) . '', _x( '1 comment', 'comments number', 'Redesign' ), _x( '% comments', 'comments number', 'Redesign' ) ); ?> 


			<?php edit_post_link( __( 'Edit', 'Redesign' ), '<span class="edit-link">', '</span>' ); ?>
            
			</span><!-- .entry-meta -->
            
             
			
			<?php endif; ?>
            
            <?php if ( comments_open() && ! post_password_required() ) : ?>


 <?php endif; ?>
 
    <?php if ( is_archive() || is_search()  ) : // Only display excerpts for archives and search. ?>
                
                <div class="entry-summary">
				<?php the_excerpt(); ?>
                </div><!-- .entry-summary -->

    <?php else : ?>
                
                <div class="entry-content clearfix">
				   
<?php the_content( __( 'Continue reading &raquo;', 'Redesign' ) ); ?>
                 
                <?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'Redesign' ) . '</span>', 'after' => '</div>' ) ); ?>
    <?php endif; ?>
    
</div><!-- .entry-content --> 
  

</article>
 
</div><!-- closes breather -->
 

    <?php endif; // This was the if statement that broke the loop into three parts based on categories. ?>
 
<?php endwhile; // End the loop. ?>

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