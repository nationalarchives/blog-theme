<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
 
<?php remove_filter( 'wp_title', 'twentytwelve_wp_title', 10, 2 ); ?>
<title><?php wp_title(''); ?></title>

<meta name="TNAcategory" content ="<?php $values = get_post_custom_values("tnasearch"); if($values[0] == "") { echo "Records"; } else { echo $values[0]; } ?>" />  

<link rel="profile" href="http://gmpg.org/xfn/11" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="initial-scale = 1.0">
<!--
<meta name="DC.language" content="en" />
<meta name="dcterms.identifier" content="http://blog.nationalarchives.gov.uk/" />
<meta name="dcterms.title" content="The National Archives Blog" />
<meta name="dcterms.publisher" content="The National Archives, Kew, Richmond, Surrey, TW9 4DU" />
<meta name="dcterms.creator" content="The National Archives" />
<meta name="dcterms.created" content="31/05/2012 8:37 AM" />
<meta name="dcterms.modified" content="31-05-2012" />
<meta name="dcterms.rights" content="http://www.nationalarchives.gov.uk/legal/copyright.htm" />
<meta name="dcterms.description" content="Anything and everything archives-related.">
<meta name="eGMS.accessibility" scheme="eGMS.WCAG10" content="Double-A" /> 
<meta name="eGMS.subject.category" scheme="GCL" content="Libraries and archives" />
<meta name="viewport" content="width=device-width">
-->



<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="stylesheet" type="text/css" media="all" href="http://www.nationalarchives.gov.uk/styles/normalize-min.css" />
<link rel="stylesheet" type="text/css" media="all" href="http://www.nationalarchives.gov.uk/styles/global.css" />
<link rel="stylesheet" type="text/css" media="all" href="http://www.nationalarchives.gov.uk/styles/header-and-mega-menu.css" />
<link rel="stylesheet" type="text/css" media="all" href="http://www.nationalarchives.gov.uk/styles/section-all.css" />
<link rel="stylesheet" type="text/css" media="all" href="http://www.nationalarchives.gov.uk/styles/footer.css" />
<link rel="stylesheet" type="text/css" media="all" href="http://www.nationalarchives.gov.uk/styles/palette.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/styles/blog.css" />

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/styles/media-queries.css" />

<link rel="stylesheet" type="text/css" media="all" href="http://fonts.googleapis.com/css?family=Bitter" />
<link rel="stylesheet" type="text/css" media="all" href="http://fonts.googleapis.com/css?family=Open+Sans" />

<script type="text/javascript" src="http://www.nationalarchives.gov.uk/scripts/modernizr.min.js"></script>
<!--[if (gte IE 6)&(lte IE 8)]>
	<script type="text/javascript" src="/scripts/respond.min.js"></script>	
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/styles/ie7-8.css">
<![endif]-->

