function check(){

	var question1 = document.quiz.question1.value;
	var question2 = document.quiz.question2.value;
	var question3 = document.quiz.question3.value;
	var correct = 0;

	if (question1 == "yes") {
		correct++;
}
	if (question2 == "Travelled abroad in the past 14days") {
		correct++;
}	
	if (question3 == "Cough,fever,breathing difficulty") {
		correct++;
	}
	
	var pictures = ["img/win.gif", "img/meh.jpeg", "img/lose.gif"];
	var messages = ["", "", ""];
	var score;

	if (correct == 0) {
		score = 2;
	}

	if (correct > 0 && correct < 3) {
		score = 1;
	}

	if (correct == 3) {
		score = 0;
	}

	document.getElementById("after_submit").style.visibility = "visible";

	document.getElementById("message").innerHTML = messages[score];
	document.getElementById("number_correct").innerHTML =  "You are suspected to have corona";
	document.getElementById("picture").src = "https://i.pinimg.com/originals/2a/34/c9/2a34c95330d483685437ae5698b12fd9.gif";
	number_correct.fontSize = "150%" ;
	}
	

