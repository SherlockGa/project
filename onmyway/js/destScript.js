
window.onload=function(){

	var t = document.getElementById("month");
	var m = t.getElementsByTagName("a");
	var n = t.getElementsByTagName("div");

	var q = document.getElementById("ttheme");
	var qm = q.getElementsByTagName("a");
	var qn = q.getElementsByTagName("div");
/*
	for(var i = 0; i < m.length; i++){
		m[i].index = i;
		m[i].onmouseover=function(){
			for(var i = 0; i < m.length; i++){
				
					n[i].style.display = "none";
			}
			n[this.index].style.display = "block";
			var p = n[this.index].childNodes;
			for(var i = 0; i < p.length; i++){
				p[i].style.display = "block";
			}
		}
	}
*/
	for(var i = 0; i < qm.length; i++){
		qm[i].index = i;
		qm[i].onmouseover=function(){
			for(var i = 0; i < qm.length; i++){
				qn[i].style.display = "none";
			}
			qn[this.index].style.display = "block";
			var pp = qn[this.index].childNodes;
			for(var i = 0; i < pp.length; i++){
				pp[i].style.display = "block";
			}
		}
	}

}