<!-- iOS viewport fix -->
<script type="text/javascript" src="http://www.nationalarchives.gov.uk/scripts/ios-viewport-fix.js"></script>
<link rel="shortcut icon" href="http://www.nationalarchives.gov.uk/favicon.ico" type="image/vnd.microsoft.icon" />
<link rel="icon" href="http://www.nationalarchives.gov.uk/favicon.ico" type="image/vnd.microsoft.icon" /> 
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-2827241-1']);
  _gaq.push(['_setDomainName', 'nationalarchives.gov.uk']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>
</head>
<body>
<?php # Must be loaded after global.css ?>

<div id="page-header" role="banner">
  <a href="#breadcrumb-holder" id="skip-to-main-content">Skip to Main Content</a>
  <div class="container">
  <section class="row" id="holds-logo-and-search">
    <article class="col starts-at-full ends-at-half clr" id="logo-holder">
      <a href="http://www.nationalarchives.gov.uk/default.htm" title="Go to the The National Archives homepage">
        <img src="http://www.nationalarchives.gov.uk/images/global/logo-white.png" alt="The National Archives" id="logo"/>
      </a>
      <form action="http://www.nationalarchives.gov.uk/search/results" method="get" id="mobileGlobalSearch">
        <div id="mobile-search-outer-wrapper">
          <div id="mobile-search-wrapper">
            <input type="text" id="mobile-search-field" placeholder="Search our website..." name="_q" required="" aria-required="true" >
            <input type="submit" alt="Submit search" value="">
          </div>
          <div id="changeDestination">
            <input checked type="radio" class="mobileSearchDestinationOption" name="searchDestination" id="websiteSearch" data-target="http://www.nationalarchives.gov.uk/search/results" data-placeholder="Search our website..." data-fieldName="_q"/><label for="websiteSearch">Search our website</label>
            <input type="radio" class="mobileSearchDestinationOption" name="searchDestination" id="catalogueSearch" data-target="http://discovery.nationalarchives.gov.uk/results/r" data-placeholder="Search our records..." data-fieldName="_q" /><label for="catalogueSearch">Search our records</label>
          </div>
        </div>
      </form>
    </article>
    <article class="col starts-at-full ends-at-half clr">
      <div id="search-field-wrapper">
        <form action="http://www.nationalarchives.gov.uk/search/results" method="get" id="globalSearch">
          <span id="scope-selector">&nbsp;</span>
          <input type="text" class="search-field" placeholder="Search our website..." id="tnaSearch" name="_q" required="" aria-required="true" >
          <input type="submit" class="search-button" alt="Submit search" id="search-button" value="">
        </form>
        <ul id="search-options">
          <li><a href="#" class="formDestinationChanger" data-target="http://www.nationalarchives.gov.uk/search/results" data-placeholder="Search our website..." data-fieldName="_q" role="button" aria-label="Change form destination to search the website">Search our website</a></li>
          <li><a href="#" class="formDestinationChanger" data-target="http://discovery.nationalarchives.gov.uk/results/r" data-placeholder="Search our records..." data-fieldName="_q" role="button" aria-label="Change form destination to search the catalogue">Search our records</a></li>        
        </ul>
      </div>
    </article>
  </section>
  <section class="row">
    <article class="col starts-at-full clr pull-down">
      <div id="mega-menu-pull-down">
        <button aria-label="Toggle menu">Menu</button>
      </div>
    </article>
  </section>
  </div>
  <noscript>
	<div class="mega-menu" role="navigation">
		<section class="row">
			<nav class="col mega-menu-group clr">
				<div>
					<h3><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/About us ','WT.ti','Menu - About us ');" href="http://www.nationalarchives.gov.uk/about">About us</a></h3>
					<ul>
						<li class="mobileOnly"><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/About us ','WT.ti','Menu - About us ');" href="http://www.nationalarchives.gov.uk/about/">About us home</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Our role ','WT.ti','Menu - Our role ');" href="http://www.nationalarchives.gov.uk/about/our-role/">Our role</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Visit us ','WT.ti','Menu - Visit us ');" href="http://www.nationalarchives.gov.uk/about/visit-us/">Visit us</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Opening times ','WT.ti','Menu - Opening times ');" href="http://www.nationalarchives.gov.uk/about/visit-us/opening-times">Opening times</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Jobs ','WT.ti','Menu - Jobs ');" href="http://www.nationalarchives.gov.uk/about/jobs/">Jobs</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Get involved ','WT.ti','Menu - Get involved ');" href="http://www.nationalarchives.gov.uk/about/get-involved/">Get involved</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/News ','WT.ti','Menu - News ');" href="http://www.nationalarchives.gov.uk/about/news/">News</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Press room ','WT.ti','Menu - Press room ');" href="http://www.nationalarchives.gov.uk/about/press-room/">Press room</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Commercial opportunities ','WT.ti','Menu - Commercial opportunities ');" href="http://www.nationalarchives.gov.uk/about/commercial-opportunities/">Commercial opportunities</a></li>
					</ul>
				</div>
			</nav>
			<nav class="col mega-menu-group clr">
				<div>
					<h3><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Education ','WT.ti','Menu - Education ');" href="http://www.nationalarchives.gov.uk/education/">Education</a></h3>
					<ul>
						<li class="mobileOnly"><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Education ','WT.ti','Menu - Education ');" href="http://www.nationalarchives.gov.uk/education">Education home</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Topics ','WT.ti','Menu - Topics ');" href="http://www.nationalarchives.gov.uk/education/sessions-and-resources/?time-period=medieval,early-modern,empire-and-industry,victorians,early-20th-century,interwar,second-world-war,postwar">Time periods</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Lessons ','WT.ti','Menu - Lessons ');" href="http://www.nationalarchives.gov.uk/education/sessions-and-resources/?resource-type=lesson">Lessons</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Workshops ','WT.ti','Menu - Workshops ');" href="http://www.nationalarchives.gov.uk/education/sessions-and-resources/?resource-type=workshop">Workshops</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Videoconferences ','WT.ti','Menu - Videoconferences ');" href="http://www.nationalarchives.gov.uk/education/sessions-and-resources/?resource-type=video-conferences">Videoconferences</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Virtual classroom ','WT.ti','Menu - Virtual classroom ');" href="http://www.nationalarchives.gov.uk/education/sessions-and-resources/?resource-type=virtual-classroom">Virtual classroom</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Professional development ','WT.ti','Menu - Professional development ');" href="http://www.nationalarchives.gov.uk/education/teachers/professional-development/">Professional development</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/For teachers ','WT.ti','Menu - For teachers ');" href="http://www.nationalarchives.gov.uk/education/teachers/">For teachers</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/For students ','WT.ti','Menu - For students ');" href="http://www.nationalarchives.gov.uk/education/students/">For students</a></li>
					</ul>
				</div>
			</nav>
			<nav class="col mega-menu-group clr">
				<div>
					<h3><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/help-with-your-research ','WT.ti','Menu – Help with your research home ');" href="http://www.nationalarchives.gov.uk/help-with-your-research">Help with your research</a></h3>
					<ul>
						<li class="mobileOnly"><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/help-with-your-research ','WT.ti','Menu – Help with your research home ');" href="http://www.nationalarchives.gov.uk/help-with-your-research/">Help with your research home</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Search Discovery, our catalogue ','WT.ti','Menu - Search Discovery, our catalogue ');" href="http://discovery.nationalarchives.gov.uk/">Search Discovery, our catalogue</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Start your research here ','WT.ti','Menu - Start your research here ');" href="http://www.nationalarchives.gov.uk/help-with-your-research/start-here/">Start your research here</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/help-with-your-research/research-guides-keywords/ ','WT.ti','Menu - Research guides A-Z ');" href="http://www.nationalarchives.gov.uk/help-with-your-research/research-guides-keywords/">Research guides A-Z</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/online-collections ','WT.ti','Menu - Online collections ');" href="http://www.nationalarchives.gov.uk/help-with-your-research/research-guides/?research-category=online">Online collections</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/UK Government Web Archive ','WT.ti','Menu - UK Government Web Archive ');" href="http://www.nationalarchives.gov.uk/webarchive/">UK Government Web Archive</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Certificates of British Citizenship ','WT.ti','Menu - Certificates of British Citizenship ');" href="http://www.nationalarchives.gov.uk/help-with-your-research/research-guides/certificates-of-british-citizenship-1949-1986/">Certificates of British Citizenship</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Record copying ','WT.ti','Menu - Record copying ');" href="http://www.nationalarchives.gov.uk/help-with-your-research/record-copying/">Record copying</a></li>
					</ul>
				</div>
			</nav>
			<nav class="col mega-menu-group clr">
				<div>
					<h3 class=hyphenate><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Information Management ','WT.ti','Menu - Information Management ');" href="http://www.nationalarchives.gov.uk/information-management/">Information management</a></h3>
					<ul>
						<li class="mobileOnly"><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Information Management ','WT.ti','Menu - Information Management ');" href="http://www.nationalarchives.gov.uk/information-management/">Information management home</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Guidance and standards A-Z ','WT.ti','Menu - Guidance and standards A-Z ');" href="http://www.nationalarchives.gov.uk/information-management/browse-guidance-standards/">Guidance and standards A-Z</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Crown copyright ','WT.ti','Menu - Crown copyright ');" href="http://www.nationalarchives.gov.uk/information-management/re-using-public-sector-information/copyright/">Copyright</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Re-using PSI ','WT.ti','Menu - Re-using PSI ');" href="http://www.nationalarchives.gov.uk/information-management/manage-information/">How to manage your information</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Re-using PSI ','WT.ti','Menu - Re-using PSI ');" href="http://www.nationalarchives.gov.uk/information-management/re-using-public-sector-information/">Re-using PSI</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Official publishing ','WT.ti','Menu - Official publishing ');" href="http://www.nationalarchives.gov.uk/information-management/producing-official-publications/">Producing official publications</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Records selection and transfer ','WT.ti','Menu - Records selection and transfer ');" href="http://www.nationalarchives.gov.uk/information-management/legislation/">Legislation and regulations</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Training ','WT.ti','Menu - Training ');" href="http://www.nationalarchives.gov.uk/information-management/training/">Training</a></li>
					</ul>
				</div>
			</nav>
			<nav class="col mega-menu-group clr">
				<div>
					<h3><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Archives sector ','WT.ti','Menu - Archives sector ');" href="http://www.nationalarchives.gov.uk/archives-sector">Archives sector</a></h3>
					<ul>
						<li class="mobileOnly"><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Archives sector ','WT.ti','Menu - Archives sector ');" href="http://www.nationalarchives.gov.uk/archives-sector">Archives sector home</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Historical Manuscripts Commission ','WT.ti','Menu - Historical Manuscripts Commission ');" href="http://www.nationalarchives.gov.uk/archives-sector/our-archives-sector-role/historical-manuscripts-commission/">Historical Manuscripts Commission</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Finding funding ','WT.ti','Menu - Finding funding ');" href="http://www.nationalarchives.gov.uk/archives-sector/finding-funding/">Finding funding</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Projects and programmes ','WT.ti','Menu - Projects and programmes ');" href="http://www.nationalarchives.gov.uk/archives-sector/projects-and-programmes/">Projects and programmes</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Case studies and research ','WT.ti','Menu - Case studies and research ');" href="http://www.nationalarchives.gov.uk/archives-sector/case-studies-and-research-reports/">Case studies and research reports</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Operating your archive ','WT.ti','Menu - Operating your archive ');" href="http://www.nationalarchives.gov.uk/archives-sector/advice-and-guidance/">Operating your archive</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Our role in the archives sector ','WT.ti','Menu - Our role in the archives sector ');" href="http://www.nationalarchives.gov.uk/archives-sector/our-archives-sector-role/">Our role in the archives sector</a></li>
					</ul>
				</div>
			</nav>
			<nav class="col mega-menu-group clr">
				<div>
					<h3>More...</h3>
					<ul>
						<li class="mobileOnly"><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/More? ','WT.ti','Menu - More? ');" href="http://www.nationalarchives.gov.uk/about/">More...</a></li>
						<li class="image"><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Bookshop ','WT.ti','Menu - Bookshop ');" href="http://www.nationalarchives.gov.uk/bookshop/">Bookshop</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Image library ','WT.ti','Menu - Image library ');" href="http://www.nationalarchives.gov.uk/imagelibrary/">Image library</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Blog ','WT.ti','Menu - Blog ');" href="http://www.nationalarchives.gov.uk/blog/">Blog</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Podcasts and videos ','WT.ti','Menu - Podcasts and videos ');" href="http://www.nationalarchives.gov.uk/media/">Podcasts and videos</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Contact us ','WT.ti','Menu - Contact us ');" href="http://www.nationalarchives.gov.uk/contact-us/">Contact us</a></li>
						<li class="imgContent"><a href="http://www.nationalarchives.gov.uk/first-world-war/" title="First World War 100 - read about our centenary programme"><img src="http://www.nationalarchives.gov.uk/images/home/menu-first-world-war-b.jpg" alt="Explore First World War 100"></a></li>
					</ul>
				</div>
			</nav>
		</section>
	</div>
