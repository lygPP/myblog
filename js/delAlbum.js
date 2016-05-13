
// alert("message");
var new_album = document.getElementById("newAlbum");
var add_bg = document.getElementById("backg");
var oAlbum = document.getElementById("album");
var oInput = oAlbum.getElementsByTagName("input");

new_album.onclick = function(){
	add_bg.style.display = "block";
	oAlbum.style.display = "block";
};

oInput[0].onblur = function(){
	if(this.value == ""){
		alert("相册名不能为空");
	}
};
oInput[1].onclick = function(){
	add_bg.style.display = "none";
	oAlbum.style.display = "none";
};
oInput[2].onclick = function(){
	add_bg.style.display = "none";
	oAlbum.style.display = "none";
};


