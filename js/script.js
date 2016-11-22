window.onload = function(){
	mt();
	setInteral("mt()",1000);
	var en1 = document.getElementById("en1");
	var en2 = document.getElementById("en2");
	var n1 = document.getElementById("n1");
	var n2 = document.getElementById("n2");
	var d = document.getElementById("d");
	d.onclick = function(){
		operacion("/");
	};
	n1.onkeydown = function(){
		en1.innerText = "";
	};
	n2.onkeydown = function(){
		en2.innerText = "";
	};
}

function operacion(op){
	if(n1.value === ""){
		en1.innerText = "Ingresar un número";
		en1.style.color = "red";
		n1.focus();
	}
	else if{
		en2.innerText = "Ingresar un número";
		en2.style.color = "red";
		n2.focus();
	}
	else{
		n1 = parseFloat(n1.value);
		n2 = parseFloat(n2.value);

		switch(op){
			case "+":
			rst = n1 + n2;
				break;
			case "-":
				rst = n1 - n2;
				break;
			case "*":
				rst = n1 * n2;
				break;
			case "/":
				rst = n2 === 0 || isNaN(n2) ? "Divide by zero" : n1 /n2;
				break;
		}
		document.getElementById("rst").innerText = rst;
	}
}
function mt(){
	var mt = "";
	var t = new Date();
	var h = t.getHours();
	var m = t.getMinutes();
	var s = t.getSeconds();

	h = h < 10 ? "0" + h : h;
	m = m < 10 ? "0" + m : m;
	s = s < 10 ? "0" + s : s;

	mt = h + ":" + m + ":" + s;
	document.getElementById("mrj").innerText = mt;
}
function mostrar(){
	var t1 = $("#dato");
	var t2 = $("#otro");

	var texto = $("#uno");

	t1.css({"background-color":"red","color":"#fff"});
	$("#dato").css({"background-color":"red","color":"#fff"});
	texto.html(texto.html + t1.val() + "<br />");
}