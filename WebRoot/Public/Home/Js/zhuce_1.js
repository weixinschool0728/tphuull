// JavaScript Document
//onfocus
//onblur
var obj_form=document.zhuce;
obj_form.shoujihao.onfocus=function (){yzshouji_foucs();}
obj_form.shoujihao.onblur=function (){yzshouji_blur();}
obj_form.yanzhengma.onfocus=function (){yanzhengma_foucs();}
obj_form.yanzhengma.onblur=function (){yanzhengma_blur();}
document.getElementById("tyxy").onclick=function (){tyxy_click();}
function yzshouji_foucs(){
	var obj=document.getElementById("infor_shoujihao");
	obj.style.cssText="color:#666;";
	obj.innerHTML="请输入你的手机号码";
	}
function yzshouji_blur(){
	var obj=document.getElementById("infor_shoujihao");
	if(obj_form.shoujihao.value==""){
		obj.style.cssText="color:red;";
		obj.innerHTML="手机号码为空，请输入你的手机号码";
		return false;
		}
		else if(!(Number(obj_form.shoujihao.value))||obj_form.shoujihao.value.charAt(0)!="1"){
			obj.style.cssText="color:red;";
			obj.innerHTML="手机号码格式不正确，请输入正确的11位手机号码";
			return false;
			}
		else if(obj_form.shoujihao.value.length<11||obj_form.shoujihao.value.length>11){
			obj.style.cssText="color:red;";
			obj.innerHTML="手机号码不是11位，请输入正确的11位手机号码";
			return false;
			}
		else{
			obj.innerHTML="&radic;";
			return true;
			}
	}

function yanzhengma_foucs(){
	var obj=document.getElementById("infor_yanzhengma");
	obj.style.cssText="color:#666;";
	obj.innerHTML="请输入以下图片中的数字,测试阶段直接输入123456";
	}
function yanzhengma_blur(){
	var obj=document.getElementById("infor_yanzhengma");
	if(!(obj_form.yanzhengma.value=="123456")){
		obj.style.cssText="color:red;";
		obj.innerHTML="验证码错误，请重新输入";
		return false;
	}
	else {
		obj.innerHTML="&radic;";
		return true;
		}
}

function checkForm(obj){
	var href1;
	yzshouji_blur();
	yanzhengma_blur();
	if(yanzhengma_blur()&&yzshouji_blur()){
		obj_form.submit();
		href1="zhuce-2.html?shoujihao="+document.zhuce.shoujihao.value;
		obj.href=href1;
		return true;
		}
		else{
			return false;
			}
	}

function tyxy_click(){
	document.getElementById("zcxy").style.cssText="display:none;";
	return false;
	}
