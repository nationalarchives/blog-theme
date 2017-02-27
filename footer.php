<?php
/*
 * The template for displaying the footer.
 */
?>

<?php
global $post;

if (!has_category('hide-newsletter', $post->ID)) : ?>
    <div class="container">
        <div class="newsletter-template">
            <div class="news-icon">
                <img src="http://www.nationalarchives.gov.uk/wp-content/themes/tna-base/img/tna-newsletter-icon.png" alt="TNA Newsletter Icon"/>
            </div>

            <div class="news-content">
                <h3>Send me The National Archives’ newsletter</h3>
                <p>A monthly round-up of news, blogs, offers and events.</p>
            </div>

            <div class="news-form">
                <form name="signup" id="signup" action="https://r1-t.trackedlink.net/signup.ashx" method="post" role="form">
                    <input type="hidden" name="addressbookid" value="636353"> <!-- homepage and general sign up -->
                    <!-- input type="hidden" name="addressbookid" value="732466" -->
                    <!-- first world war portal sign up -->
                    <input type="hidden" name="userid" value="173459">
                    <input type="hidden" name="ReturnURL"
                           value="http://www.nationalarchives.gov.uk/about/get-involved/newsletters/the-national-archives-newsletter/thank-you/">
                    <label for="Email">Send me The National Archives’ newsletter</label>
                    <input type="email" name="Email" id="Email" required="required"
                           placeholder="Enter your email address">
                    <input id="newsletterSignUp" type="submit" name="Submit" value="Subscribe"
                           class="margin-left-medium">
                </form>
            </div>
        </div>
    </div>
<?php endif;
?>

<div id="footer-wrapper">
  <div class="container">
    <div class="row">
      <div class="col starts-at-full ends-at-one-quarter clr">
        <h4>The National Archives</h4>
        <p>Kew, Richmond, Surrey, TW9 4DU <br/>
          Tel: +44 (0) 20 8876 3444</p>
      </div>
      <div class="col starts-at-full ends-at-one-quarter clr">
        <div class="footer-left">
          <h4>Find out more</h4>
          <ul>
            <li><a href="http://www.nationalarchives.gov.uk/contact-us/">Contact us</a></li>
							<li><a href="http://www.nationalarchives.gov.uk/about/press-room/">Press room</a></li>
							<li><a href="http://www.nationalarchives.gov.uk/about/jobs/">Jobs and careers</a></li>
            <li><a href="http://www.nationalarchives.gov.uk/about/get-involved/friends-of-the-national-archives/">Friends of The National Archives</a></li>
          </ul>
        </div>
        <div class="footer-left">
          <h4>Site help</h4>
          <ul>
            <li><a href="http://www.nationalarchives.gov.uk/help/">Help</a></li>
            <li><a href="http://www.nationalarchives.gov.uk/help/faqs.htm">FAQs</a></li>
            <li><a href="http://www.nationalarchives.gov.uk/help/atoz.htm">Website A-Z index</a></li>
            <li><a href="http://www.nationalarchives.gov.uk/help/accessibility.htm">Accessibility</a></li>
            <li><a href="http://www.nationalarchives.gov.uk/help/sitemap.htm">Site map</a></li>
          </ul>
        </div>
      </div>
      <div class="col starts-at-full ends-at-one-quarter clr">
        <div class="footer-left">
          <h4>Websites</h4>
          <ul>
            <li><a href="http://blog.nationalarchives.gov.uk/">Blog</a></li>
            <li><a href="http://media.nationalarchives.gov.uk/">Podcasts and videos</a></li>
            <li><a href="http://www.nationalarchives.gov.uk/webarchive/">UK Government Web Archive</a></li>
            <li><a href="http://www.legislation.gov.uk/"target="_blank" title="External website - link opens in a new window">Legislation.gov.uk</a></li>
            <li><a href="https://www.thegazette.co.uk/"target="_blank" title="External website - link opens in a new window">The Gazette</a></li>
          </ul>
        </div>
        <div class="footer-left">
          <h4>Legal</h4>
          <ul>
            <li><a href="http://www.nationalarchives.gov.uk/legal/">Terms of use</a></li>
            <li><a href="http://www.nationalarchives.gov.uk/legal/privacy.htm">Privacy policy</a></li>
            <li><a href="http://www.nationalarchives.gov.uk/legal/cookies.htm">Cookies</a></li>
            <li><a href="http://www.nationalarchives.gov.uk/about/freedom-of-information/">Freedom of Information</a></li>
							<li><a href="http://www.nationalarchives.gov.uk/about/our-role/transparency/s">Transparency</a></li>
            <li><a href="http://www.nationalarchives.gov.uk/legal/our-fees.htm">Our fees</a></li>
          </ul>
        </div>
      </div>
      <div class="col starts-at-full ends-at-one-quarter clr">
        <div class="footer-left">
          <h4>Follow us</h4>
          <ul>
            <li><a href="https://twitter.com/@UKNatArchives"target="_blank" title="External website - link opens in a new window">Twitter</a></li>
							<li><a href="https://www.youtube.com/c/TheNationalArchivesUK" target="_blank" title="External website - link opens in a new window">YouTube</a></li>
            <li><a href="http://flickr.com/photos/nationalarchives"target="_blank" title="External website - link opens in a new window">Flickr</a></li>
            <li><a href="http://facebook.com/TheNationalArchives"target="_blank" title="External website - link opens in a new window">Facebook</a></li>
            <li><a href="http://commons.wikimedia.org/wiki/Commons:The_National_Archives_(United_Kingdom)" target="_blank" title="External website - link opens in a new window">Wikimedia Commons</a></li>
							<li><a href="http://www.nationalarchives.gov.uk/rss/">RSS</a></li>
          </ul>
        </div>
        <div class="footer-left">
          <h4>Featured Flickr image</h4>
          <p id="flickr-caption" class="caption">Patented textile pattern by Christopher Dresser. <a target="_blank" title="External website - opens in a new window" href="http://www.flickr.com/photos/nationalarchives/3208858799/in/set-72157608416657334/">EXT 9/104</a></p>
          <p id="flickr-image"> <a target="_blank" title="External website - opens in a new window" href="http://www.flickr.com/photos/nationalarchives/3208858799/in/set-72157608416657334/"> <img src="http://www.nationalarchives.gov.uk/images/global/featured-flickr-ext-9-104.jpg" alt="Patented textile pattern by Christopher Dresser."></a> </p>
        </div>
      </div>
    </div>
    <!-- row -->

    <div class="row external-branding">
      <div class="footer-base-external-branding-left"> <a href="http://www.nationalarchives.gov.uk/doc/open-government-licence/"><img src="http://www.nationalarchives.gov.uk/images/global/logo-ogl.png"></a>
        <p>All content is available under the <a href="http://www.nationalarchives.gov.uk/doc/open-government-licence/">Open Government Licence v3.0</a>, <br/>except where otherwise stated</p>
      </div>
      <div class="footer-base-external-branding-right"> <a target="_blank" title="External website - opens in a new window" href="http://gov.uk" class="footer-base-external-branding-gov-logo-adjust"><img src="http://www.nationalarchives.gov.uk/images/global/gov-uk.png"/></a> </div>
    </div>
    <!-- row external branding -->
  </div>
  <!-- container -->
