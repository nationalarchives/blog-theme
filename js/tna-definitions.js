
// Purpose: 	Repository of utility functions (i.e. custom extentions to jQuery and ), custom event handlers and helpers created for Discovery.
// 				All function definitions / custom jQuery utilities / constructors etc. must be placed within this file. 

// ------------
// 1. Utilities
// ------------
// 1.1 $.fadeToggler(passedObject) 
// 1.2 $.polyfillPlaceholder(passedObject)
// 1.3 $.displayFetchedContent(passedObject)
// 1.4 $.fetchWithAjax(passedObject)
// 1.5 $.showExpander()
// 1.6 $.setUpCheckboxTogglers()
// 1.7 $.customEventer()
// 1.8 cacheOrRetrieveSearchTerm() // Note: this is not a jQuery function.
// 1.9 $.setUpRadioRelationships()
// 1.10 $.bindToggle
// 1.11 RandomAssets() constructor
// 1.12 $.toggleDisplayOfSearchOptions() 

// 1. Utilities
// 1.1 $.fadeToggler(passedObject) 
$.fadeToggler = function(passedObject){
    var focussedElement, elementToFade, milliseconds;
    focussedElement = $(passedObject.focussedElement);
    elementToFade = $(passedObject.elementToFade);
    milliseconds = passedObject.milliseconds;
    if(!Modernizr.testProp('opacity')){ // Older browsers that don't support CSS opacity property
        elementToFade.hide();
        focussedElement.focus(
            function () {
                elementToFade.fadeIn(500);
        })
        focussedElement.blur(
            function () {
                elementToFade.fadeOut(500);
        });
    } else { // Newer browsers that do support CSS opacity property
        focussedElement.focus(
            function () {
                elementToFade.addClass('shown');
        })
        focussedElement.blur(
            function () {
                elementToFade.removeClass('shown');
        });
    };
};

// 1.2 $.polyfillPlaceholder(passedObject)
$.polyfillPlaceholder = function(passedObject){
    var targetElement, placeholderText; 
    targetElement = $(passedObject.targetElement); 
    placeholderText = targetElement.attr('placeholder')
    if(targetElement.length && !Modernizr.input.placeholder) { // If the element is on the page and there is no support for HTML5 placeholders
        targetElement.val(placeholderText);
        targetElement.on('focus', function(){
            if(targetElement.val() === placeholderText){
                targetElement.val("");
            } 
        });
        targetElement.on('blur', function(){
            if(!targetElement.val()){
                targetElement.val(placeholderText);
            } 
        });
    }
}

// 1.3 $.displayFetchedContent(passedObject)
$.displayFetchedContent = function(passedObject){
	var content, targetElement;
	content = passedObject.content || false; 
	targetElement = passedObject.targetElement || false; 
	if (content && targetElement){
		$(targetElement).replaceWith(content);
		return true;
    } else {
        return false;
    }
}

// 1.4 $.fetchWithAjax(passedObject)
$.fetchWithAjax = function(passedObject){
    cacheOrRetrieveSearchTerm();    
    var urlToGET, targetElement, request; 
    targetElement = passedObject.targetElement || false;
    urlToGET = passedObject.urlToGET || false;
    if(urlToGET && urlToGET){
        var request = $.ajax({
            url: urlToGET,
            cache: false,
            success: function(data){
                $.displayFetchedContent({ content: data, targetElement: targetElement});
                $(document).trigger("homePageUpdated");
                cacheOrRetrieveSearchTerm();    
            }
        });
        return true;
    } else {
        return false;
    }
}

// 1.5 $.showExpander()
$.showExpander = function(){
    if ($('.expander').length) {
        $('.expander').delay(200).slideDown(400);
    }   
}

// 1.6 $.setUpCheckboxTogglers()
$.setUpCheckboxTogglers = function() {
    if ($('#toggler').length) {
        $('#toggler').on('change', function () { // Bind togglees to togger selection
            if ($('#toggler').prop('checked')) {
                $('.togglee').prop('checked', true);
            } else {
                $('.togglee').prop('checked', false);
            }
        });
        $('.togglee').on('change', function(){ // Checking the toggler when the togglees are checked
            if(this.checked) $('#toggler').prop('checked', true);
        })
    };
    if ($('.clearTogglees').length) { // Clear togglees when another radio is checked 
        $('.clearTogglees').on('change', function(){
            $('.togglee').prop('checked', false);
        })
    }
}