</noscript>

<div class="mega-menu">
  
		<section class="row">
			<nav class="col mega-menu-group clr">
				<div>
					<h3><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/About us ','WT.ti','Menu - About us ');" href="http://www.nationalarchives.gov.uk/about">About us</a></h3>
					<ul>
						<li class="mobileOnly"><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/About us ','WT.ti','Menu - About us ');" href="http://www.nationalarchives.gov.uk/about/">About us home</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Our role ','WT.ti','Menu - Our role ');" href="http://www.nationalarchives.gov.uk/about/our-role/">Our role</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Visit us ','WT.ti','Menu - Visit us ');" href="http://www.nationalarchives.gov.uk/about/visit-us/">Visit us</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Opening times ','WT.ti','Menu - Opening times ');" href="http://www.nationalarchives.gov.uk/about/visit-us/opening-times">Opening times</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Jobs ','WT.ti','Menu - Jobs ');" href="http://www.nationalarchives.gov.uk/about/jobs/">Jobs</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Get involved ','WT.ti','Menu - Get involved ');" href="http://www.nationalarchives.gov.uk/about/get-involved/">Get involved</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/News ','WT.ti','Menu - News ');" href="http://www.nationalarchives.gov.uk/about/news/">News</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Press room ','WT.ti','Menu - Press room ');" href="http://www.nationalarchives.gov.uk/about/press-room/">Press room</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Commercial opportunities ','WT.ti','Menu - Commercial opportunities ');" href="http://www.nationalarchives.gov.uk/about/commercial-opportunities/">Commercial opportunities</a></li>
					</ul>
				</div>
			</nav>
			<nav class="col mega-menu-group clr">
				<div>
					<h3><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Education ','WT.ti','Menu - Education ');" href="http://www.nationalarchives.gov.uk/education/">Education</a></h3>
					<ul>
						<li class="mobileOnly"><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Education ','WT.ti','Menu - Education ');" href="http://www.nationalarchives.gov.uk/education">Education home</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Topics ','WT.ti','Menu - Topics ');" href="http://www.nationalarchives.gov.uk/education/sessions-and-resources/?time-period=medieval,early-modern,empire-and-industry,victorians,early-20th-century,interwar,second-world-war,postwar">Time periods</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Lessons ','WT.ti','Menu - Lessons ');" href="http://www.nationalarchives.gov.uk/education/sessions-and-resources/?resource-type=lesson">Lessons</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Workshops ','WT.ti','Menu - Workshops ');" href="http://www.nationalarchives.gov.uk/education/sessions-and-resources/?resource-type=workshop">Workshops</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Videoconferences ','WT.ti','Menu - Videoconferences ');" href="http://www.nationalarchives.gov.uk/education/sessions-and-resources/?resource-type=video-conferences">Videoconferences</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Virtual classroom ','WT.ti','Menu - Virtual classroom ');" href="http://www.nationalarchives.gov.uk/education/sessions-and-resources/?resource-type=virtual-classroom">Virtual classroom</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Professional development ','WT.ti','Menu - Professional development ');" href="http://www.nationalarchives.gov.uk/education/teachers/professional-development/">Professional development</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/For teachers ','WT.ti','Menu - For teachers ');" href="http://www.nationalarchives.gov.uk/education/teachers/">For teachers</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/For students ','WT.ti','Menu - For students ');" href="http://www.nationalarchives.gov.uk/education/students/">For students</a></li>
					</ul>
				</div>
			</nav>
			<nav class="col mega-menu-group clr">
				<div>
					<h3><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/help-with-your-research ','WT.ti','Menu – Help with your research home ');" href="http://www.nationalarchives.gov.uk/help-with-your-research">Help with your research</a></h3>
					<ul>
						<li class="mobileOnly"><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/help-with-your-research ','WT.ti','Menu – Help with your research home ');" href="http://www.nationalarchives.gov.uk/help-with-your-research/">Help with your research home</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Search Discovery, our catalogue ','WT.ti','Menu - Search Discovery, our catalogue ');" href="http://discovery.nationalarchives.gov.uk/">Search Discovery, our catalogue</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Start your research here ','WT.ti','Menu - Start your research here ');" href="http://www.nationalarchives.gov.uk/help-with-your-research/start-here/">Start your research here</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/help-with-your-research/research-guides-keywords/ ','WT.ti','Menu - Research guides A-Z ');" href="http://www.nationalarchives.gov.uk/help-with-your-research/research-guides-keywords/">Research guides A-Z</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/online-collections ','WT.ti','Menu - Online collections ');" href="http://www.nationalarchives.gov.uk/help-with-your-research/research-guides/?research-category=online">Online collections</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/UK Government Web Archive ','WT.ti','Menu - UK Government Web Archive ');" href="http://www.nationalarchives.gov.uk/webarchive/">UK Government Web Archive</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Certificates of British Citizenship ','WT.ti','Menu - Certificates of British Citizenship ');" href="http://www.nationalarchives.gov.uk/help-with-your-research/research-guides/certificates-of-british-citizenship-1949-1986/">Certificates of British Citizenship</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Record copying ','WT.ti','Menu - Record copying ');" href="http://www.nationalarchives.gov.uk/help-with-your-research/record-copying/">Record copying</a></li>
					</ul>
				</div>
			</nav>
			<nav class="col mega-menu-group clr">
				<div>
					<h3 class=hyphenate><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Information Management ','WT.ti','Menu - Information Management ');" href="http://www.nationalarchives.gov.uk/information-management/">Information management</a></h3>
					<ul>
						<li class="mobileOnly"><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Information Management ','WT.ti','Menu - Information Management ');" href="http://www.nationalarchives.gov.uk/information-management/">Information management home</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Guidance and standards A-Z ','WT.ti','Menu - Guidance and standards A-Z ');" href="http://www.nationalarchives.gov.uk/information-management/browse-guidance-standards/">Guidance and standards A-Z</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Crown copyright ','WT.ti','Menu - Crown copyright ');" href="http://www.nationalarchives.gov.uk/information-management/re-using-public-sector-information/copyright/">Copyright</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Re-using PSI ','WT.ti','Menu - Re-using PSI ');" href="http://www.nationalarchives.gov.uk/information-management/manage-information/">How to manage your information</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Re-using PSI ','WT.ti','Menu - Re-using PSI ');" href="http://www.nationalarchives.gov.uk/information-management/re-using-public-sector-information/">Re-using PSI</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Official publishing ','WT.ti','Menu - Official publishing ');" href="http://www.nationalarchives.gov.uk/information-management/producing-official-publications/">Producing official publications</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Records selection and transfer ','WT.ti','Menu - Records selection and transfer ');" href="http://www.nationalarchives.gov.uk/information-management/legislation/">Legislation and regulations</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Training ','WT.ti','Menu - Training ');" href="http://www.nationalarchives.gov.uk/information-management/training/">Training</a></li>
					</ul>
				</div>
			</nav>
			<nav class="col mega-menu-group clr">
				<div>
					<h3><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Archives sector ','WT.ti','Menu - Archives sector ');" href="http://www.nationalarchives.gov.uk/archives-sector">Archives sector</a></h3>
					<ul>
						<li class="mobileOnly"><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Archives sector ','WT.ti','Menu - Archives sector ');" href="http://www.nationalarchives.gov.uk/archives-sector">Archives sector home</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Historical Manuscripts Commission ','WT.ti','Menu - Historical Manuscripts Commission ');" href="http://www.nationalarchives.gov.uk/archives-sector/our-archives-sector-role/historical-manuscripts-commission/">Historical Manuscripts Commission</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Finding funding ','WT.ti','Menu - Finding funding ');" href="http://www.nationalarchives.gov.uk/archives-sector/finding-funding/">Finding funding</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Projects and programmes ','WT.ti','Menu - Projects and programmes ');" href="http://www.nationalarchives.gov.uk/archives-sector/projects-and-programmes/">Projects and programmes</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Case studies and research ','WT.ti','Menu - Case studies and research ');" href="http://www.nationalarchives.gov.uk/archives-sector/case-studies-and-research-reports/">Case studies and research reports</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Operating your archive ','WT.ti','Menu - Operating your archive ');" href="http://www.nationalarchives.gov.uk/archives-sector/advice-and-guidance/">Operating your archive</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Our role in the archives sector ','WT.ti','Menu - Our role in the archives sector ');" href="http://www.nationalarchives.gov.uk/archives-sector/our-archives-sector-role/">Our role in the archives sector</a></li>
					</ul>
				</div>
			</nav>
			<nav class="col mega-menu-group clr">
				<div>
					<h3>More...</h3>
					<ul>
						<li class="mobileOnly"><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/More? ','WT.ti','Menu - More? ');" href="http://www.nationalarchives.gov.uk/about/">More...</a></li>
						<li class="image"><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Bookshop ','WT.ti','Menu - Bookshop ');" href="http://www.nationalarchives.gov.uk/bookshop/">Bookshop</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Image library ','WT.ti','Menu - Image library ');" href="http://www.nationalarchives.gov.uk/imagelibrary/">Image library</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Blog ','WT.ti','Menu - Blog ');" href="http://www.nationalarchives.gov.uk/blog/">Blog</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Podcasts and videos ','WT.ti','Menu - Podcasts and videos ');" href="http://www.nationalarchives.gov.uk/media/">Podcasts and videos</a></li>
						<li><a onclick="dcsMultiTrack('DCS.dcsuri','/menu/Contact us ','WT.ti','Menu - Contact us ');" href="http://www.nationalarchives.gov.uk/contact-us/">Contact us</a></li>
						<li class="imgContent"><a href="http://www.nationalarchives.gov.uk/first-world-war/" title="First World War 100 - read about our centenary programme"><img src="http://www.nationalarchives.gov.uk/images/home/menu-first-world-war-b.jpg" alt="Explore First World War 100"></a></li>
					</ul>
				</div>
			</nav>