</div>
<!-- footer-wrapper -->
<!-- IE conditional comment to provide appropriate version of jQuery -->
<!-- NOTE: despite jQuery 2.x being in an IE conditional comment, ALL non-IE browsers will download it -->

<!--[if lt IE 9]>
    <script src="http://www.nationalarchives.gov.uk/scripts/jquery-1.10.2.min.js"></script>
    <script src="http://www.nationalarchives.gov.uk/scripts/jquery-migrate-1.0.0.js"></script>
<![endif]-->
<!--[if gte IE 9]><!-->
<script type="text/javascript" src="http://www.nationalarchives.gov.uk/scripts/jquery-2.0.3.min.js"></script>
<!--<![endif]-->

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/hub-behaviour.js"></script>
<script type="text/javascript" src="http://www.nationalarchives.gov.uk/scripts/backstretch.js"></script>
<script src="http://www.nationalarchives.gov.uk/wp-content/themes/tna/scripts/tna-definitions.js"></script>
<script src="http://www.nationalarchives.gov.uk/wp-content/themes/tna/scripts/tna-bindings.js"></script>
<script src="http://www.nationalarchives.gov.uk/wp-content/themes/tna/scripts/tna-run-on-page-load.js"></script>
<script type="text/javascript" src="http://nationalarchives.gov.uk/scripts/footer-img.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/jquery.newsletter.js"></script>

<!-- START OF SmartSource Data Collector TAG -->
<!-- Copyright (c) 1996-2009 WebTrends Inc.  All rights reserved. -->
<!-- Version: 8.6.2 -->
<!-- Tag Builder Version: 3.0  -->
<!-- Created: 8/4/2009 10:26:05 AM -->
<script src="http://www.nationalarchives.gov.uk/script/webtrends.js" type="text/javascript"></script>
<!--Warning: The two script blocks below must remain inline. Moving them to an externa -->
<!--JavaScript include file can cause serious problems with cross-domain tracking.-->
<script type="text/javascript">
//<![CDATA[
var _tag=new WebTrends();
_tag.dcsGetId();
//]]>>
</script>
<script type="text/javascript">
//<![CDATA[
// Add custom parameters here.
//_tag.DCSext.param_name=param_value;
_tag.dcsCollect();
//]]>>
</script>
<noscript>
<div><img alt="DCSIMG" id="DCSIMG" width="1" height="1" src="http://smartsource.nationalarchives.gov.uk/dcsdhhxq6000004rry7ab39or_9h9r/njs.gif?dcsuri=/nojavascript&amp;WT.js=No&amp;WT.tv=8.6.2"/></div>
</noscript>
<!-- END OF SmartSource Data Collector TAG -->

<?php wp_footer(); ?>
</body></html>