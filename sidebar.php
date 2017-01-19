<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */
?>

<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('sidebar-1')) : ?>

<?php else : ?>

<?php endif; ?>
<?php /*
<div class="col starts-at-full ends-at-one-third box clr">
<div class="breather">
  <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('sidebar-1')) : else : ?>
  <p>Error retrieving authors</p>
  <?php endif; ?>
  </div>
</div>
<div class="col starts-at-full ends-at-one-third box clr">
  <?php
	/* When we call the dynamic_sidebar() function, it'll spit out
	 * the widgets for that widget area. If it instead returns false,
	 * then the sidebar simply doesn't exist, so we'll hard-code in
	 * some default sidebar stuff just in case.
	 
	if ( ! dynamic_sidebar( 'primary-widget-area' ) ) : ?>
  <div class="filter clr">
    <h2> <span> <span>Search</span> </span> </h2>
  </div>
    <div class="breather">
  <form role="search" method="get" id="searchform" >
    <label class="screen-reader-text" for="s">Search</label>
    <input type="text" name="s" id="s" value="Search" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;"/>
    <input type="submit" id="searchsubmit" value="Submit" title="Submit"/>
  </form>
</div>
</div>
<div class="col starts-at-full ends-at-one-third box clr">
  <div class="filter clr">
    <h2> <span> <span>
      <?php _e( 'Archives', 'starkers' ); ?>
      </span> </span> </h2>
        <div class="breather">
    <ul>
      <?php wp_get_archives( 'type=monthly' ); ?>
    </ul>
    <?php endif; // end primary widget area ?>
  </div>
</div>
  <?php
	// A second sidebar for widgets, just because.
	if ( is_active_sidebar( 'secondary-widget-area' ) ) : ?>
  <ul>
    <?php dynamic_sidebar( 'secondary-widget-area' ); ?>
  </ul>
  <?php endif; ?>
  
  <!-- Widget end --> 
</div>*/
