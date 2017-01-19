// All event bindings should be placed within this file. Place within a document.ready() block only where strictly necessary.

$.bindToggle('.toggler', '.togglee', 'expanded');
$.bindToggle('#mega-menu-pull-down button', '#mega-menu', 'expanded');   

// Binding to document (event delegation)
$(document).on('click', '#cookieCutter', function(e){
    e.preventDefault();
    document.cookie = "dontShowCookieNotice=true; max-age=" + (60*60);
    $('.cookieNotice').hide();
});

$(document).on('click', '#mega-menu h3 a', function(e){
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