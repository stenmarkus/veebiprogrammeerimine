window.onload = function(){
	document.getElementById("submitPhoto"). disabled = true;
	document.getElementById("fileToUpload"). addeventlistener("change", checkSize);
}


function checkSize(){
	var fileToUpload = document.getElementById("fileToUpload"). files[0]
	if(filetoupload.size <=20000){
		document.getElementById("submitPhoto"). disabled = true;
		document.getElementById("fileSizeError"). innerHTML = ""
	} else{
		document.getElementById("submitPhoto"). disabled = true;
		document.getElementById("fileSizeError"). innerHTML = "Fail on üleslaadimiseks liiga suur"
	}
}