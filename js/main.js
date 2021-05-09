var slide = (hide) =>{
	var hide = document.querySelector(hide);
	if (hide.style.display =="block") {
		hide.style.display = "none";
	}else{
		hide.style.display = "block";
	}
}
var enhanceScrolTop = () =>{
	var header = document.getElementsByClassName('header');
	var getPageLength = document.body.scrollTop || document.documentElement.scrollTop;
	if (getPageLength > 20) {
		header.style.display == "block";
	}else{
		header.style.display = "none";
		return true;
	}
}
/*
var autoWriteDelete = () =>{
	var INDEX_COUNTER = 0;
	var INCREASER_ = 0;
	var _CONTENT = ['']
}
*/
//implemeent scroltoTop, shringPage and Text