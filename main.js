var incht = false;

function getSearchParameters() {
    var prmstr = window.location.search.substr(1);
    return prmstr != null && prmstr != "" ? transformToAssocArray(prmstr) : {};
}

var params = getSearchParameters();

function transformToAssocArray( prmstr ) {
  var params = {};
  var prmarr = prmstr.split("&");
  for ( var i = 0; i < prmarr.length; i++) {
      var tmparr = prmarr[i].split("=");
      params[tmparr[0]] = tmparr[1];
  }
  return params;
}


window.onload = function() {
	incht = false;
	document.getElementById("initCht").onclick = initc;
	document.getElementById("endCht").onclick = endc;
	document.getElementById("initCht").style.display = 'block';
	document.getElementById("endCht").style.display = 'none';
};

function initc() {
	runProc(0);
}

function endc() {
	runProc(1);
}

function btoggle() {
	//incht = true;
	//incht = !incht;
	//alert(incht+"");
	if (incht) {
		document.getElementById("initCht").style.display = 'none';
		document.getElementById("endCht").style.display = 'block';
	} else {
		document.getElementById("initCht").style.display = 'block';
		document.getElementById("endCht").style.display = 'none';
	}
}

function runProc(p) {
	var m = params.mood;
	var ans = false;
	var myUrl = "procs.php";
	if(p==0)ans = true;
	var temp = document.createElement("span");
	$.ajax({
		url : myUrl,// + "?un="+un,
		type : 'POST',
		data : "p=" + p + "&m=" + m + "",
		datatype : 'xml',
		success : function(data) {
			ans = ans;
		},
		error: function() {
			ans = !ans;
		},
		complete : function() {
			//if(!(ans==true))ans = false;
			incht = ans;
			btoggle();
		}
		

	});
	
	return ans;
}

