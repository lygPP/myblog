//  var pli = document.getElementsByClassName("pagination");
// var p = document.getElementsByTagName("li");
// // alert(p);
// function pageClick(){
// 	for(var i = 0;i < pli.length;i ++){
// 		p[i].className = '';
// 		this.className = 'active';
// 	}
// }
// p.addEventListener("click", pageClick);

function previewImg (imgFile){
	var image = new Image();
	image.src = imgFile.value;
	if (image.width > image.height) {
		imgFile.style.maxWidth = "100px";
	};
}