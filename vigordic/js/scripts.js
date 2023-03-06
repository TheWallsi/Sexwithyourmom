function funkcja_1() {
    var change = document.getElementById('country').options[document.getElementById('country').selectedIndex].id
    document.getElementById('country_phone').value = change;
    console.log(change);
}

function funkcja_2() {
    var change = document.getElementById('country_2').options[document.getElementById('country_2').selectedIndex].id
    document.getElementById('country_phone_2').value = change;
    console.log(change);
}

function funkcja_3() {
    var change = document.getElementById('country_3').options[document.getElementById('country_3').selectedIndex].id
    document.getElementById('country_phone_3').value = change;
    console.log(change);
}

$(document).ready(function(){

	$(".button, .button h3").mouseover(function() {
		$(".button").css("background", "#E32024");
		$(".button h3").css("color", "#fff");
	}).mouseout(function() {
		$(".button").css("background", "#fff");
		$(".button h3").css("color", "#E32024");
	});

});

function check(form) {

	let name = form.name.value;
	let tel = form.phone.value;

	/*name = JSON.stringify(name);*/

    if(name.length < 5)
	  	alert("Imię i nazwisko powinno składać się z conajmniej 5 znaków");
	else if(tel.length < 9)
		alert("Numer telefonu powinien składać się z conajmniej 9 znaków");
	else
		form.submit();
	
}