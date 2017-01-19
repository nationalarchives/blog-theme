module("Testing the RandomAsset constructor");

test( "Does the RandomAsset() constructor return a properly formed object", function() {
	var testRandomObject = new RandomAsset([
    {
      title : "Gym class North Park College, Croydon, 1900.",
      catRef : "COPY 1/448 (243)",
      src : "images/section-banner-education.jpg",
      relatedLink : "https://images.nationalarchives.gov.uk/assetbank-nationalarchives/action/viewAsset?id=8640&index=0&total=1&view=viewSearchItem"  
    }
  ]);
	ok( testRandomObject , "The object was created" );
	ok( typeof testRandomObject.title == "string" , "The title was found to be a string" );  
	ok( typeof testRandomObject.catRef == "string" , "The catRef was found to be a string" );  
	ok( typeof testRandomObject.src == "string" , "The src was found to be a string" );  
	ok( typeof testRandomObject.relatedLink == "string" , "The relatedLink was found to be a string" );  

});

test( "Do the RandomAsset() methods work as expected", function() {
  var testMethodsOfRandomAsset = new RandomAsset([
    {
      title : "Gym class North Park College, Croydon, 1900.",
      catRef : "COPY 1/448 (243)",
      src : "images/section-banner-education.jpg",
      relatedLink : "https://images.nationalarchives.gov.uk/assetbank-nationalarchives/action/viewAsset?id=8640&index=0&total=1&view=viewSearchItem"  
    }
  ]);
  ok( typeof testMethodsOfRandomAsset.insertAsHTMLImage == "function", "The object has a insertAsHTMLImage method" );

  // Set up
  $('body').append('<div id="flickr-caption">', '<div id="flickr-image">');

  var contentLengthBeforeInsertion = $('#flickr-caption').html().length
  var imageContentLengthBeforeInsertion = $('#flickr-image').html().length

  // Running the insertAsHTMLImage() method
  testMethodsOfRandomAsset.insertAsHTMLImage('#flickr-image', '#flickr-caption');

  var contentLengthAfterInsertion = $('#flickr-caption').html().length
  var imageContentLengthAfterInsertion = $('#flickr-image').html().length  

  ok( contentLengthBeforeInsertion < contentLengthAfterInsertion, "the insertAsHTMLImage() method increased the length of content in the target caption element" );  
  ok( imageContentLengthBeforeInsertion < imageContentLengthAfterInsertion, "the insertAsHTMLImage() method increased the length of content in the target image element" );  

  // Tear down
  $('#flickr-image').remove();
  $('#flickr-caption').remove();

  ok( typeof testMethodsOfRandomAsset.backstretchIt == "function", "The object has a backstretchIt method" );

  // Set up
  $('body').append('<div id="education-home" style="height: 500px">', '<div id="education-img-desc">');

  var contentLengthBeforeInsertion = $('#education-img-desc').html().length

  testMethodsOfRandomAsset.backstretchIt('#education-home', '#education-img-desc');

  var contentLengthAfterInsertion = $('#education-img-desc').html().length
  ok($('.backstretch').length, "An element with class .backstretch was created");
  ok( contentLengthBeforeInsertion < contentLengthAfterInsertion, "the backstretchIt() method increased the length of content in the target element" );  

 // Tear down
  $('#education-home').remove();
  $('#education-img-desc').remove();
});