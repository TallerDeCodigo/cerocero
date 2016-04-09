// $( document ).ready(function() {
    
// 	var settings = {
// 		"url": "https://us13.api.mailchimp.com/3.0/lists/subscribe.json",
// 		"method": "POST",
// 		"headers": {
// 			"Access-Control-Allow-Origin": "*"
// 		},
// 		"dataType": 'json',
//         "contentType": "application/json; charset=utf-8",
// 		"data": {
// 			"apikey": "1163440eae41407c8e345e24620e1668-us13",
// 			"id": "1518b034be",
// 			"email": { "email": "holkan@tallerdecodigo.com" }
// 		}
// 	}	
// 	$( "#news" ).submit(function( event ) {

// 	  event.preventDefault();
	 	
// 		var email = isValidEmailAddress($("#news").find( "input[name='email']" ).val());
	 	
// 		if(email){
// 		  $.ajax(settings).done(function (response) {
// 		  	console.log(response);

// 			$( "#respuesta" ).empty().append( "<b>Confirma tu cuenta en tu correo</b>" );
// 		   });
// 		}else{
// 			"<div>esto es respuesta de mail no valido</div>"
// 			console.log("Error en el correo electrónico");
// 			$( "#respuesta" ).empty().append( "<b>Error en el correo electónico</b>" );
// 		}

// 	});

// });

// function isValidEmailAddress(emailAddress) {
//     var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
//     return pattern.test(emailAddress);
// };

