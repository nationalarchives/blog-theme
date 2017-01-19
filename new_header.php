<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
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
<meta name="TNAcategory" content ="<?php $values = get_post_custom_values("tnasearch"); if($values[0] == "") { echo "Records"; } else { echo $values[0]; } ?>" />   
<?php remove_filter( 'wp_title', 'twentytwelve_wp_title', 10, 2 ); ?>
<title><?php wp_title(''); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<meta name="viewport" content="initial-scale = 1.0">

<link rel="stylesheet" type="text/css" media="all" href="http://nationalarchives.gov.uk/styles/normalize-min.css" />
<link rel="stylesheet" type="text/css" media="all" href="http://nationalarchives.gov.uk/styles/global.css" />
<link rel="stylesheet" type="text/css" media="all" href="http://nationalarchives.gov.uk/styles/header-and-mega-menu.css" />
<link rel="stylesheet" type="text/css" media="all" href="http://nationalarchives.gov.uk/styles/section-all.css" />
<link rel="stylesheet" type="text/css" media="all" href="http://nationalarchives.gov.uk/styles/footer.css" />
<link rel="stylesheet" type="text/css" media="all" href="http://nationalarchives.gov.uk/styles/palette.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/styles/blog.css" />

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/styles/media-queries.css" />

<link rel="stylesheet" type="text/css" media="all" href="http://fonts.googleapis.com/css?family=Bitter" />
<link rel="stylesheet" type="text/css" media="all" href="http://fonts.googleapis.com/css?family=Open+Sans" />

<!--[if IE 9]>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/styles/ie9.css">
<![endif]-->

