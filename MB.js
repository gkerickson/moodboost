window.onload = function() {
	var obj;
	for(obj in document.getElementsByClassName("square")){
		alert(obj);
		obj.onclick =
			 function() {
			 	alert(obj.id);
			 };
	}
};

function sendTo(){
	alert("KKK");
}