</section>
</div></div>

<div id="page_wrap" class="container">
  <section class="row" id="breadcrumb-holder">
    <nav>
      <ul id="breadcrumb">
        <li>
          <a href="http://www.nationalarchives.gov.uk/default.htm">Home</a></li>
        <li>
          <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
        </li>
      </ul>
<!--
      <ul id="global-controls">
        <li><a href="http://nationalarchives.websiteredesign.surveyanalytics.com/" target="_blank" class="call-to-action-link"><span>Send us </span><span>feedback</span></a>
        </li>
      </ul>
-->
    </nav>
  </section>

<section class="row header-blog" id="section-header">
    <article class="col starts-at-full clr">
      <h1><span><span><a href="http://blog.nationalarchives.gov.uk">Blog</a></span></span></h1>
      <!--<div class="subheading"> <span>Anything and everything archives related</span> </div>-->
      <div class="overLay grid-within-grid-two-item">
        <div class="griditem">
          <div class="breather">
            <div class="snicon snicon-blog"> <a href="http://www.nationalarchives.gov.uk/rss/">
        <div id="rss"></div>
        Subscribe</a> </div>
       
            <div class="blog-dropdowns">
        <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('header-widgets')) : else : ?>
        Error retrieving authors and history
        <?php endif; ?>
      </div>
          </div>
        </div>
        <div class="griditem">
            <div id="search-field-wrapper-blog">
      <form id="searchform"  method="get" role="search" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <!--<label class="screen-reader-text" for="s">Search</label>-->
        <input type="text" name="s" id="s" value="Search our Blog" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;" class="search-field" placeholder="Search our Blog" />
        <input type="submit" id="searchsubmit" class="search-button-blog" alt="Submit search" value="" title="Submit"/>
      </form>
    </div>
        </div>
      </div>
    </article>
  </section>
  <div class="img-desc level-1"> Empire Marketing Board 1927-1933 poster, A Blast Furnace <a href="https://images.nationalarchives.gov.uk/assetbank-nationalarchives/action/viewAsset?id=18013&index=0&total=1&view=viewSearchItem" title="Image of Empire Marketing Board 1927-1933 poster, A Blast Furnace. Catalogue reference: CO 956/260 ">CO 956/260 </a> </div>
    
</div>
<!-- end container row --> 