<!--[if (gte IE 6)&(lte IE 8)]>
	<script type="text/javascript" src="/scripts/respond.min.js"></script>	
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/styles/ie7-8.css">
<![endif]-->
<script type="text/javascript" src="http://nationalarchives.gov.uk/scripts/modernizr.min.js"></script>
<!-- iOS viewport fix -->
<script type="text/javascript" src="http://nationalarchives.gov.uk/scripts/ios-viewport-fix.js"></script>
<link rel="shortcut icon" href="http://nationalarchives.gov.uk/favicon.ico" type="image/vnd.microsoft.icon" />
<link rel="icon" href="http://nationalarchives.gov.uk/favicon.ico" type="image/vnd.microsoft.icon" /> 
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
      <a href="http://nationalarchives.gov.uk/default.htm" title="Go to the The National Archives homepage">
        <img src="http://nationalarchives.gov.uk/images/global/logo-white.png" alt="The National Archives" id="logo"/>
      </a>
      <form action="http://nationalarchives.gov.uk/search/quick_search.aspx" method="get" id="mobileGlobalSearch">
        <div id="mobile-search-outer-wrapper">
          <div id="mobile-search-wrapper">
            <input type="text" id="mobile-search-field" placeholder="Search our website..." name="search_text" required="" aria-required="true" >
            <input type="submit" alt="Submit search" value="">
          </div>
          <div id="changeDestination">
            <input checked type="radio" class="mobileSearchDestinationOption" name="searchDestination" id="websiteSearch" data-target="/search/quick_search.aspx" data-placeholder="Search our website..." data-fieldName="search_text"/><label for="websiteSearch">Search our website</label>
            <input type="radio" class="mobileSearchDestinationOption" name="searchDestination" id="catalogueSearch" data-target="http://discovery.nationalarchives.gov.uk/SearchUI/s/res" data-placeholder="Search our records..." data-fieldName="_q" /><label for="catalogueSearch">Search our records</label>
          </div>
        </div>
      </form>
    </article>
    <article class="col starts-at-full ends-at-half clr">
      <div id="search-field-wrapper">
        <form action="http://nationalarchives.gov.uk/search/quick_search.aspx" method="get" id="globalSearch">
          <span id="scope-selector">&nbsp;</span>
          <input type="text" class="search-field" placeholder="Search our website..." id="tnaSearch" name="search_text" required="" aria-required="true" >
          <input type="submit" class="search-button" alt="Submit search" id="search-button" value="">
        </form>
        <ul id="search-options">
          <li><a href="#" class="formDestinationChanger" data-target="http://nationalarchives.gov.uk/search/quick_search.aspx" data-placeholder="Search our website..." data-fieldName="search_text" role="button" aria-label="Change form destination to search the website">Search our website</a></li>
          <li><a href="#" class="formDestinationChanger" data-target="http://discovery.nationalarchives.gov.uk/SearchUI/s/res" data-placeholder="Search our records..." data-fieldName="_q" role="button" aria-label="Change form destination to search the catalogue">Search our records</a></li>        
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
      <h3><a href="http://nationalarchives.gov.uk/about" onclick="dcsMultiTrack('DCS.dcsuri','/menu/About us ','WT.ti','Menu - About us ');">About us</a></h3>
      <!-- <p class="sectionDesc">The UK government's official archive from Domesday Book to digital</p> -->
      <ul>
        <li class="mobileOnly"><a href="http://nationalarchives.gov.uk/about" onclick="dcsMultiTrack('DCS.dcsuri','/menu/About us ','WT.ti','Menu - About us ');">About us home</a></li>
        <li><a href="http://nationalarchives.gov.uk/about/our-role.htm" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Our role ','WT.ti','Menu - Our role ');">Our role</a></li>
        <li><a href="http://nationalarchives.gov.uk/visit/" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Visit us ','WT.ti','Menu - Visit us ');">Visit us</a></li>
        <li><a href="http://nationalarchives.gov.uk/visit/times.htm" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Opening times ','WT.ti','Menu - Opening times ');">Opening times</a></li>
        <li><a href="http://nationalarchives.gov.uk/jobs/" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Jobs ','WT.ti','Menu - Jobs ');">Jobs</a></li>
        <li><a href="http://nationalarchives.gov.uk/get-involved/default.htm" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Get involved ','WT.ti','Menu - Get involved ');">Get involved</a></li>
        <li><a href="http://nationalarchives.gov.uk/news/" onclick="dcsMultiTrack('DCS.dcsuri','/menu/News ','WT.ti','Menu - News ');">News</a></li>
        <li><a href="http://nationalarchives.gov.uk/pressroom/" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Press room ','WT.ti','Menu - Press room ');">Press room</a></li>
        <li><a href="http://nationalarchives.gov.uk/about/commercial-opportunities.htm" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Commercial opportunities ','WT.ti','Menu - Commercial opportunities ');">Commercial opportunities</a></li>
      </ul>
    </div>
  </nav>
  <nav class="col mega-menu-group clr">
    <div>
      <h3><a href="http://nationalarchives.gov.uk/education" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Education ','WT.ti','Menu - Education ');">Education</a></h3>
      <!-- <p class="sectionDesc">Bringing history to life through our award winning resources for schools</p> -->
      <ul>    
        <li class="mobileOnly"><a href="http://nationalarchives.gov.uk/education" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Education ','WT.ti','Menu - Education ');">Education home</a></li>
        <li><a href="http://nationalarchives.gov.uk/education/topics.htm" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Topics ','WT.ti','Menu - Topics ');">Topics</a></li>
        <li><a href="http://nationalarchives.gov.uk/education/lessons.htm" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Lessons ','WT.ti','Menu - Lessons ');">Lessons</a></li>
        <li><a href="http://nationalarchives.gov.uk/education/workshops.htm" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Workshops ','WT.ti','Menu - Workshops ');">Workshops</a></li>
        <li><a href="http://nationalarchives.gov.uk/education/videoconferences.htm" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Videoconferences ','WT.ti','Menu - Videoconferences ');">Videoconferences</a></li>
        <li><a href="http://nationalarchives.gov.uk/education/virtual-classroom.htm" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Virtual classroom ','WT.ti','Menu - Virtual classroom ');">Virtual classroom</a></li>
        <li><a href="http://nationalarchives.gov.uk/education/cpd/professional-development.htm" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Professional development ','WT.ti','Menu - Professional development ');">Professional development</a></li>
        <li><a href="http://nationalarchives.gov.uk/education/for-teachers.htm" onclick="dcsMultiTrack('DCS.dcsuri','/menu/For teachers ','WT.ti','Menu - For teachers ');">For teachers</a></li> 
        <li><a href="http://nationalarchives.gov.uk/education/for-students.htm" onclick="dcsMultiTrack('DCS.dcsuri','/menu/For students ','WT.ti','Menu - For students ');">For students</a></li> 
        
      </ul>
    </div>
  </nav>
  <nav class="col mega-menu-group clr">
    <div>
      <h3><a href="http://nationalarchives.gov.uk/records" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Records ','WT.ti','Menu - Records ');">Records</a></h3>
      <!-- <p class="sectionDesc">Find out how we can help your research, through guides, tutorials, and podcasts</p> -->
      <ul>  
        <li class="mobileOnly"><a href="http://nationalarchives.gov.uk/records" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Records ','WT.ti','Menu - Records ');">Records home</a></li>
        <li><a href="http://discovery.nationalarchives.gov.uk/SearchUI/" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Search Discovery, our catalogue ','WT.ti','Menu - Search Discovery, our catalogue ');">Search Discovery, our catalogue</a></li>
        <li><a href="http://nationalarchives.gov.uk/records/start-here.htm" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Start your research here ','WT.ti','Menu - Start your research here ');">Start your research here</a></li>
        <li><a href="http://nationalarchives.gov.uk/records/looking-for-person/" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Looking for a person ','WT.ti','Menu - Looking for a person ');">Looking for a person</a></li>
        <li><a href="http://nationalarchives.gov.uk/records/looking-for-place/" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Looking for a place ','WT.ti','Menu - Looking for a place ');">Looking for a place</a></li>
        <li><a href="http://nationalarchives.gov.uk/records/looking-for-subject/" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Looking for a subject ','WT.ti','Menu - Looking for a subject ');">Looking for a subject</a></li>
        <li><a href="http://nationalarchives.gov.uk/records/atoz/" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Records guidance A-Z ','WT.ti','Menu - Guidance A-Z ');">Records guidance A-Z</a></li>
        <li><a href="http://nationalarchives.gov.uk/records/our-online-records.htm" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Our online records ','WT.ti','Menu - Our online records ');">Our online records</a></li>
        <li><a href="http://nationalarchives.gov.uk/records/catalogues-and-online-/records" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Catalogues and online records ','WT.ti','Menu - Catalogues and online records ');">Full list of catalogues and online records</a></li>
        <li><a href="http://nationalarchives.gov.uk/webarchive/" onclick="dcsMultiTrack('DCS.dcsuri','/menu/UK Government Web Archive ','WT.ti','Menu - UK Government Web Archive ');">UK Government Web Archive</a></li>
        <li><a href="http://nationalarchives.gov.uk/records/citizenship-and-naturalisation.htm" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Certificates of British Citizenship ','WT.ti','Menu - Certificates of British Citizenship ');">Certificates of British Citizenship</a></li>
        <li><a href="http://nationalarchives.gov.uk/recordcopying/" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Record copying ','WT.ti','Menu - Record copying ');">Record copying</a></li>
      </ul>
    </div>
  </nav>
  <nav class="col mega-menu-group clr">
    <div>
      <h3 class="hyphenate"><a href="http://nationalarchives.gov.uk/information-management" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Information Management ','WT.ti','Menu - Information Management ');">Information management</a></h3>
      <!-- <p class="sectionDesc">For all owners and custodians of records</p> -->
      <ul>
        <li class="mobileOnly"><a href="http://nationalarchives.gov.uk/information-management" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Information Management ','WT.ti','Menu - Information Management ');">Information management home</a></li>
        <li><a href="http://nationalarchives.gov.uk/information-management/guidance/a.htm" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Guidance and standards A-Z ','WT.ti','Menu - Guidance and standards A-Z ');">Guidance and standards A-Z</a></li>
        <li><a href="http://nationalarchives.gov.uk/information-management/our-services/crown-copyright.htm" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Crown copyright ','WT.ti','Menu - Crown copyright ');">Crown copyright</a></li>
        <li><a href="http://nationalarchives.gov.uk/information-management/our-services/official-publishing.htm" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Official publishing ','WT.ti','Menu - Official publishing ');">Official publishing</a></li>
        <li><a href="http://nationalarchives.gov.uk/information-management/our-services/selection-and-transfer.htm" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Records selection and transfer ','WT.ti','Menu - Records selection and transfer ');">Records selection and transfer</a></li>
        <li><a href="http://nationalarchives.gov.uk/information-management/projects-and-work/information-records-management.htm" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Information and records management ','WT.ti','Menu - Information and records management ');">Information and records management</a></li>
        <li><a href="http://nationalarchives.gov.uk/information-management/projects-and-work/digital-preservation.htm" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Digital preservation ','WT.ti','Menu - Digital preservation ');">Digital preservation</a></li>
        <li><a href="http://nationalarchives.gov.uk/information-management/policies/leading-psi-policy.htm" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Re-using PSI ','WT.ti','Menu - Re-using PSI ');">Re-using PSI</a></li>
                <li><a href="http://nationalarchives.gov.uk/information-management/uk-gov-licensing-framework.htm" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Licensing Framework ','WT.ti','Menu - Licensing Framework ');">Licensing Framework</a></li>
        <li><a href="http://nationalarchives.gov.uk/information-management/legislation-and-regulations.htm" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Legislation and regulations ','WT.ti','Menu - Legislation and regulations ');">Legislation and regulations</a></li>
        <li><a href="http://nationalarchives.gov.uk/information-management/training.htm" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Training ','WT.ti','Menu - Training ');">Training</a></li>

      </ul>
    </div>
  </nav>
  <nav class="col mega-menu-group clr">
    <div>
      <h3><a href="http://nationalarchives.gov.uk/archives-sector" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Archives sector ','WT.ti','Menu - Archives sector ');">Archives sector</a></h3>
      <!-- <p class="sectionDesc">Resources and services to help you develop your collection</p> -->
      <ul>
        <li class="mobileOnly"><a href="http://nationalarchives.gov.uk/archives-sector" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Archives sector ','WT.ti','Menu - Archives sector ');">Archives sector home</a></li>
        <li><a href="http://nationalarchives.gov.uk/archives-sector/current-initiatives.htm" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Current initiatives ','WT.ti','Menu - Current initiatives ');">Current initiatives</a></li>
        <li><a href="http://nationalarchives.gov.uk/archives-sector/developing-your-archives.htm" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Developing your archives ','WT.ti','Menu - Developing your archives ');">Developing your archives</a></li>
        <li><a href="http://nationalarchives.gov.uk/archives-sector/finding-funding.htm" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Finding funding ','WT.ti','Menu - Finding funding ');">Finding funding</a></li>
        <li><a href="http://nationalarchives.gov.uk/archives-sector/ask-question.htm" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Contact the team ','WT.ti','Menu - Contact the team ');">Contact the team</a></li>
        <li><a href="http://nationalarchives.gov.uk/archives-sector/share-your-expertise.htm" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Share your expertise ','WT.ti','Menu - Share your expertise ');">Share your expertise</a></li>
        <li><a href="http://nationalarchives.gov.uk/archives-sector/policy-strategy.htm" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Policies and strategies ','WT.ti','Menu - Policies and strategies ');">Policies and strategies</a></li>
        <li><a href="http://nationalarchives.gov.uk/archives-sector/statistics-studies-reports.htm" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Statistics, studies and reports ','WT.ti','Menu - Statistics, studies and reports ');">Statistics, studies and reports</a></li>
        <li><a href="http://nationalarchives.gov.uk/archives-sector/hmc.htm" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Historical Manuscripts Commission ','WT.ti','Menu - Historical Manuscripts Commission ');">Historical Manuscripts Commission</a></li>
      </ul>
    </div>
  </nav>
  <nav class="col mega-menu-group clr">
    <div>
      <h3>More...</h3>
      <!-- <p class="sectionDesc">Buy documents, images, books and more</p> -->
      <ul>    
              <li class="image"><a href="http://nationalarchives.gov.uk/bookshop/" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Bookshop ','WT.ti','Menu - Bookshop ');">Bookshop<!-- : <br><img src="/images/img-lib.jpg" >--></a></li>
        <li><a href="http://nationalarchives.gov.uk/imagelibrary/" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Image library ','WT.ti','Menu - Image library ');">Image library</a></li>
        <li><a href="http://nationalarchives.gov.uk/blog/" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Blog ','WT.ti','Menu - Blog ');">Blog</a></li>
        <li><a href="http://nationalarchives.gov.uk/labs/" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Labs ','WT.ti','Menu - Labs ');">Labs</a></li>
        <li><a href="https://community.nationalarchives.gov.uk/" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Community ','WT.ti','Menu - Community ');">Community</a></li>
        <li><a href="http://nationalarchives.gov.uk/media/" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Podcasts and videos ','WT.ti','Menu - Podcasts and videos ');">Podcasts and videos</a></li>

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
      <h3><a href="http://nationalarchives.gov.uk/about" onclick="dcsMultiTrack('DCS.dcsuri','/menu/About us ','WT.ti','Menu - About us ');">About us</a></h3>
      <!-- <p class="sectionDesc">The UK government's official archive from Domesday Book to digital</p> -->
      <ul>
        <li class="mobileOnly"><a href="http://nationalarchives.gov.uk/about" onclick="dcsMultiTrack('DCS.dcsuri','/menu/About us ','WT.ti','Menu - About us ');">About us home</a></li>
        <li><a href="http://nationalarchives.gov.uk/about/our-role.htm" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Our role ','WT.ti','Menu - Our role ');">Our role</a></li>
        <li><a href="http://nationalarchives.gov.uk/visit/" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Visit us ','WT.ti','Menu - Visit us ');">Visit us</a></li>
        <li><a href="http://nationalarchives.gov.uk/visit/times.htm" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Opening times ','WT.ti','Menu - Opening times ');">Opening times</a></li>
        <li><a href="http://nationalarchives.gov.uk/jobs/" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Jobs ','WT.ti','Menu - Jobs ');">Jobs</a></li>
        <li><a href="http://nationalarchives.gov.uk/get-involved/default.htm" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Get involved ','WT.ti','Menu - Get involved ');">Get involved</a></li>
        <li><a href="http://nationalarchives.gov.uk/news/" onclick="dcsMultiTrack('DCS.dcsuri','/menu/News ','WT.ti','Menu - News ');">News</a></li>
        <li><a href="http://nationalarchives.gov.uk/pressroom/" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Press room ','WT.ti','Menu - Press room ');">Press room</a></li>
        <li><a href="http://nationalarchives.gov.uk/about/commercial-opportunities.htm" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Commercial opportunities ','WT.ti','Menu - Commercial opportunities ');">Commercial opportunities</a></li>
      </ul>
    </div>
  </nav>
  <nav class="col mega-menu-group clr">
    <div>
      <h3><a href="http://nationalarchives.gov.uk/education" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Education ','WT.ti','Menu - Education ');">Education</a></h3>
      <!-- <p class="sectionDesc">Bringing history to life through our award winning resources for schools</p> -->
      <ul>    
        <li class="mobileOnly"><a href="http://nationalarchives.gov.uk/education" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Education ','WT.ti','Menu - Education ');">Education home</a></li>
        <li><a href="http://nationalarchives.gov.uk/education/topics.htm" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Topics ','WT.ti','Menu - Topics ');">Topics</a></li>
        <li><a href="http://nationalarchives.gov.uk/education/lessons.htm" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Lessons ','WT.ti','Menu - Lessons ');">Lessons</a></li>
        <li><a href="http://nationalarchives.gov.uk/education/workshops.htm" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Workshops ','WT.ti','Menu - Workshops ');">Workshops</a></li>
        <li><a href="http://nationalarchives.gov.uk/education/videoconferences.htm" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Videoconferences ','WT.ti','Menu - Videoconferences ');">Videoconferences</a></li>
        <li><a href="http://nationalarchives.gov.uk/education/virtual-classroom.htm" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Virtual classroom ','WT.ti','Menu - Virtual classroom ');">Virtual classroom</a></li>
        <li><a href="http://nationalarchives.gov.uk/education/cpd/professional-development.htm" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Professional development ','WT.ti','Menu - Professional development ');">Professional development</a></li>
        <li><a href="http://nationalarchives.gov.uk/education/for-teachers.htm" onclick="dcsMultiTrack('DCS.dcsuri','/menu/For teachers ','WT.ti','Menu - For teachers ');">For teachers</a></li> 
        <li><a href="http://nationalarchives.gov.uk/education/for-students.htm" onclick="dcsMultiTrack('DCS.dcsuri','/menu/For students ','WT.ti','Menu - For students ');">For students</a></li> 
        
      </ul>
    </div>
  </nav>
  <nav class="col mega-menu-group clr">
    <div>
      <h3><a href="http://nationalarchives.gov.uk/records" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Records ','WT.ti','Menu - Records ');">Records</a></h3>
      <!-- <p class="sectionDesc">Find out how we can help your research, through guides, tutorials, and podcasts</p> -->
      <ul>  
        <li class="mobileOnly"><a href="http://nationalarchives.gov.uk/records" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Records ','WT.ti','Menu - Records ');">Records home</a></li>
        <li><a href="http://discovery.nationalarchives.gov.uk/SearchUI/" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Search Discovery, our catalogue ','WT.ti','Menu - Search Discovery, our catalogue ');">Search Discovery, our catalogue</a></li>
        <li><a href="http://nationalarchives.gov.uk/records/start-here.htm" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Start your research here ','WT.ti','Menu - Start your research here ');">Start your research here</a></li>
        <li><a href="http://nationalarchives.gov.uk/records/looking-for-person/" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Looking for a person ','WT.ti','Menu - Looking for a person ');">Looking for a person</a></li>
        <li><a href="http://nationalarchives.gov.uk/records/looking-for-place/" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Looking for a place ','WT.ti','Menu - Looking for a place ');">Looking for a place</a></li>
        <li><a href="http://nationalarchives.gov.uk/records/looking-for-subject/" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Looking for a subject ','WT.ti','Menu - Looking for a subject ');">Looking for a subject</a></li>
        <li><a href="http://nationalarchives.gov.uk/records/atoz/" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Records guidance A-Z ','WT.ti','Menu - Guidance A-Z ');">Records guidance A-Z</a></li>
        <li><a href="http://nationalarchives.gov.uk/records/our-online-records.htm" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Our online records ','WT.ti','Menu - Our online records ');">Our online records</a></li>
        <li><a href="http://nationalarchives.gov.uk/records/catalogues-and-online-/records" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Catalogues and online records ','WT.ti','Menu - Catalogues and online records ');">Full list of catalogues and online records</a></li>
                        <li><a href="http://nationalarchives.gov.uk/webarchive/" onclick="dcsMultiTrack('DCS.dcsuri','/menu/UK Government Web Archive ','WT.ti','Menu - UK Government Web Archive ');">UK Government Web Archive</a></li>
        <li><a href="http://nationalarchives.gov.uk/contact/contactform.asp?id=7" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Certificates of British Citizenship ','WT.ti','Menu - Certificates of British Citizenship ');">Certificates of British Citizenship</a></li>
        <li><a href="http://nationalarchives.gov.uk/recordcopying/" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Record copying ','WT.ti','Menu - Record copying ');">Record copying</a></li>
      </ul>
    </div>
  </nav>
  <nav class="col mega-menu-group clr">
    <div>
      <h3 class="hyphenate"><a href="http://nationalarchives.gov.uk/information-management" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Information Management ','WT.ti','Menu - Information Management ');">Information management</a></h3>
      <!-- <p class="sectionDesc">For all owners and custodians of records</p> -->
      <ul>
        <li class="mobileOnly"><a href="http://nationalarchives.gov.uk/information-management" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Information Management ','WT.ti','Menu - Information Management ');">Information management home</a></li>
        <li><a href="http://nationalarchives.gov.uk/information-management/guidance/a.htm" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Guidance and standards A-Z ','WT.ti','Menu - Guidance and standards A-Z ');">Guidance and standards A-Z</a></li>
        <li><a href="http://nationalarchives.gov.uk/information-management/our-services/crown-copyright.htm" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Crown copyright ','WT.ti','Menu - Crown copyright ');">Crown copyright</a></li>
        <li><a href="http://nationalarchives.gov.uk/information-management/our-services/official-publishing.htm" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Official publishing ','WT.ti','Menu - Official publishing ');">Official publishing</a></li>
        <li><a href="http://nationalarchives.gov.uk/information-management/our-services/selection-and-transfer.htm" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Records selection and transfer ','WT.ti','Menu - Records selection and transfer ');">Records selection and transfer</a></li>
        <li><a href="http://nationalarchives.gov.uk/information-management/projects-and-work/information-records-management.htm" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Information and records management ','WT.ti','Menu - Information and records management ');">Information and records management</a></li>
        <li><a href="http://nationalarchives.gov.uk/information-management/projects-and-work/digital-preservation.htm" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Digital preservation ','WT.ti','Menu - Digital preservation ');">Digital preservation</a></li>
        <li><a href="http://nationalarchives.gov.uk/information-management/policies/leading-psi-policy.htm" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Re-using PSI ','WT.ti','Menu - Re-using PSI ');">Re-using PSI</a></li>
                <li><a href="http://nationalarchives.gov.uk/information-management/uk-gov-licensing-framework.htm" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Licensing Framework ','WT.ti','Menu -  Licensing Framework ');">Licensing Framework</a></li>
        <li><a href="http://nationalarchives.gov.uk/information-management/legislation-and-regulations.htm" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Legislation and regulations ','WT.ti','Menu - Legislation and regulations ');">Legislation and regulations</a></li>
        <li><a href="http://nationalarchives.gov.uk/information-management/training.htm" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Training ','WT.ti','Menu - Training ');">Training</a></li>

      </ul>
    </div>
  </nav>
  <nav class="col mega-menu-group clr">
    <div>
      <h3><a href="http://nationalarchives.gov.uk/archives-sector" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Archives sector ','WT.ti','Menu - Archives sector ');">Archives sector</a></h3>
      <!-- <p class="sectionDesc">Resources and services to help you develop your collection</p> -->
      <ul>
        <li class="mobileOnly"><a href="http://nationalarchives.gov.uk/archives-sector" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Archives sector ','WT.ti','Menu - Archives sector ');">Archives sector home</a></li>
        <li><a href="http://nationalarchives.gov.uk/archives-sector/current-initiatives.htm" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Current initiatives ','WT.ti','Menu - Current initiatives ');">Current initiatives</a></li>
        <li><a href="http://nationalarchives.gov.uk/archives-sector/developing-your-archives.htm" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Developing your archives ','WT.ti','Menu - Developing your archives ');">Developing your archives</a></li>
        <li><a href="http://nationalarchives.gov.uk/archives-sector/finding-funding.htm" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Finding funding ','WT.ti','Menu - Finding funding ');">Finding funding</a></li>
        <li><a href="http://nationalarchives.gov.uk/archives-sector/ask-question.htm" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Contact the team ','WT.ti','Menu - Contact the team ');">Contact the team</a></li>
        <li><a href="http://nationalarchives.gov.uk/archives-sector/share-your-expertise.htm" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Share your expertise ','WT.ti','Menu - Share your expertise ');">Share your expertise</a></li>
        <li><a href="http://nationalarchives.gov.uk/archives-sector/policy-strategy.htm" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Policies and strategies ','WT.ti','Menu - Policies and strategies ');">Policies and strategies</a></li>
        <li><a href="http://nationalarchives.gov.uk/archives-sector/statistics-studies-reports.htm" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Statistics, studies and reports ','WT.ti','Menu - Statistics, studies and reports ');">Statistics, studies and reports</a></li>
        <li><a href="http://nationalarchives.gov.uk/archives-sector/hmc.htm" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Historical Manuscripts Commission ','WT.ti','Menu - Historical Manuscripts Commission ');">Historical Manuscripts Commission</a></li>
      </ul>
    </div>
  </nav>
  <nav class="col mega-menu-group clr">
    <div>
      <h3>More...</h3>
      <!-- <p class="sectionDesc">Buy documents, images, books and more</p> -->
      <ul>    
              
              <li class="image"><a href="http://nationalarchives.gov.uk/bookshop/" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Bookshop ','WT.ti','Menu - Bookshop ');">Bookshop<!-- : <br><img src="/images/img-lib.jpg" >--></a></li>
        <li><a href="http://nationalarchives.gov.uk/imagelibrary/" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Image library ','WT.ti','Menu - Image library ');">Image library</a></li>
        <li><a href="http://nationalarchives.gov.uk/blog/" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Blog ','WT.ti','Menu - Blog ');">Blog</a></li>
        <li><a href="http://nationalarchives.gov.uk/labs/" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Labs ','WT.ti','Menu - Labs ');">Labs</a></li>
        <li><a href="https://community.nationalarchives.gov.uk/" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Community ','WT.ti','Menu - Community ');">Community</a></li>
        <li><a href="http://nationalarchives.gov.uk/media/" onclick="dcsMultiTrack('DCS.dcsuri','/menu/Podcasts and videos ','WT.ti','Menu - Podcasts and videos ');">Podcasts and videos</a></li>

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
      <ul id="global-controls">
        <li><a href="http://nationalarchives.websiteredesign.surveyanalytics.com/" target="_blank" class="call-to-action-link"><span>Send us </span><span>feedback</span></a>
        </li>
      </ul>
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
      <form role="search" method="get" id="searchform" >
        <!--<label class="screen-reader-text" for="s">Search</label>-->
        <input type="text" name="s" id="s" value="Search our Blog" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;" class="search-field" placeholder="Search our Blog" />
        <input type="submit" id="searchsubmit" class="search-button-blog" alt="Submit search" value="" title="Submit"/>
      </form>
    </div>
        </div>
      </div>
    </article>
  </section>
  <div class="img-desc level-1"> Empire Marketing Board 1927-1933 poster, A Blast Furnace <a href="https://images.nationalarchives.gov.uk/assetbank-nationalarchives/action/viewAsset?id=25265&amp;index=0&amp;total=1&amp;view=viewSearchItem" title="Image of Empire Marketing Board 1927-1933 poster, A Blast Furnace. Catalogue reference: CO 956/260 ">CO 956/260 </a> </div>
    
</div>
<!-- end container row --> 


