<?php
/**
*  Template Name: Homepage
 *
 * @package WordPress
 * @subpackage Redesign
 * @since Redesign HTML5 3.0
 */

get_header(); 
?>


<div class="container row banner-seperator">
  <div class="col starts-at-full ends-at-full box clr">
    <div class="filter clr">
      <h2> <span> <span>Latest posts</span> </span> </h2>
      <span><a href="/blogposts/" class="call-to-action-link">View all posts</a></span>
    </div> 
    <div class="breather">
      <div class="grid-within-grid-three-item">
        <?php 
		
		$displayed_posts = array();
		$the_query = new WP_Query( '&showposts=3' ); ?>
        <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>  <?php if (has_post_thumbnail( $post->ID ) ): ?>
          <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
          <?php endif; ?>
        <div class="clr blog-latest griditem"> <a href="<?php the_permalink(); ?>">
          <div class="posts-latest-img" style="background-image: url('<?php echo $image[0]; ?>')"></div>
          <h3 class="inline"><?php echo wp_trim_words( get_the_title(), 9 ); ?></h3>
          </a>
        
          <span class="entry-meta">
          <?php the_time('l j F Y ') ?>
          <br />
          <?php if(function_exists('coauthors_posts_links'))
              coauthors_posts_links();
              else
              the_author_posts_links(); ?>
          |
          <?php comments_popup_link( '' . __( 'Comment', 'Redesign' ) . '', _x( '1 comment', 'comments number', 'Redesign' ), _x( '% comments', 'comments number', 'Redesign' ) ); ?>
          </span>
          <?php the_excerpt(); ?>
        </div>
        <?php 
		$displayed_posts[]=$post->ID ;
		
		endwhile;
		
		
		?>
      </div>
  </div>
