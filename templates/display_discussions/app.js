console.log("bonjour")

$.ajax({
	url: "displaydiscussions",
	dataType: "json",
	statusCode: {
    	404: function() {
      		alert( "Ressources non trouvés" );
    	}
  	}
}).done(function(discussions)
{
	console.log(discussions);
});