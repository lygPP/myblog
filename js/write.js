function setBtnbg(){
var r=document.getElementById("fg").getElementsByTagName("li");

for(var i=0;i<r.length;i++){
	r[i].style.backgroundImage="url(../image/" + r[i].id +".png)";
	r[i].style.backgroundRepeat="no-repeat";
	r[i].style.backgroundPosition="50% 50%";
}
}
setBtnbg();

//获取选中的文字
function getSelectText(editor) {
    if (!editor) return; editor.focus();
    if (editor.document && editor.document.selection){
    	editor.document.selection.createRange().text.execCommand("Bold"); 
    }
       
    else if ("selectionStart" in editor)
        editor.value.substring(editor.selectionStart, editor.selectionEnd).execCommand("Italic"); 
}

var jg = document.getElementById("boldb");
jg.onclick = function(){getSelectText(document.getElementById("dd"))};





// jg.onclick = function(){
// 	var selectTxt;
// 	if(window.getSelection){
// 		selectTxt = window.getSelection();
// 	}else if(document.getSelection){
// 		selectTxt = document.getSelection().createRange().text;
// 	}
// 	alert("selectTxt");
// };