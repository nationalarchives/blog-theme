require(["jquery", "respond.min", "backstretch", "less"], function($) {
    $(function() {




        
        // END OF cookie notification






        $('#finding-archives-controls li').on('click', function(){
            var targets = $(this).attr('data-linked-items');
            var dynamicPlaceholder, currentId = $(this).attr('data-message');
            (currentId == 'all') ? dynamicPlaceholder = "Search " + currentId + " collections" : dynamicPlaceholder = "Search " + currentId + " collections only";
            $('#discovery-search').attr('placeholder', dynamicPlaceholder);
            $('#finding-archives-controls li').removeClass('selected');
            $(this).addClass('selected');
            $(targets).addClass('selected');
        });

        $('#search-controls li').on('click', function(){
            var dynamicPlaceholder, currentId = $(this).attr('id');
            (currentId == 'all') ? dynamicPlaceholder = "Search " + currentId + " collections" : dynamicPlaceholder = "Search " + currentId + " collections only";
            $('#discovery-search').attr('placeholder', dynamicPlaceholder);
            if(currentId == 'all') {
                $('#search-controls li').addClass('selected')
            } else {
                $('#search-controls li:first-child').removeClass('selected')                
            }
        });

        var createDevStandardsNav = function(element) {
            this.element = $(element); 
            this.text = this.element.text();
            this.anchor = '#' + this.element.attr('id');

            return $('<a>', {
                href : this.anchor, 
                html : this.text
            });
        }

        var createAndPopulateListItem = function(element) {
            return $('<li>', {
                html : element
            });
        }

        $('#dev-standards h2').each(function(){
            var link = createDevStandardsNav(this);
            $('#wordpress-nav').append(createAndPopulateListItem(link));
        });

    });

    // START OF backstretch utilities
    var showcaseSelection = [
      {
            title: "Description of this image",
            src: "images/INF-3-1738.jpg",
            relatedLink: ""
       },
        {
            title: "Whitstable, 1905. Catalogue reference: COPY 1/228 (98)",
            src: "images/copy-1-228-98-whitstable-1905.jpg",
            relatedLink: "https://images.nationalarchives.gov.uk/assetbank-nationalarchives/action/viewAsset?id=4333&index=15&total=16&view=viewSearchItem"
        } ,
         {
            title: "Description of this image",
            src: "images/an-14-80-1949.jpg",
            relatedLink: ""
        // },
        // {
        //     title: "Description of this image",
        //      src: "images/INF_13_178_3.jpg",
        //     relatedLink: ""
        // },
        // {
        //     title: "Description of this image",
        //     src: "images/copy-1-79-72-1887.jpg",
        //     relatedLink: ""
         }    
    ];

    $("#records-home").backstretch(showcaseSelection[Math.floor(Math.random()*showcaseSelection.length)].src);
    // END OF backstretch utilities

});