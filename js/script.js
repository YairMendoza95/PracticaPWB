window.onload = function(){
	mt();
	setInterval("mt()", 1000);
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
	//Recibimos nuestros valores de los inputs
	var rst = 0;
	if (n1.value === "") {
		en1.innerText = "Ingresar un numero";
		en1.style.color = "red";
		n1.focus();
	} else if(n2.value === ""){
		en2.innerText = "Ingresar un numero";
		en2.style.color = "red";
		n2.focus();
	} else {
		//Parseamos los valores de texto a Float
	n1 = parseFloat(n1.value);
	n2 = parseFloat(n2.value);

	//Selección según la operación seleccionada
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
			//Variable <-- condición ? si_verdadero : si_falso;
			rst = n2 === 0 || isNaN(n2) ? "Divide by Zero" : n1 / n2;
		break;
	}

	/*El resultado de la operación realizada lo almacenamos
	en el control del formulario*/
	document.getElementById("rst").innerText = rst	;
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
	//console.log(jQuery("#dato").val());
	/*
	var a = document.getElementById("dato");
	a.style.backgroundColor = "red";
	a.style.color = "#fff";

	$("#otro").val($("#dato").val());

	$("#uno").html($("#otro").val() + "<br /><input type=\"text\" value=\"" + $("#dato").val() + "\" />");*/

	var t1 = $("#dato");
	var t2 = $("#otro");

	var texto = $("#uno");
	/*
	texto.innerHTML = texto.innerHTML + t1.value;
	texto.innerHTML += t1.value;

	var a = t1.val();
	var b = texto.html();

	b += a;*/
	//t1.css("background-color", "red");
	//t1.css("color", "#fff");

	t1.css({"background-color":"red","color":"#fff"});
	$("#dato").css({"background-color":"red","color":"#fff"});
	texto.html(texto.html() + t1.val() + "<br />");

}