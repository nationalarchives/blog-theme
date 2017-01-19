<?php get_header(); ?>

<div class="container row">
  <div class="col starts-at-full ends-at-full box clr">
    <div class="filter clr">
    <h2> <span> <span>Posts by category</span> </span> </h2>
<!-- place link to all recent posts aka list view here -->

<span class="view-all">  
  <a href="#" class="call-to-action-link">View all posts</a>
</span>
  </div>
  <ul id="categoryNavigation" class="clr list-categories">
    <li class="active"><a class="" href="#all-categories">All categories</a></li>
    <li><a class="" href="#records-research">Records and research</a></li>
    <li><a class="" href="#behind-the-scenes">Behind the scenes</a></li>
    <li><a class="" href="#technology-innovation">Technology and innovation</a></li>
    <li><a class="" href="#managing-information">Managing information</a></li>
  </ul>


    <div class="breather">

      <div class="row">

        <div id="categoryTabs">

<ul id="all-categories">
          <?php $the_query = new WP_Query( '&showposts=6' ); ?>
    <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

        <div class="col starts-at-full ends-at-one-third clr blog-latest">

          <a href="<?php the_permalink(); ?>">
            <h3><?php echo wp_trim_words( get_the_title(), 9 ); ?></h3>

            <?php if (has_post_thumbnail( $post->ID ) ): ?>
      <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>

      <div class="posts-latest-img" style="background-image: url('<?php echo $image[0]; ?>')"></div><?php endif; ?>

          </a>

          <span class="entry-meta">
            <?php if(function_exists('coauthors_posts_links'))
              coauthors_posts_links();
              else
              the_author_posts_links(); ?><br/><?php the_date(); ?> <?php comments_popup_link( '' . __( '', 'Redesign' ) . '', _x( '1 comment', 'comments number', 'Redesign' ), _x( '% comments', 'comments number', 'Redesign' ) ); ?>
        </span> 

            <?php the_excerpt(); ?>    

          </div>

      <?php endwhile;?>

      <div class="more-link"><a class="call-to-action-link" href="/blog/category/records-research">View all posts in this category</a></div>
        
      </ul>

<ul id="records-research">
          <?php query_posts('category_name=records-research&showposts=6'); ?>
          <?php while (have_posts()) : the_post(); ?>

        <div class="col starts-at-full ends-at-one-third clr blog-latest">

          <a href="<?php the_permalink(); ?>">
            <h3><?php echo wp_trim_words( get_the_title(), 9 ); ?></h3>

            <?php if (has_post_thumbnail( $post->ID ) ): ?>
      <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>

      <div class="posts-latest-img" style="background-image: url('<?php echo $image[0]; ?>')"></div><?php endif; ?>

          </a>

          <span class="entry-meta">
            <?php if(function_exists('coauthors_posts_links'))
              coauthors_posts_links();
              else
              the_author_posts_links(); ?><br/><?php the_date(); ?> <?php comments_popup_link( '' . __( '', 'Redesign' ) . '', _x( '1 comment', 'comments number', 'Redesign' ), _x( '% comments', 'comments number', 'Redesign' ) ); ?>
        </span> 

            <?php the_excerpt(); ?>    

          </div>

		  <?php endwhile;?>

      <div class="more-link"><a href="/blog/category/records-research">View all posts in this category</a></div>
        
      </ul>

<ul id="behind-the-scenes">
          <?php query_posts('category_name=behind-the-scenes&showposts=6'); ?>
          <?php while (have_posts()) : the_post(); ?>

        <div class="col starts-at-full ends-at-one-third clr blog-latest">

          <a href="<?php the_permalink(); ?>">
            <h3><?php echo wp_trim_words( get_the_title(), 9 ); ?></h3>

            <?php if (has_post_thumbnail( $post->ID ) ): ?>
      <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>

      <div class="posts-latest-img" style="background-image: url('<?php echo $image[0]; ?>')"></div><?php endif; ?>

          </a>

          <span class="entry-meta">
            <?php if(function_exists('coauthors_posts_links'))
              coauthors_posts_links();
              else
              the_author_posts_links(); ?><br/><?php the_date(); ?> <?php comments_popup_link( '' . __( '', 'Redesign' ) . '', _x( '1 comment', 'comments number', 'Redesign' ), _x( '% comments', 'comments number', 'Redesign' ) ); ?>
        </span> 

            <?php the_excerpt(); ?>    

          </div>

      <?php endwhile;?>

      <div class="more-link"><a href="/blog/category/records-research">View all posts in this category</a></div>
        
      </ul>

