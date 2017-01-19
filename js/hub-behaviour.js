// JavaScript Document



$(document).ready(function() {
 



			
$(function () {
			var tabContainers = $('#categoryTabs ul');
			tabContainers.hide().filter(':first').show();
			
			$('#categoryNavigation li a').click(function () {
				tabContainers.hide();
				tabContainers.filter(this.hash).show();
				$('#categoryNavigation li a').removeClass('selected');
				$(this).addClass('selected');
				return false;
			}).filter(':first').click();
		});



			

    $("#s").val("Search our blog");
    
    $("#s").each(function () {
        var default_value = this.value;
        $(this).focus(function () {
            if (this.value == default_value) {
                this.value = '';

            }
        });
        $(this).blur(function () {
            if (this.value == '') {
                this.value = default_value;
            }
        });
    });


$("#miniSeries ul li p").hide();
$("#miniSeries ul li").hover(
        function() {
            $(this).find("p").slideDown("slow");
        },
        function() {
            $(this).find("p").slideUp("fast");
            $("miniSeries ul li p").hide();
        }
    );


$("#miniSeries ul li").bind("click", function(){
											  
		window.location = $(this).find("a").attr("href");									  
											  
											  
											  });


/*$("#slider").hide();
   	 $("a.more").toggle(function (event) {
        	$("#slider").slideDown();
        	$("a.more").html("Fewer details...");
        	event.preventDefault();
    		},
		      function (event) {
		          $("#slider").slideUp();
		          $("a.more").html("More details...");
		          event.preventDefault();
		      });


/* 	Commented out since it was breaking Global Search and the tabs on Blog. Seems to be legacy functionality.

	$("#feature").carouFredSel({
		prev    : "a#previous",
    	next    : "a#next",
	   
					 scroll : {
        duration        : 700,
        pauseDuration   : 8000,
        pauseOnHover    : true
		}
	 
	})
	
.trigger("play", true);
$("#foo3_pause").click(function() {
	$("#feature").trigger("pause", true);
	$(this).hide().prev().show();
	return false;
});
$("#foo3_play").click(function() {
	$("#feature").trigger("play", true).trigger("next");
	$(this).hide().next().show();
	return false;
}).hide();

*/	

});

