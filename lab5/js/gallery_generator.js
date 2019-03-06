// JavaScript Document
function getXMLHttp() {
	var xmlHttp
	try {
		xmlHttp = new XMLHttpRequest ();
	} catch (e) {
		try {
			xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e) {
			try {
				xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
			} catch (e) {
				return false;
			}
		}
	}
	return xmlHttp;
}

//Make AJAX request to the server
var xmlHttp = getXMLHttp();
//stores newly generated gallery HTML code
var htmlCode = "";
//temporarily stores server response while code is generated
var response;

$(document).ready(function() {
	// Set up the path to the PHP function that reads the image directory to find the thumbnail file names
	var send = "hook.php";
	// Open the connection to the web server
	xmlHttp.open("GET", send, true);
	// Tell the server that the client has no outgoing message, i.e. we are sending nothing to the server
	xmlHttp.send(null);
	// Check we get a valid server response
	xmlHttp.onreadystatechange = function() {
		if(xmlHttp.readyState == 4) {
			// Response handler code
			// alert(xmlHttp.responseText);
			response = xmlHttp.responseText.split("~");
			// Loop round the response array
			for (var i=0;i<response.length;i++) {
				// Handeler to build the HTML string
				// Use this to provide a link to the image
				htmlCode += '<a href="'+ response[i] +' ">';
				htmlCode += '<img class="card-img-top img-thumbnail" src="' + response[i] + '"/>';
				htmlCode += '</a>';			
			}
			// Return the HTML string to each of the 4 3D App pages
			document.getElementById('gallery1').innerHTML = htmlCode;
			document.getElementById('gallery2').innerHTML = htmlCode;
			document.getElementById('gallery3').innerHTML = htmlCode;

		}
	}
});

