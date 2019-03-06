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

// Obj communicating with server
var xmlHttp = getXMLHttp();
// Stores number of horizontalColumns gallery has, if too large it won't fit in browser window
var numberOfColumns = 4;
// Stores newly generated gallery HTML code
var htmlCode = "";
// Temporarily stores server response while code is generated
var response;

$(document).ready(function() {
	// Set up the path to the PHP function that reads the image directory to find the thumbnail file names
	var send = "scripts/hook.php";
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
			htmlCode += '<tr>';
			for (var i=0;i<response.length;i++) {
				htmlCode += '<td id="gallery_cell">';
				htmlCode += '<a href="' + 'images/' + response[i] +'">';
				htmlCode += '<img src="images/' + response[i] + '" id="image_thumbnail"/>';
				htmlCode += '</a>';
				htmlCode += '</td>';
				if(((i+1)%numberOfColumns) == 0) {
					htmlCode += '</tr><tr>';
				}
			}
			htmlCode += '</tr>';
			document.getElementById('gallery').innerHTML = htmlCode;
		}
	}
});