</div>
</div>
<div class="container row">
  <div class="col starts-at-full ends-at-full box clr">
    <div class="filter clr">
      <h2> <span> <span>Posts by category</span> </span> </h2>
      

    </div>
    <ul id="categoryNavigation" class="clr list-categories">
      <li class="active"><a class="" href="#records-research">Records and research</a></li>
      <li><a class="" href="#behind-the-scenes">Behind the scenes</a></li>
      <li><a class="" href="#technology-innovation">Technology and innovation</a></li>
      <li><a class="" href="#managing-information">Managing information</a></li>
    </ul>
    <div class="breather">
      <div class="row">
        <div id="categoryTabs">
          <ul id="records-research">
            <li class="grid-within-grid-three-item">
              <?php 
			 query_posts(array('category_name'=>'records-research', 'showposts'=>'3', 'post__not_in'=> $displayed_posts ));
			  
			  //query_posts('category_name=records-research&showposts=6');
			  
			  ?>
              <?php 
			  
			  $postnumber = 1;
			  while (have_posts()) : the_post(); ?> 
			  
			  
			  <?php if (has_post_thumbnail( $post->ID ) ): ?>
                <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                <?php endif; ?>
              <div class="griditem clr"> <a href="<?php the_permalink(); ?>">
                <div class="posts-latest-img" style="background-image: url('<?php echo $image[0]; ?>')"></div>
                <h3 class="inline"><?php echo wp_trim_words( get_the_title(), 9 ); ?></h3>
                </a>
               
                <span class="entry-meta">
                <?php the_time('l j F Y ')  ?> 
                <br />
                 <?php //echo $postnumber; ?>
                <?php if(function_exists('coauthors_posts_links'))
              coauthors_posts_links();
              else
              the_author_posts_links(); ?>
                |
                <?php comments_popup_link( '' . __( '0 comments', 'Redesign' ) . '', _x( '1 comment', 'comments number', 'Redesign' ), _x( '% comments', 'comments number', 'Redesign' ) ); ?>
                </span>
                <?php the_excerpt(); ?>
              </div>
          
              
              
              <?php 
			
			   $postnumber++;
			   
			
			  
			  endwhile;
			  
		
			   
			 
			 
			  ?>
              <div class="more-link"><a href="/blog/category/records-research" class="call-to-action-link right">View all posts in this category</a></div>
            </li>
          </ul>
          <ul id="behind-the-scenes">
            <li class="grid-within-grid-three-item">
              <?php 
			  query_posts(array('category_name'=>'behind-the-scenes', 'showposts'=>'3', 'post__not_in'=> $displayed_posts ));
              //reset postnumber variable   
              $postnumber =1;
			  //query_posts('category_name=behind-the-scenes&showposts=3'); ?>
              <?php while (have_posts()) : the_post(); ?> <?php if (has_post_thumbnail( $post->ID ) ): ?>
                <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                <?php endif; ?>
              <div class="griditem clr"> <a href="<?php the_permalink(); ?>">
                <div class="posts-latest-img" style="background-image: url('<?php echo $image[0]; ?>')"></div>
                <h3 class="inline"><?php echo wp_trim_words( get_the_title(), 9 ); ?></h3>
                </a>
               
                <span class="entry-meta">
                <?php the_date(); ?>
                |
                <?php if(function_exists('coauthors_posts_links'))
              coauthors_posts_links();
              else
              the_author_posts_links(); ?>
                <?php comments_popup_link( '' . __( '', 'Redesign' ) . '', _x( '| 1 comment', 'comments number', 'Redesign' ), _x( '| % comments', 'comments number', 'Redesign' ) ); ?>
                </span>
                <?php the_excerpt(); ?>
              </div>
              <?php endwhile;?>
              <div class="more-link"><a href="/blog/category/behind-the-scenes" class="call-to-action-link right">View all posts in this category</a></div>
            </li>
          </ul>
          <ul id="technology-innovation">
            <li class="grid-within-grid-three-item">
              <?php 
			   query_posts(array('category_name'=>'technology-innovation', 'showposts'=>'3', 'post__not_in'=> $displayed_posts ));
			  //query_posts('category_name=technology-innovation&showposts=3'); ?>
              <?php while (have_posts()) : the_post(); ?><?php if (has_post_thumbnail( $post->ID ) ): ?>
                <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                <?php endif; ?>
              <div class="griditem clr"> <a href="<?php the_permalink(); ?>">
                <div class="posts-latest-img" style="background-image: url('<?php echo $image[0]; ?>')"></div>
                <h3 class="inline"><?php echo wp_trim_words( get_the_title(), 9 ); ?></h3>
                </a>
                
                <span class="entry-meta">
                <?php the_date(); ?>
                |
                <?php if(function_exists('coauthors_posts_links'))
              coauthors_posts_links();
              else
              the_author_posts_links(); ?>
                <?php comments_popup_link( '' . __( '', 'Redesign' ) . '', _x( '| 1 comment', 'comments number', 'Redesign' ), _x( '| % comments', 'comments number', 'Redesign' ) ); ?>
                </span>
                <?php the_excerpt(); ?>
              </div>
              <?php endwhile;?>
              <div class="more-link"><a href="/blog/category/technology-innovation" class="call-to-action-link right">View all posts in this category</a></div>
            </li>
          </ul>
          <ul id="managing-information">
            <li class="grid-within-grid-three-item">
              <?php 
			   query_posts(array('category_name'=>'managing-information', 'showposts'=>'3', 'post__not_in'=> $displayed_posts ));
			  //query_posts('category_name=managing-information&showposts=3'); ?>
              <?php while (have_posts()) : the_post(); ?> <?php if (has_post_thumbnail( $post->ID ) ): ?>
                <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                <?php endif; ?>
              <div class="griditem clr"> <a href="<?php the_permalink(); ?>">
                <div class="posts-latest-img" style="background-image: url('<?php echo $image[0]; ?>')"></div>
                <h3 class="inline"><?php echo wp_trim_words( get_the_title(), 9 ); ?></h3>
                </a>
               
                <span class="entry-meta">
                <?php the_date(); ?>
                |
                <?php if(function_exists('coauthors_posts_links'))
              coauthors_posts_links();
              else
              the_author_posts_links(); ?>
                <?php comments_popup_link( '' . __( '', 'Redesign' ) . '', _x( '| 1 comment', 'comments number', 'Redesign' ), _x( '| % comments', 'comments number', 'Redesign' ) ); ?>
                </span>
                <?php the_excerpt(); ?>
              </div>
              <?php endwhile;?>
              <div class="more-link"><a href="/blog/category/managing-information" class="call-to-action-link right">View all posts in this category</a></div>
            </li>
          </ul>
        </div>
        <!-- end .row --> 
        
      </div>
      <!-- closes main-container -->
    </div>
    <!-- end .breather --> 
  </div>
  <!-- end .col starts-at-full ends-at-full box clr --> 
</div>
<!-- end .container row -->

<div class="container row">
  <div class="col starts-at-full ends-at-half box clr">
    <div class="filter clr">
      <h2> <span> <span>Comments</span> </span> </h2>
    </div>
    <div class="minboxText">
      <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('aside_first')) : else : ?>
      <p>Error retrieving comments</p>
      <?php endif; ?>
    </div>
  </div>
  <div class="col starts-at-full ends-at-half box clr">
    <div class="filter clr">
      <h2> <span> <span>Tags</span> </span> </h2>
    </div>
    <div class="breather">
      <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('aside_second')) : else : ?>
      <p>Error retrieving authors</p>
      <?php endif; ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
