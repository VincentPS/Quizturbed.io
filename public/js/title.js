window.onload = function() {

	// Define the word Quizturbed letter by letter
	var Q = document.getElementById("Q");
	var u = document.getElementById("u");
	var i = document.getElementById("i");
	var z = document.getElementById("z");
	var t = document.getElementById("t");
	var u = document.getElementById("u");
	var r = document.getElementById("r");
	var b = document.getElementById("b");
	var e = document.getElementById("e");
	var d = document.getElementById("d");
	var variable = [-1, 1000];

	// setting color
	var setColor = function(color) {
		Q.style.color = color[0];
		u.style.color = color[1];
		i.style.color = color[2];        
		z.style.color = color[3];        
		t.style.color = color[4];        
		u.style.color = color[5];        
		r.style.color = color[6];        
		b.style.color = color[7];        
		e.style.color = color[8];        
		d.style.color = color[9];
	}

	// Looping the rainbow
	timeout = setInterval( function() {
		++variable[0];
		if (variable[0] == 0) {
			
		}


	}, variable[1]);
}