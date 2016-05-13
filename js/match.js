	function getLength(str){
		return str.replace(/[^\x00-\xff]/g, "xx").length; //   \x00-xff  所有单字节
	};
	function findStr(str,n){
		var tmp = 0;
		for (var i = 0; i < str.length; i++){
			if(str.charAt(i) == n){
				tmp ++;
			}
		}
		return tmp;
	}

	var aDiv = document.getElementById("sec");
	var aInput = aDiv.getElementsByTagName("input");
	var aMsg = aDiv.getElementsByTagName("span");
	 // alert(aMsg.length)
	var aName = aInput[0];
	var aPwd = aInput[1];
	var aPwd2 = aInput[2];
	var aJob = aInput[3];
	var name_msg = aMsg[0];
	var pwd_msg = aMsg[1];
	var pwd2_msg = aMsg[2];
	var job_msg = aMsg[3];
	var count = document.getElementById("charLen")
	var aEm = aDiv.getElementsByTagName("em");
	var name_length = 0;

//用户名:数字、字母、汉字、下划线、6--25个字符
	aName.onfocus = function(){
		name_msg.style.visibility = "visible";
		name_msg.innerHTML = '<i class="ati">输入6-25个字符，仅包含英文、汉字及下划线</i>';

	}

	aName.onkeyup = function(){
		count.style.visibility = "visible";
		name_length = getLength(this.value);
		count.innerHTML = name_length + "个字符";
		if (name_length == 0) {
			count.style.visibility = "hidden";
		};
	}

	aName.onblur = function(){
		var re = /[^\w\u4e00-\u9fa5]/g;
		if(re.test(this.value)){
		name_msg.innerHTML == '<i class="error">含有非法字符！</i>';

		} else if (this.value == ""){
		name_msg.innerHTML = '<i class="error">输入不能为空！</i>';
		} else if (name_length > 25) {
		name_msg.innerHTML = '<i class="error">长度超过25个字符！</i>';

		}else if (name_length < 6) {
		name_msg.innerHTML = '<i class="error">长度少于6个字符！</i>';

		} else {
		name_msg.innerHTML = '<i class="success"> OK！</i>';
		};
	}

//密码:不能全是相同的字符、6--25个字符
	aPwd.onfocus = function(){
		pwd_msg.style.visibility = "visible";
		pwd_msg.innerHTML = '<i class="ati">输入8-16个字符，用字母、数字和符号的组合密码</i>';
		
	}	
	aPwd.onkeyup = function(){
		if (this.value.length > 7) {//密码长度大于7为中
			aEm[1].className = "active";
			aPwd2.removeAttribute("disabled");
			pwd2_msg.style.visibility = "visible";
		} else {
			aEm[1].className = "";
			aPwd2.setAttribute("disabled");
			pwd2_msg.style.visibility = "hidden";
		};
		if (this.value.length > 12) {//密码长度大于12为强
			aEm[2].className = "active";
		} else {
			aEm[2].className = "";
		};
	};
	aPwd.onblur = function(){
		var m = findStr(aPwd.value,aPwd.value[0]);
		var re_n = /[^\d]/g;
		var re_t = /[^a-zA-Z]/g;

		if (this.value == ""){
			pwd_msg.innerHTML = '<i class="error">输入不能为空！</i>';
		} else if (this.value.length == m && this.value.length >1){
			pwd_msg.innerHTML = '<i class="error">不能全部为相同字符！</i>';
		} else if (this.value.length < 6 || this.value.length > 16){
			pwd_msg.innerHTML = '<i class="error">长度应为6-16个字符！</i>';
		} else if (!re_n.test(this.value)){
			pwd_msg.innerHTML = '<i class="error">不能全为数字！</i>';

		} else if (!re_t.test(this.value)){
			pwd_msg.innerHTML = '<i class="error">不能全为字母！</i>';

		} else {
			pwd_msg.innerHTML = '<i class="success"> OK！</i>';

		}
	};


//确认密码
	aPwd2.onblur = function(){
		if(this.value != aPwd.value){
			pwd2_msg.innerHTML = '<i class="error">两次输入的密码不一致！</i>';

		} else {
			pwd2_msg.innerHTML = '<i class="success"> OK！</i>';

		}
	};

//工作	
	aJob.onfocus = function(){
		job_msg.style.visibility = "visible";
		job_msg.innerHTML = '<i class="ati">不超过20个字符，仅支持汉字及下划线</i>';
	};

	aJob.onblur = function(){
		var re_f = /^[0-9\u4e00-\u9fa5]+$/;
		// alert(re_f.test(this.value));
		if(re_f.test(this.value)){
		job_msg.innerHTML = '<i class="error">含有非法字符！</i>';
		} else 
		if (this.value == ""){
		job_msg.innerHTML = '<i class="error">输入不能为空！</i>';

		} else if (this.value.length > 20) {
		job_msg.innerHTML = '<i class="error">长度超过25个字符！</i>';

		}else {
		job_msg.innerHTML = '<i class="success"> OK！</i>';
		};
	}