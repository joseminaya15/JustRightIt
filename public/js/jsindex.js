// $(document).ready(function(){
// 	$('#modalPassword').modal('show');
// })
var $win = $(window);
$win.scroll(function () {
	if ($win.scrollTop() > 45) {
		$("nav").addClass("navbarcolor");
	} else {
		$("nav").removeClass("navbarcolor");
	}
});
$('a.link[href^="#"]').click(function(e) {
 	var target = $(this).attr('href');
 	var strip = target.slice(1);
 	var anchor = $("section[id='" + strip + "']");
 	e.preventDefault();
 	y = (anchor.offset() || {
 		"top" : NaN
 	}).top;
 	$('html, body').animate({
 		scrollTop : (y - 40)
 	}, 'slow');
});
$('#home .owl-carousel').owlCarousel({
	lazyLoad : true,
	animateOut: 'fadeOut',
	animateIn: 'fadeIn',
	responsive : {
		0 : {
			items : 1
		}
	},
	navigation : false,
	nav : false,
	loop : true,
	autoplay : true,
	mouseDrag: false,
	dots: false,
	autoplayTimeout : 3000
});
function sendInformation(){
	var check_burger = null;
	var company 	 = $('#company').val();
	var direccion  	 = $('#address').val();
	var name 		 = $('#name').val();
	var surname 	 = $('#surname').val();
	var position 	 = $('#position').val();
	var email 		 = $('#email').val();
	var phone 		 = $('#phone').val();
	var birthday     = $('#birthday').val();
	var deporte      = $('#sport').val();
	var burger1      = $('#burger-1').is(':checked');
	var burger2		 = $('#burger-2').is(':checked');
	var burger3 	 = $('#burger-3').is(':checked');
	var burger4		 = $('#burger-4').is(':checked');
	// var comercializa = $('#commercialization').val();
	// var description  = $('#description').val();
	if(company == null || company == '') {
		msj('error', 'Empresa debe completarse');
		return;
	}
	if(direccion == null || direccion == '') {
		msj('error', 'Direccion debe completarse');
		return;
	}
	if(name == null || name == '') {
		msj('error', 'Nombre debe completarse');
		return;
	}
	if(surname == null || surname == '') {
		msj('error', 'Apellido debe completarse');
		return;
	}
	if(position == null || position == '') {
		msj('error', 'Cargo debe completarse');
		return;
	}
	if(email == null || email == '') {
		msj('error', 'Email debe completarse');
		return;
	}
	if(!validateEmail(email)){
		msj('error', 'El formato de email es incorrecto');
		return;
	}
	// if(validateEmailCorporative(email)){
    //   	msj('error', 'Ingrese un email corporativo');
	// 	return;
	// }
	if(phone == null || phone == '') {
		msj('error', 'Teléfono debe completarse');
		return;
	}
	if(birthday == null || birthday == '') {
		msj('error', 'Cumpleaños debe completarse');
		return;
	}
	if(burger1 == true){
		check_burger = 1;
	}else if(burger2 == true) {
		check_burger = 2;
	}else if(burger3 == true) {
		check_burger = 3;
	}else if(burger4 == true) {
		check_burger = 4;
	}
	// if(arrayComercializa == null || arrayComercializa == '') {
	// 	msj('error', 'Seleccione una marca que comercialice su empresa');
	// 	return;
	// }
	// if(arrayCompany == null || arrayCompany == '') {
	// 	msj('error', 'Seleccione que describe mejor a tu empresa');
	// 	return;
	// }
	$.ajax({
		data : {Company      : company,
			    Direccion    : direccion,
				Name	     : name,
				Surname	     : surname,
				Position     : position,
				Email 	     : email,
				Phone	     : phone,
				Birthday	 : birthday,
				Deporte   	 : deporte,
				Burger	     : check_burger},
		url  : 'home/register',
		type : 'POST'
	}).done(function(data){
		try {
			data = JSON.parse(data);
			if(data.error == 0){
				$('.js-input').find('input').val('');
				$('.js-checkbox').find('.mdl-checkbox').removeClass('is-checked');
				$('.js-checkbox').find('input').prop("checked", false);
				msj('success', data.msj);
				$('#confirmation').addClass('aparecer');
        	}else{
        		msj('error', data.msj);
        		return;
        	}
		} catch (err) {
			msj('error', err.message);
		}
	});
}
function ingresarQuiz(){
	var correo = $('#emailRegister').val(); 
	if(correo == null || correo == '') {
		msj('error', 'Email debe completarse');
		return;
	}
	if(!validateEmail(correo)){
		msj('error', 'El formato de email es incorrecto');
		return;
	}
	$.ajax({
		data  : { correo : correo},
		url   : 'home/ingresar',
		type  : 'POST'
	}).done(function(data){
		try{
        	data = JSON.parse(data);
        	if(data.error == 0){
				$('#emailRegister').val("");
				$('#ModalQuiz').modal('show');
        	}else {
				msj('error', 'Email no registrado');
        		return;
        	}
		} catch (err){
			msj('error',err.message);
		}
	});
}
function nextQuestion(element){
	var question = element.attr('data-id');
	var section = element.parents('.jm-question');
	$('.jm-question').removeClass('fadeInRight');
	section.addClass('animated fadeOutLeft');
	$('#question-'+question).addClass('animated fadeInRight')
}
var pregunta1              = [];
var pregunta4  			   = [];
var pregunta5  			   = [];
var pregunta6  			   = "";
var pregunta7  			   = [];
var pregunta8  			   = [];
var pregunta9  			   = [];
var arrayServer            = [];
var arrayStorage           = [];
var arrayWireless          = [];
var arrayHyperconvergencia = [];
var pregunta11             = [];
var pregunta12             = [];
var pregunta13             = [];
function sendQuiz(){
	var caracteres = "abcdefghijkmnpqrtuvwxyzABCDEFGHJKMNPQRTUVWXYZ2346789";
	var codigo     = "";
	var person     = $('#person').val();
	var employee   = $('#employee').val();
	var hardware   = $('#hardware').val();
	var service    = $('#service').val();
	$('#button-quiz').attr("disabled", true);
	for (i=0; i<6; i++) codigo +=caracteres.charAt(Math.floor(Math.random()*caracteres.length));
	$(".jm-checkbox--one .is-checked").each(function (){
		var isChecked    = $(this);
		var inputChecked = isChecked.find('.mdl-checkbox__label');
		var textChecked  = inputChecked.text();
		pregunta1.push(textChecked);
	})
	$(".jm-checkbox--industry .is-checked").each(function (){
		var isChecked    = $(this);
		var nameOtros    = isChecked.find('input').attr('data-name');;
		var textChecked  = isChecked.find('.mdl-checkbox__label').text();
		pregunta4.push(textChecked);
		if(nameOtros == "otros"){
			var divInput  = isChecked.parents('.jm-list--checkbox').find('.jm-input').find('input').val();
			pregunta4.push(divInput);
		}
	})
	$(".jm-checkbox--service .is-checked").each(function (){
		var isChecked    = $(this);
		var inputChecked = isChecked.find('.mdl-checkbox__label');
		var textChecked  = inputChecked.text();
		pregunta5.push(textChecked);
	})
	$(".jm-checkbox--setting .is-checked").each(function (){
		var isChecked    = $(this);
		var inputChecked = isChecked.find('.mdl-checkbox__label');
		var textChecked  = inputChecked.text();
		pregunta7.push(textChecked);
	})
	$(".jm-checkbox--trainer .is-checked").each(function (){
		var isChecked    = $(this);
		var nameOtros    = isChecked.find('input').attr('data-name');;
		var textChecked  = isChecked.find('.mdl-checkbox__label').text();
		pregunta8.push(textChecked);
		if(nameOtros == "otros"){
			var divInput  = isChecked.parents('.jm-list--checkbox').find('.jm-input').find('input').val();
			pregunta8.push(divInput);
		}
	})
	$(".jm-checkbox--distributor .is-checked").each(function (){
		var isChecked    = $(this);
		var inputChecked = isChecked.find('.mdl-checkbox__label');
		var textChecked  = inputChecked.text();
		pregunta9.push(textChecked);
	})
	$(".jm-checkbox--server .is-checked").each(function (){
		var isChecked    = $(this);
		var nameOtros    = isChecked.find('input').attr('data-name');;
		var textChecked  = isChecked.find('.mdl-checkbox__label').text();
		arrayServer.push(textChecked);
		if(nameOtros == "otros"){
			var divInput  = isChecked.parents('.jm-list--checkbox').find('.jm-input').find('input').val();
			arrayServer.push(divInput);
		}
	})
	$(".jm-checkbox--storage .is-checked").each(function (){
		var isChecked    = $(this);
		var nameOtros    = isChecked.find('input').attr('data-name');;
		var textChecked  = isChecked.find('.mdl-checkbox__label').text();
		arrayStorage.push(textChecked);
		if(nameOtros == "otros"){
			var divInput  = isChecked.parents('.jm-list--checkbox').find('.jm-input').find('input').val();
			arrayStorage.push(divInput);
		}
	})
	$(".jm-checkbox--wireless .is-checked").each(function (){
		var isChecked    = $(this);
		var nameOtros    = isChecked.find('input').attr('data-name');;
		var textChecked  = isChecked.find('.mdl-checkbox__label').text();
		arrayWireless.push(textChecked);
		if(nameOtros == "otros"){
			var divInput  = isChecked.parents('.jm-list--checkbox').find('.jm-input').find('input').val();
			arrayWireless.push(divInput);
		}
	})
	$(".jm-checkbox--hyperconvergencia .is-checked").each(function (){
		var isChecked    = $(this);
		var nameOtros    = isChecked.find('input').attr('data-name');;
		var textChecked  = isChecked.find('.mdl-checkbox__label').text();
		arrayHyperconvergencia.push(textChecked);
		if(nameOtros == "otros"){
			var divInput  = isChecked.parents('.jm-list--checkbox').find('.jm-input').find('input').val();
			arrayHyperconvergencia.push(divInput);
		}
	})
	$(".jm-checkbox--company .is-checked").each(function (){
		var isChecked    = $(this);
		var inputChecked = isChecked.find('.mdl-checkbox__label');
		var textChecked  = inputChecked.text();
		pregunta11.push(textChecked);
	})
	$(".jm-checkbox--twelve .is-checked").each(function (){
		var isChecked    = $(this);
		var inputChecked = isChecked.find('.mdl-checkbox__label');
		var textChecked  = inputChecked.text();
		pregunta12.push(textChecked);
	})
	$(".jm-checkbox--thirteen .is-checked").each(function (){
		var isChecked    = $(this);
		var inputChecked = isChecked.find('.mdl-checkbox__label');
		var textChecked  = inputChecked.text();
		pregunta13.push(textChecked);
	})
	pregunta1              = (pregunta1 == null) ? '' : pregunta1.toString();
	pregunta4              = (pregunta4 == null) ? '' : pregunta4.toString();
	pregunta5              = (pregunta5 == null) ? '' : pregunta5.toString();
	pregunta6              = hardware + "% Hardware y " + service +  "% Servicio";
	pregunta7              = (pregunta7 == null) ? '' : pregunta7.toString();
	pregunta8              = (pregunta8 == null) ? '' : pregunta8.toString();
	pregunta9              = (pregunta9 == null) ? '' : pregunta9.toString();
	arrayServer            = (arrayServer == null) ? '' : arrayServer.toString();
	arrayStorage           = (arrayStorage == null) ? '' : arrayStorage.toString();
	arrayWireless          = (arrayWireless == null) ? '' : arrayWireless.toString();
	arrayHyperconvergencia = (arrayHyperconvergencia == null) ? '' : arrayHyperconvergencia.toString();
	pregunta11             = (pregunta11 == null) ? '' : pregunta11.toString();
	pregunta12             = (pregunta12 == null) ? '' : pregunta12.toString();
	pregunta13             = (pregunta13 == null) ? '' : pregunta13.toString();
	$.ajax({
		data : {Pregunta1         : pregunta1,
				Person            : person,
				Employee          : employee,
				Pregunta4		  : pregunta4,
				Pregunta5   	  : pregunta5,
				Pregunta6 		  : pregunta6,
				Pregunta7   	  : pregunta7,
				Pregunta8   	  : pregunta8,
				Pregunta9   	  : pregunta9,
				Server            : arrayServer,
				Storage           : arrayStorage,
				Wireless          : arrayWireless,
				Hyperconvergencia : arrayHyperconvergencia,
				Pregunta11   	  : pregunta11,
				Pregunta12   	  : pregunta12,
				Pregunta13   	  : pregunta13,
				Codigo            : codigo},
		url   : 'home/quiz',
		type  : 'POST'
	}).done(function(data){
		try{
        	data = JSON.parse(data);
        	if(data.error == 0){
				pregunta1			   = [];
				pregunta4  			   = [];
				pregunta5  			   = [];
				pregunta6  			   = [];
				pregunta7  			   = [];
				pregunta8  			   = [];
				pregunta9  			   = [];
				arrayServer            = [];
				arrayStorage           = [];
				arrayWireless          = [];
				arrayHyperconvergencia = [];
				pregunta11  			   = [];
				pregunta12  			   = [];
				pregunta13  			   = [];
				$('.js-checkbox').find('.mdl-checkbox').removeClass('is-checked');
				$('.js-checkbox').find('input').prop("checked", false);
				$('#textAnswer').css('display','none');
				$('.jm-question').removeClass('fadeInRight');
				$('#question-seven').addClass('animated fadeOutLeft');
				$('#section-cupo').addClass('animated fadeInRight');
				$('#button-quiz').attr("disabled", false);
        	}else {
				msj('error', 'Hubo un problema');
        		return;
        	}
		} catch (err){
			msj('error',err.message);
		}
	});
}
function validateEmail(email){
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}
function validateEmailCorporative(email){
    var re = /[a-zA-Z0-9@]+(?=hotmail.com|yahoo.com|gmail.com|outlook.com)/;
    return re.test(email);
}
function verificarDatos(e) {
	if(e.keyCode === 13){
		e.preventDefault();
		ingresarQuiz();
    }
}
function checkedOtros(element){
	var isChecked    = element;
	var idChecked    = isChecked.attr('id');
	var divInput     = element.parents('.jm-list--checkbox').find('.jm-input');
	console.log(idChecked);
	if(element.is(":checked")){
		divInput.css('display','block');
	}else{
		divInput.css('display','none');
	}
}
function reload(){
	location.reload();
}
// function hideModal(){
// 	if ($('#modalPassword').length > 0){ 
// 		console.log("buena");
// 	}else{
// 		alert('BUEN INTENTO');
// 	}
// }
// function loginSite(){
// 	var passwordSite 	 = $('#passwordSite').val();
// 	if(passwordSite == null || passwordSite == '') {
// 		msj('error', 'Ingrese Password');
// 		return;
// 	}
// 	$.ajax({
// 		data : {PasswordSite : passwordSite},
// 		url  : 'home/ingresarSite',
// 		type : 'POST'
// 	}).done(function(data){
// 		try {
// 			data = JSON.parse(data);
// 			if(data.error == 0){
// 				$('.js-input').find('input').val('');
// 				$('#modalPassword').modal('hide');
//         	}else{
//         		msj('error', data.msj);
//         		return;
//         	}
// 		} catch (err) {
// 			msj('error', err.message);
// 		}
// 	});
// }
function openModalLibro(id){
	var id = $('#'+id);
	var modalTeam = $('#ModalLibro');
	var tituloModal = id.parents('.jm-book').find('h2');
	var descripcion = id.parents('.jm-book').find('p');
	var imagen      = id.parents('.jm-book').find('img');
	modalTeam.find('img').attr("src",imagen.attr('src'));
	modalTeam.find('h2').text(tituloModal[0].innerText);
	modalTeam.find('p').text(descripcion[0].innerText);
	modalTeam.modal('show');
}