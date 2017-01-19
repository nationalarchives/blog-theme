$(function(){ // All content must be placed within this IIFE. 
    $('#mega-menu-pull-down').show();
    $.polyfillPlaceholder({ targetElement: '#tnaSearch' });

    // Search expander
    $('<span>', {
      html: "&nbsp;",
      id: "search-expander"
    }).css({
      position: "absolute",
      right: "5px"
    }).appendTo('#logo-holder');


    // Cookie notification
    if(document.cookie.indexOf("dontShowCookieNotice") == -1){
    $('<div class="cookieNotice">The National Archives\' use of cookies to improve services and ensure they work for you is outlined in our <a href="#" style="color: #000">cookie policy</a>. <a href="#" style="color: #000" id="cookieCutter">Remove</a> </div>').css({
        padding: '5px',
        "text-align" : "center",
        backgroundColor : '#FCE45C',
        position : 'fixed',
        bottom : 0,
        'font-size' : '14px',
        width : '100%',
        display : 'none'
        }).appendTo('body'); 

        setTimeout(function(){
            $('.cookieNotice').slideDown(1000);
        }, 1000); 
	}

  // START OF media query checker
	// var mediaQueryUL = document.createElement('div'), mediaQueryULID = document.createAttribute('id'), 
	// queries = {
 //    "first" : "480 pixels and up",
	// 	"second" : "768 pixels and up",
	// 	"third" : "1024 pixels and up",
	// 	"fourth" : "1280 pixels and up",
 //    "fifth" : "1440 pixels and up",
	// 	"landscape" : "Landscape media query",
	// 	"portrait" : "Portrait media query"
	// };
	// mediaQueryULID.nodeValue = "media-queries";
	// mediaQueryUL.setAttributeNode(mediaQueryULID);
	// document.body.appendChild(mediaQueryUL);

	// for (key in queries) {
	// 	var tempLI = document.createElement('div'), tempLIID = document.createAttribute('id');
	// 	tempLIID.nodeValue = key;
	// 	tempLI.setAttributeNode(tempLIID);
	// 	tempLI.textContent = queries[key];
	// 	mediaQueryUL.appendChild(tempLI);
	// };
	// END OF media query checker

    // START OF backstretch utilities
    //var showcaseSelection = [
     // {
		//	imgnum: 1,
		//	title: "West End London street scene Artist Grace Golden. Catalogue reference: INF 3/1738",
          //  src: "images/INF-3-1738.jpg",
          //  relatedLink: "https://images.nationalarchives.gov.uk/assetbank-nationalarchives/action/viewAsset?id=24975&index=0&total=1&view=viewSearchItem"
			
			
      // },
      //  {
        //    imgnum: 2,
		//	title: "Whitstable, 1905. Catalogue reference: COPY 1/228 (98)",
          //  src: "images/copy-1-228-98-whitstable-1905.jpg",
          //  relatedLink: "https://images.nationalarchives.gov.uk/assetbank-nationalarchives/action/viewAsset?id=4333&index=15&total=16&view=viewSearchItem"
       // } ,
         //{
         //  imgnum: 3,
		  // title: "Unity of Strength American, Chinese and British soldiers with flags of their countries as background. Catalogue reference: INF 3/334",
          //  src: "images/CO_956_99_1927-1933.jpg",
          //  relatedLink: "https://images.nationalarchives.gov.uk/assetbank-nationalarchives/action/viewAsset?id=25212&index=0&total=1&view=viewSearchItem"
        // } 
		
   //];

   // $("#records-home").backstretch(showcaseSelection[Math.floor(Math.random()*showcaseSelection.length)].src);

 //    $bgnum = Math.floor(Math.random() * 3) + 1;
	
	// if ($bgnum == 1) {
	// 		$title = "West End London street scene Artist Grace Golden.";
	// 		$catref = "INF 3/1738";
 //      $src = "images/INF-3-1738.jpg";
 //      $relatedLink = "https://images.nationalarchives.gov.uk/assetbank-nationalarchives/action/viewAsset?id=24975&index=0&total=1&view=viewSearchItem";
	// }
	// if ($bgnum == 2) {
 //      $title= "Whitstable, 1905.";
	// 		$catref ="COPY 1/228 (98)";
 //      $src= "images/copy-1-228-98-whitstable-1905.jpg";
 //      $relatedLink= "https://images.nationalarchives.gov.uk/assetbank-nationalarchives/action/viewAsset?id=4333&index=15&total=16&view=viewSearchItem";
	// }
	// if ($bgnum == 3) {
 //  		$title="Fiji: Copra - Pineapples - Bananas - Sugar; Artist: Keith Henderson.";
 //  		$catref="CO 956/99";
 //      $src="images/CO_956_99_1927-1933.jpg";
 //      $relatedLink="https://images.nationalarchives.gov.uk/assetbank-nationalarchives/action/viewAsset?id=18102&index=0&total=1&view=viewSearchItem";
		
	// }
	// $("#records-home").backstretch($src);
	// document.getElementById('home-img-desc').innerHTML = $title + " Catalogue reference: <a href=" + $relatedLink + " title=" + $title + ">"+ $catref +"</a>";
    // END OF backstretch utilities

var recordsHomeBanner = new RandomAsset([
    {
      title : "West End London street scene Artist Grace Golden.",
      catRef : "INF 3/1738",
      src : "images/INF-3-1738.jpg",
      relatedLink : "https://images.nationalarchives.gov.uk/assetbank-nationalarchives/action/viewAsset?id=24975&index=0&total=1&view=viewSearchItem"
    },
    {
      title : "Whitstable, 1905.",
      catRef  : "COPY 1/228 (98)",
      src : "images/copy-1-228-98-whitstable-1905.jpg",
      relatedLink : "https://images.nationalarchives.gov.uk/assetbank-nationalarchives/action/viewAsset?id=4333&index=15&total=16&view=viewSearchItem"
    },
    {
      title : "Fiji: Copra - Pineapples - Bananas - Sugar; Artist: Keith Henderson.",
      catRef : "CO 956/99",
      src : "images/CO_956_99_1927-1933.jpg",
      relatedLink : "https://images.nationalarchives.gov.uk/assetbank-nationalarchives/action/viewAsset?id=18102&index=0&total=1&view=viewSearchItem"  
    }
]);

recordsHomeBanner.backstretchIt('#records-home', '#home-img-desc');

var educationHomeBanner = new RandomAsset([
    {
      title : "Gym class North Park College, Croydon, 1900.",
      catRef : "COPY 1/448 (243)",
      src : "images/section-banner-education.jpg",
      relatedLink : "https://images.nationalarchives.gov.uk/assetbank-nationalarchives/action/viewAsset?id=8640&index=0&total=1&view=viewSearchItem"  
    }
  ])

educationHomeBanner.backstretchIt('#education-home', '#education-img-desc');

var flickrFooter = new RandomAsset([
    {
      title : "Staggered holidays for comfort. Artist Eileen Evans, 1939-1946.",
      catRef : "INF 3/94",
      src : "images/latest-flickr-INF-3-94.jpg",
      relatedLink : "http://www.flickr.com/photos/nationalarchives/with/9183133054//",
      linkTitle : "External website - opens in a new window"  
    }
  ]);

flickrFooter.insertAsHTMLImage('#flickr-image', '#flickr-caption');

var discoveryBanner = new RandomAsset([
    {
      title : "Poplar site",
      catRef : "WORK 25/69-B1-PR-9 ",
      src : "images/poplar.jpg",
      relatedLink : "https://images.nationalarchives.gov.uk/assetbank-nationalarchives/action/viewAsset?id=35501&index=49&total=52&view=viewSearchItem",
      linkTitle : "Opens in a new window"  
    }
  ]);

discoveryBanner.backstretchIt('#primary-search-box-discovery', '#discovery-banner-img-desc');

}); // All content must be placed within this IIFE. 

/*
 * The National Archives
 * Author:  Mihai Diaconita - WEB TEAM
 * Newsletter Back To Origin Jquery plugin
 * */
(function ($) {
    $.fn.newsletterBackToOrigin = function (options) {
        var settings = $.extend({}, $.fn.newsletterBackToOrigin.defaults, options);
        return this.each(function () {
            var thankYouURL = "http://www.nationalarchives.gov.uk/about/get-involved/newsletters/the-national-archives-newsletter/thank-you/",
                newValue = "?oldurl=" + window.location.href;
            return settings.$element.val(thankYouURL + newValue);
        });
    }

    // Default settings
    $.fn.newsletterBackToOrigin.defaults = {
        $element: $('input[name="ReturnURL"]'),
    }
}(jQuery));

// Make sure the signup newsletter form matches the ID below
// By default target element is $('input[name="ReturnURL"]')
$('#signup').newsletterBackToOrigin();