// 1.7 $.customEventer()
$.customEventer = function(passedObject) {
    var elementIdOrClass = passedObject.elementIdOrClass, 
        eventToWatch = passedObject.eventToWatch,
        customEventToTrigger = passedObject.customEventToTrigger; 

    $(document).on(eventToWatch, elementIdOrClass, function(){
        $(document).trigger(customEventToTrigger);
    });
}

// 1.8 cacheOrRetrieveSearchTerm()
function cacheOrRetrieveSearchTerm() {
    if(!cacheOrRetrieveSearchTerm.term) { // If the property doesn't exist yet, create it. May seem odd, but necessary for memoization. 
        cacheOrRetrieveSearchTerm.term;            
    }
    if($('#mainSearch').val()) {
        cacheOrRetrieveSearchTerm.term = $('#mainSearch').val();
    }
    $('#mainSearch').val(cacheOrRetrieveSearchTerm.term);
}

// 1.9 $.setUpRadioRelationships()
$.setUpRadioRelationships = function() {
    $('.radioLeader, .squashRadioFollowers').on('change', function(){ // The only reason classes are used here is because the ids have a specific purpose outside of JS. 
        if($('.radioLeader').prop('checked')){
            $('.radioFollower').prop('checked', true);
        } else {
            $('.inRadioFollowerGroup').prop('checked', false);
        }
    });
    $('.inRadioFollowerGroup').on('change', function(){
        $('.radioLeader').prop('checked', true);
    });
}

// 1.10 $.bindToggle definition (jQuery utility method) that will: 
// a. Toggle the display of togglees when a toggler is clicked.
// b. [Optionally] Toggle a class on the toggler, when it is clicked. 
// c. Adds a 'hasBeenInteractedWith' class to the toggler
// Note: this function uses event delegation (so that it will work for DOM elements that do not exist at time of binding)
$.bindToggle = function(toggler, togglee, optional_togglerClass, optional_hideToggleeOnLoad){
	if(optional_hideToggleeOnLoad === true) {
		$(togglee).hide(); 
	};
    $(document).on('click', toggler, function(){
        $(togglee).slideToggle('fast');
        $(toggler).addClass('hasBeenInteractedWith');
        if(typeof optional_togglerClass === 'string') {
            $(toggler).toggleClass(optional_togglerClass);
        }
    });
}

// 1.11 Constructor for RandomAssets. This: 
//  a. should receive an array of objects represent assets 
//  b. returns an object that. 
//  c. a method is then attached to the object prototype which allows for the backstretch library to be called. 
// Note: since this is a constructor it should be used with 'new' (i.e. var p = new RandomAsset())

function RandomAsset(arrayOfAssetObjects) {
    if(Object.prototype.toString.call( arrayOfAssetObjects ) === '[object Array]' ){
      var randomlyIdentifiedAsset = arrayOfAssetObjects[Math.floor(Math.random()*arrayOfAssetObjects.length)];
      this.title = randomlyIdentifiedAsset.title || null;
      this.catRef = randomlyIdentifiedAsset.catRef || null;
      this.src = randomlyIdentifiedAsset.src || null;
      this.relatedLink = randomlyIdentifiedAsset.relatedLink || null; 
      this.linkTitle = randomlyIdentifiedAsset.linkTitle || null;
    }
};

RandomAsset.prototype.backstretchIt = function(targetElement, optional_targetForDescription) {
    $(targetElement).backstretch(this.src);
    if(optional_targetForDescription){
        $(optional_targetForDescription).html(this.title + " <a href='" + this.relatedLink + "' title='Image of " + this.title + " Catalogue reference: " + this.catRef + "'>"+ this.catRef +"</a>")       
    } 
}

RandomAsset.prototype.insertAsHTMLImage = function(targetParent, optional_targetForDescription) {
    $('<img>', {
        src : this.src,
        title : this.title
    }).appendTo($(targetParent));

    if(optional_targetForDescription){
        $(optional_targetForDescription).html(this.title + " <a href='" + this.relatedLink + "' title='" + this.linkTitle + "'>"+ this.catRef +"</a>")       
    } 
}

// 1.12 Generic toggle method. Does not include any bindings since it is designed to be used with 
//      custom event types
$.toggleDisplayOfElement = function(toggler, togglee) {
    // $('#search-options').toggle();
    // $('#scope-selector').toggleClass('expanded');
    $(togglee).toggle();
    $(toggler).toggleClass('expanded');
}

