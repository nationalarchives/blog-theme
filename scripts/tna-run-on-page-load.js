$(function(){ // All content must be placed within this IIFE. 
    $('#mega-menu-pull-down').show();

    // BETA notice
    $('<img>', {
    	src: 'images/beta.png',
    	alt: 'Beta'
    }).css({
    	position: 'fixed',
    	bottom: 0,
    	left: 0,
    	"z-index": 1
    }).prependTo('body');

    // Cookie notification
    if(document.cookie.indexOf("dontShowCookieNotice") == -1){
    $('<div class="cookieNotice">The National Archives\' use of cookies to improve services and ensure they work for you is outlined in our <a href="#" style="color: #000">cookie policy</a>. <a href="#" style="color: #000" id="cookieCutter">Remove this notification</a> </div>').css({
        padding: '5px',
        "text-align" : "center",
        backgroundColor : '#FCE45C',
        "border-top" : "1px solid #333",
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
	//     "first" : "480 pixels and up",
	// 	"second" : "768 pixels and up",
	// 	"third" : "1024 pixels and up",
	// 	"fourth" : "1280 pixels and up",
	//  "fifth" : "1440 pixels and up",
	// 	"landscape" : "Landscape media query",
	// 	"portrait" : "Portrait media query",
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

}); // All content must be placed within this IIFE. 