$(document).ready(function() {
	var timeout = 5000,
	load_error;

	load_error = function (jqXHR, textStatus, errorThrown) {
		if (errorThrown === "timeout") {
			alert('Server bussy');
		} else {
			alert('error: 404', textStatus + ": " + errorThrown);
		}
	};      

	$(document).ready(function() {
		console.log('Loading from Facebook...\n');
    //Change data: {graphUrl: 'https://graph.facebook.com/iambounty/feed'},  to what ever you want.
    $.ajax({
      type: 'POST',
      url: '/facebookfeed',
      data: {graphUrl: 'https://graph.facebook.com/ZignumMezcal/feed'}, 
      timeout:  timeout,
     	error: load_error,
      success: function (rv) {
       	var data = rv.data,
        len = data.length,
        i,
        out = '';
        for (i = 0; i < len; i += 1) {
	        if (data[i].description) {
	          out += data[i].description + '\n\n';
	        }
   			}
        print(out);
      }
   	});

   });
});