<ul id="technology-innovation">
          <?php query_posts('category_name=technology-innovation&showposts=6'); ?>
          <?php while (have_posts()) : the_post(); ?>

        <div class="col starts-at-full ends-at-one-third clr blog-latest">

          <a href="<?php the_permalink(); ?>">
            <h3><?php echo wp_trim_words( get_the_title(), 9 ); ?></h3>

            <?php if (has_post_thumbnail( $post->ID ) ): ?>
      <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>

      <div class="posts-latest-img" style="background-image: url('<?php echo $image[0]; ?>')"></div><?php endif; ?>

          </a>

          <span class="entry-meta">
            <?php if(function_exists('coauthors_posts_links'))
              coauthors_posts_links();
              else
              the_author_posts_links(); ?><br/><?php the_date(); ?> <?php comments_popup_link( '' . __( '', 'Redesign' ) . '', _x( '1 comment', 'comments number', 'Redesign' ), _x( '% comments', 'comments number', 'Redesign' ) ); ?>
        </span> 

            <?php the_excerpt(); ?>    

          </div>

      <?php endwhile;?>

      <div class="more-link"><a href="/blog/category/records-research">View all posts in this category</a></div>
        
      </ul>

<ul id="managing-information">
          <?php query_posts('category_name=managing-information&showposts=6'); ?>
          <?php while (have_posts()) : the_post(); ?>

        <div class="col starts-at-full ends-at-one-third clr blog-latest">

          <a href="<?php the_permalink(); ?>">
            <h3><?php echo wp_trim_words( get_the_title(), 9 ); ?></h3>

            <?php if (has_post_thumbnail( $post->ID ) ): ?>
      <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>

      <div class="posts-latest-img" style="background-image: url('<?php echo $image[0]; ?>')"></div><?php endif; ?>

          </a>

          <span class="entry-meta">
            <?php if(function_exists('coauthors_posts_links'))
              coauthors_posts_links();
              else
              the_author_posts_links(); ?><br/><?php the_date(); ?> <?php comments_popup_link( '' . __( '', 'Redesign' ) . '', _x( '1 comment', 'comments number', 'Redesign' ), _x( '% comments', 'comments number', 'Redesign' ) ); ?>
        </span> 

            <?php the_excerpt(); ?>    

          </div>

      <?php endwhile;?>

      <div class="more-link"><a href="/blog/category/records-research">View all posts in this category</a></div>
        
      </ul>


        </div><!-- end .row -->

      </div>
      <!-- closes main-container -->
    </article>
    </div>
    <!-- end .breather -->
  </div>
  <!-- end .col starts-at-full ends-at-full box clr -->
</div>
<!-- end .container row -->



<div class="container row">
<div class="col starts-at-full ends-at-half box min-19 clr">
  <div class="filter clr">
    <h2> <span> <span>Comments</span> </span> </h2>
  </div>
  <div class="breather">
    <div class="col starts-at-full ends-at-half clr">
      <ul class="comments">
        <li>Ruth Crumey on <a href="">It crawled from the south</a></li>
        <li>Julia on <a href="">It crawled from the south</a></li>
        <li>Sarah Green on <a href="">To keep or not to keep? Records appraisal and moving house</a></li>
      </ul>
    </div>
    <div class="col starts-at-full ends-at-half clr">
      <ul class="comments">
        <li>David Matthew on <a href="">It crawled from the south</a></li>
        <li>Julia on <a href="">Writer of the month: Dominic Sandbrook</a></li>
        <li>Mathew Spicer on <a href="">A challenge and a solution</a></li>
      </ul>
    </div>
  </div>
</div>
<div class="col starts-at-full ends-at-half box min-19 clr">
  <div class="filter clr">
    <h2> <span> <span>Tags</span> </span> </h2>
  </div>
  <div class="breather">
    <div class="col starts-at-full ends-at-full clr reduce">
      <ul class="tag">
        <li><a class="x-small" href="">Archives</a></li>
        <li><a class="large" href="">archives sector</a></li>
        <li><a class="small" href="">digital</a></li>
        <li><a class="small" href="">digital preservation</a></li>
        <li><a class="medium" href="">Genealogy</a></li>
        <li><a class="medium" href="">history</a></li>
        <li><a class="large" href="">Information management</a></li>
        <li><a class="medium" href="">opening up archives</a></li>
        <li><a class="x-large" href="">records</a></li>
        <li><a class="large" href="">research</a></li>
      </ul>
    </div>
  </div>
</div>

</div>

<div class="container row">
<div class="footer-blog">
</div>
</div>

<?php get_footer(); ?>
