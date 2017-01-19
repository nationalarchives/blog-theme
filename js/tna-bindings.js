// All event bindings should be placed within this file. Place within a document.ready() block only where strictly necessary.

$.bindToggle('.toggler', '.togglee', 'expanded', true);
$.bindToggle('#mega-menu-pull-down button', '#mega-menu', 'expanded', true); 
$.bindToggle('#search-expander', '#mobile-search-outer-wrapper', 'expanded', true);
$.bindToggle('#show-more-options', '#more-options', 'expanded', true);
$.bindToggle('#signInLink', '#signedFormWrapper', 'expanded', true);

// Custom event bindings for Global Search
$.customEventer({ elementIdOrClass : '#tnaSearch', eventToWatch : 'focus', customEventToTrigger : 'toggleSearchOptionsOnce'});
$.customEventer({ elementIdOrClass : '#scope-selector', eventToWatch : 'click', customEventToTrigger : 'toggleSearchOptions'});
$.customEventer({ elementIdOrClass : '.formDestinationChanger', eventToWatch : 'click', customEventToTrigger : 'changeFormDestination'});

// Binding to document (event delegation)
$(document).on('click', '#cookieCutter', function(e){
    e.preventDefault();
    document.cookie = "dontShowCookieNotice=true; max-age=" + (60*60);
    $('.cookieNotice').hide();
});

$(document).on('click', '#mega-menu h3', function(e){
    if($(window).width() < 480) {
        $(this).parents('nav').find('ul').slideToggle();    
        e.preventDefault();        
    } else {
        return;
    }
});

// Bindings to window
$(window).on({
    resize: function() {
        if($(window).width() > 480){
            $('#mega-menu ul').show();
        }
    }
});

// Discovery tabs
$(document).on('click', '#search-controls li', function(e){
    $('#search-controls li').removeClass('selected');
    $(e.target).addClass('selected');    
}); 


// Global search - larger screens
$(document).one('toggleSearchOptionsOnce', function() {
     $.toggleDisplayOfElement('#scope-selector', '#search-options');
});

$(document).on('toggleSearchOptions', function() {
     $.toggleDisplayOfElement('#scope-selector', '#search-options');
     $(document).off('toggleSearchOptionsOnce');
});

$('.formDestinationChanger').on('click', function() {
    var placeholder = $(this).attr('data-placeholder'),
        target = $(this).attr('data-target'),
        fieldName = $(this).attr('data-fieldName');

    $.toggleDisplayOfElement('#scope-selector', '#search-options');

    $('#tnaSearch').attr({'placeholder' : placeholder, 'name' : fieldName});
    $('#globalSearch').attr('action', target);
});

// Global search - smaller screens
$(document).on('change', '.mobileSearchDestinationOption', function(){ 
    var target = $(this).attr('data-target'),
        placeholder = $(this).attr('data-placeholder'),
        fieldName = $(this).attr('data-fieldName');
    $('#mobile-search-field').attr({'placeholder' : placeholder, 'name' : fieldName}).focus();
    $('#mobileGlobalSearch').attr('action', target);
});