var pic_form = document.getElementById("picform");
var oDiv = pic_form.getElementsByTagName("div");
var oBtn = document.getElementById("delpart");
var oCmf = document.getElementById("delcmf");
oBtn.onclick = function(){
	// alert("message");
	oCmf.style.visibility = "visible";
	for(var i = 0; i < oDiv.length; i++){
		oDiv[i].style.border = "1px solid rgb(244, 220, 85)";
		var temp = oDiv[i].getElementsByTagName("input");
		temp[0].style.visibility = "visible";
	}
}