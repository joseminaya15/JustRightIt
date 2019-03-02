<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible"  content="IE=edge">
    <meta name="viewport"               content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <meta name="description"            content="HPE Just Right IT">
    <meta name="keywords"               content="HPE Just Right IT">
    <meta name="robots"                 content="Index,Follow">
    <meta name="date"                   content="December 15, 2018"/>
    <meta name="language"               content="en">
    <meta name="theme-color"            content="#425563">
	<title>HPE Just Right IT</title>
    <link rel="shortcut icon" href="<?php echo RUTA_IMG?>logo/favicon.ico">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>toaster/toastr.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>mdl/material.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap-select/css/bootstrap-select.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap/css/bootstrap.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>datetimepicker/css/bootstrap-material-datetimepicker.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>owl-carousel/owl.carousel.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>owl-carousel/owl.theme.default.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>material-icons.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>metric.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_CSS?>m-p.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_CSS?>style.css?v=<?php echo time();?>">
</head>
<body>
    <!-- <div class="js-header">
        <div class="js-header--container">
            <div class="js-header--left">
                <img src="<?php echo RUTA_IMG?>logo/hpe-logo.png">
            </div>
        </div>
    </div> -->
    <nav class="navbar navbar-default">
        <div class="js-container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand link" href="#home">
                    <img src="<?php echo RUTA_IMG?>logo/hpe-logo.png">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="nav-item active"><a class="link" href="#home">Inicio</a></li>
                    <li class="nav-item"><a class="link" href="#register">Registro</a></li>
                    <li class="nav-item"><a class="link" href="#login">Acceso Registrados</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section id="home">
        <div class="owl-carousel owl-theme">
            <div class="item">
                <div class="js-fondo fondo1"></div>
            </div>
            <div class="item">
                <div class="js-fondo fondo2"></div>
            </div>
            <div class="item">
                <div class="js-fondo fondo3"></div>
            </div>
            <div class="item">
                <div class="js-fondo fondo4"></div>
            </div>
        </div>
        <div class="js-container">
            <div class="js-home js-flex">
                <div class="js-contenido">
                    <h2>"T&uacute; aceptas los retos sin pesta&ntilde;ear?"</h2>
                    <p>Para nosotros tú eres un VIP, te invitamos a ser parte del equipo ganador.</p>
                    <a href="#register" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect link js-button">Registrese aqu&iacute;</a>
                </div>
            </div>
        </div>
    </section>
    <section id="register" class="js-section">
        <div class="js-container">
            <div class="js-information">
                <h2>Jueves 25 de Abril, 2019</h2>
                <h3>Hora de inicio: 4:00 p.m.</h3>
                <p>Costa Rica Beer Factory</p>
                <span>Barrio Escalante, 100mts sur de Fresh Market o 600mts norte de Bagelmen´s, Calle 33, San Jos&eacute;</span>
            </div>
            <div class="js-title">
                <h2>REG&Iacute;STRESE AHORA</h2>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4">
                     <div class="js-input">
                        <label for="text">Empresa*</label>
                        <input type="text" id="company" >
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                     <div class="js-input">
                        <label for="text">Direccion F&iacute;sica de la Empresa*</label>
                        <input type="text" id="address" >
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="js-input">
                        <label for="text">Nombre*</label>
                        <input type="text" id="name">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="js-input">
                        <label for="text">Apellido*</label>
                        <input type="text" id="surname">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="js-input">
                        <label for="text">Cargo*</label>
                        <input type="text" id="position">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="js-input">
                        <label for="text">Email Corporativo*</label>
                        <input type="text" id="email">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="js-input">
                        <label for="text">Tel&eacute;fono*</label>
                        <input type="text" id="phone">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="js-input js-date js-flex">
                        <input class="js-disabled" type="text" id="birthday" name="birthday" maxlength="10" placeholder="Fecha de cumpleaños*" value="" style="pointer-events: none" disabled>
                        <div class="js-icon">
                            <button type="button" class="mdl-button mdl-js-button mdl-button--icon">
                                <i class="mdi mdi-date_range"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="js-input">
                        <label for="text">Deporte que le gusta*</label>
                        <input type="text" id="sport">
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="jm-card--checkbox">
                        <p>- Que marcas comercializa tu empresa? (Escoger m&aacute;s de una opci&oacute;n)</p>
                        <div class="jm-list--checkbox">
                            <div class="jm-title--checlbox">
                                <h2>SERVERS</h2>
                            </div>
                            <div class="js-checkbox jm-checkbox--comercializa">
                                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="SERVERS-HPE">
                                    <input type="checkbox" id="SERVERS-HPE" class="mdl-checkbox__input">
                                    <span class="mdl-checkbox__label">HPE</span>
                                </label>
                            </div>
                            <div class="js-checkbox jm-checkbox--comercializa">
                                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="SERVERS-DELL">
                                    <input type="checkbox" id="SERVERS-DELL" class="mdl-checkbox__input">
                                    <span class="mdl-checkbox__label">DELL</span>
                                </label>
                            </div>
                            <div class="js-checkbox jm-checkbox--comercializa">
                                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="SERVERS-CISCO">
                                    <input type="checkbox" id="SERVERS-CISCO" class="mdl-checkbox__input">
                                    <span class="mdl-checkbox__label">CISCO</span>
                                </label>
                            </div>
                            <div class="js-checkbox jm-checkbox--comercializa">
                                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="SERVERS-LENOVO">
                                    <input type="checkbox" id="SERVERS-LENOVO" class="mdl-checkbox__input">
                                    <span class="mdl-checkbox__label">LENOVO</span>
                                </label>
                            </div>
                            <div class="js-checkbox jm-checkbox--comercializa">
                                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="SERVERS-HUAWEI">
                                    <input type="checkbox" id="SERVERS-HUAWEI" class="mdl-checkbox__input">
                                    <span class="mdl-checkbox__label">HUAWEI</span>
                                </label>
                            </div>
                        </div>
                        <div class="jm-list--checkbox">
                            <div class="jm-title--checlbox">
                                <h2>STORAGE</h2>
                            </div>
                            <div class="js-checkbox jm-checkbox--comercializa">
                                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="STORAGE-HPE">
                                    <input type="checkbox" id="STORAGE-HPE" class="mdl-checkbox__input">
                                    <span class="mdl-checkbox__label">HPE</span>
                                </label>
                            </div>
                            <div class="js-checkbox jm-checkbox--comercializa">
                                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="STORAGE-NETAPP">
                                    <input type="checkbox" id="STORAGE-NETAPP" class="mdl-checkbox__input">
                                    <span class="mdl-checkbox__label">NETAPP</span>
                                </label>
                            </div>
                            <div class="js-checkbox jm-checkbox--comercializa">
                                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="STORAGE-PURESTORAGE">
                                    <input type="checkbox" id="STORAGE-PURESTORAGE" class="mdl-checkbox__input">
                                    <span class="mdl-checkbox__label">PURESTORAGE</span>
                                </label>
                            </div>
                            <div class="js-checkbox jm-checkbox--comercializa">
                                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="STORAGE-DELL/EMC">
                                    <input type="checkbox" id="STORAGE-DELL/EMC" class="mdl-checkbox__input">
                                    <span class="mdl-checkbox__label">DELL/EMC</span>
                                </label>
                            </div>
                        </div>
                        <div class="jm-list--checkbox">
                            <div class="jm-title--checlbox">
                                <h2>WIRELESS</h2>
                            </div>
                            <div class="js-checkbox jm-checkbox--comercializa">
                                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="WIRELESS-HPEARUBA">
                                    <input type="checkbox" id="WIRELESS-HPEARUBA" class="mdl-checkbox__input">
                                    <span class="mdl-checkbox__label">HPE ARUBA</span>
                                </label>
                            </div>
                            <div class="js-checkbox jm-checkbox--comercializa">
                                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="WIRELESS-CISCOMERAKI">
                                    <input type="checkbox" id="WIRELESS-CISCOMERAKI" class="mdl-checkbox__input">
                                    <span class="mdl-checkbox__label">CISCO MERAKI</span>
                                </label>
                            </div>
                            <div class="js-checkbox jm-checkbox--comercializa">
                                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="WIRELESS-WIFIUBIQUITI">
                                    <input type="checkbox" id="WIRELESS-WIFIUBIQUITI" class="mdl-checkbox__input">
                                    <span class="mdl-checkbox__label">WIFI UBIQUITI</span>
                                </label>
                            </div>
                            <div class="js-checkbox jm-checkbox--comercializa">
                                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="WIRELESS-DELLNETWORKING">
                                    <input type="checkbox" id="WIRELESS-DELLNETWORKING" class="mdl-checkbox__input">
                                    <span class="mdl-checkbox__label">DELL NETWORKING</span>
                                </label>
                            </div>
                            <div class="js-checkbox jm-checkbox--comercializa">
                                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="WIRELESS-RUCKUS">
                                    <input type="checkbox" id="WIRELESS-RUCKUS" class="mdl-checkbox__input">
                                    <span class="mdl-checkbox__label">RUCKUS</span>
                                </label>
                            </div>
                            <div class="js-checkbox jm-checkbox--comercializa">
                                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="WIRELESS-LINKSYS">
                                    <input type="checkbox" id="WIRELESS-LINKSYS" class="mdl-checkbox__input">
                                    <span class="mdl-checkbox__label">LINKSYS</span>
                                </label>
                            </div>
                        </div>
                        <div class="jm-list--checkbox">
                            <div class="jm-title--checlbox">
                                <h2>HYPERCONVERGENCIA</h2>
                            </div>
                            <div class="js-checkbox jm-checkbox--comercializa">
                                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="HYPERCONVERGENCIA-SIMPLIVITY">
                                    <input type="checkbox" id="HYPERCONVERGENCIA-SIMPLIVITY" class="mdl-checkbox__input">
                                    <span class="mdl-checkbox__label">HPE SIMPLIVITY</span>
                                </label>
                            </div>
                            <div class="js-checkbox jm-checkbox--comercializa">
                                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="HYPERCONVERGENCIA-CISCO">
                                    <input type="checkbox" id="HYPERCONVERGENCIA-CISCO" class="mdl-checkbox__input">
                                    <span class="mdl-checkbox__label">CISCO</span>
                                </label>
                            </div>
                            <div class="js-checkbox jm-checkbox--comercializa">
                                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="HYPERCONVERGENCIA-DELLVXRAIL">
                                    <input type="checkbox" id="HYPERCONVERGENCIA-DELLVXRAIL" class="mdl-checkbox__input">
                                    <span class="mdl-checkbox__label">DELL VXRAIL</span>
                                </label>
                            </div>
                            <div class="js-checkbox jm-checkbox--comercializa">
                                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="HYPERCONVERGENCIA-NETAPPHC">
                                    <input type="checkbox" id="HYPERCONVERGENCIA-NETAPPHC" class="mdl-checkbox__input">
                                    <span class="mdl-checkbox__label">NETAPP HC</span>
                                </label>
                            </div>
                            <div class="js-checkbox jm-checkbox--comercializa">
                                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="HYPERCONVERGENCIA-NUTANIX">
                                    <input type="checkbox" id="HYPERCONVERGENCIA-NUTANIX" class="mdl-checkbox__input">
                                    <span class="mdl-checkbox__label">NUTANIX</span>
                                </label>
                            </div>
                            <div class="js-checkbox jm-checkbox--comercializa">
                                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="HYPERCONVERGENCIA-VMWAREVSAN">
                                    <input type="checkbox" id="HYPERCONVERGENCIA-VMWAREVSAN" class="mdl-checkbox__input">
                                    <span class="mdl-checkbox__label">VMWARE VSAN</span>
                                </label>
                            </div>
                            <div class="js-checkbox jm-checkbox--comercializa">
                                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="HYPERCONVERGENCIA-LENOVO">
                                    <input type="checkbox" id="lenovo" class="mdl-checkbox__input">
                                    <span class="mdl-checkbox__label">LENOVO</span>
                                </label>
                            </div>
                            <div class="js-checkbox jm-checkbox--comercializa">
                                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="HYPERCONVERGENCIA-HUAWEI">
                                    <input type="checkbox" id="HYPERCONVERGENCIA-HUAWEI" class="mdl-checkbox__input">
                                    <span class="mdl-checkbox__label">HUAWEI</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="jm-card--checkbox">
                        <p>- Que describe mejor a tu compa&ntilde;ia? (Escoger m&aacute;s de una opci&oacute;n)</p>
                        <div class="jm-list--checkbox">
                            <div class="js-checkbox max-width jm-checkbox--company">
                                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="option-1">
                                    <input type="checkbox" id="option-1" class="mdl-checkbox__input">
                                    <span class="mdl-checkbox__label">Venta, instalación y Reparaci&oacute;n de equipo de c&oacute;mputo.</span>
                                </label>
                            </div>
                            <div class="js-checkbox max-width jm-checkbox--company">
                                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="option-2">
                                    <input type="checkbox" id="option-2" class="mdl-checkbox__input">
                                    <span class="mdl-checkbox__label">Venta de sistemas especiales (sistema de videovigilancia y seguridad, alarmas e incendio, paneles solares).</span>
                                </label>
                            </div>
                            <div class="js-checkbox max-width jm-checkbox--company">
                                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="option-3">
                                    <input type="checkbox" id="option-3" class="mdl-checkbox__input">
                                    <span class="mdl-checkbox__label">Desarrolladores de software e integradores.</span>
                                </label>
                            </div>
                            <div class="js-checkbox max-width jm-checkbox--company">
                                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="option-4">
                                    <input type="checkbox" id="option-4" class="mdl-checkbox__input">
                                    <span class="mdl-checkbox__label">Venta, instalación y reparación de equipo de impresión.</span>
                                </label>
                            </div>
                            <div class="js-checkbox max-width jm-checkbox--company">
                                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="option-5">
                                    <input type="checkbox" id="option-5" class="mdl-checkbox__input">
                                    <span class="mdl-checkbox__label">Venta e instalación de cableado estructurado, fibra óptica y/o datacenter.</span>
                                </label>
                            </div>
                            <div class="js-checkbox max-width jm-checkbox--company">
                                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="option-6">
                                    <input type="checkbox" id="option-6" class="mdl-checkbox__input">
                                    <span class="mdl-checkbox__label">Venta e instalación de sistema de potencia, aires de precisión, sistema de confinamiento.</span>
                                </label>
                            </div>
                            <div class="js-checkbox max-width jm-checkbox--company">
                                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="option-7">
                                    <input type="checkbox" id="option-7" class="mdl-checkbox__input">
                                    <span class="mdl-checkbox__label">Venta de soluciones en comunicaciones e inalámbricas.</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="js-section--button text-center">
                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button js-login" onclick="sendInformation()">Enviar</button>
            </div>
            <div id="confirmation" class="js-confirmation">
                <h2>Registro realizado correctamente. Lo esperamos</h2>
            </div>
        </div>
    </section>
    <section id="login" class="js-section jm-white">
        <div class="js-container">
            <h2 class="js-title">ACCESO REGISTRADOS</h2>
            <p class="text-center">Si usted ya se encuentra registrado, ingrese su email para realizar un quiz y ganar grandes premios.</p>
            <div class="js-input js-input--default">
                <label for="text">Email*</label>
                <input type="text" id="emailRegister" onkeyup="verificarDatos(event);">
            </div>
            <div class="js-reserva text-center">
                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button js-login" onclick="ingresarQuiz()">Empezar Quiz</button>
            </div>
            <div id="registered" class="js-confirmation">
                <h2>Registro completado. ¡Nos vemos en Houston!</h2>
            </div>
        </div>
    </section>
    <footer class="js-section p-t-20 p-b-20">
        <div class="js-container text-center">
            <p>&copy;Copyright 2019 Hewlett Packard Enterprise Development LP</p>
            <p class="content">*Completando está información participa en un sorteo al final del evento.</p>
        </div>
    </footer>

    <div class="modal fade" id="ModalQuiz" tabindex="-1" role="dialog" aria-labelledby="simpleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
		<div class="modal-dialog modal-md jm-modal" role="document">
			<div class="modal-content">
				<div class="mdl-card">
					<div class="mdl-card__title">
						<h2>¡Gracias por ser parte de la comunidad HPE! </h2>
                        <p>Responde las siguientes preguntas y participa por grandes premios.<p>
					</div>
					<div class="mdl-card__supporting-text p-t-0">
                        <div class="jm-list--checkbox">
                            <div class="jm-title--checlbox">
                                <h2>1. Que ofrece HPE Simplivity HyperGuarantee?</h2>
                            </div>
                            <div class="js-checkbox jm-checkbox--quiz max-width">
                                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="question1-1">
                                    <input type="checkbox" id="question1-1" class="mdl-checkbox__input">
                                    <span class="mdl-checkbox__label">A. Copias de seguridad en una hora.</span>
                                </label>
                            </div>
                            <div class="js-checkbox jm-checkbox--quiz max-width">
                                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="question1-2">
                                    <input type="checkbox" id="question1-2" class="mdl-checkbox__input">
                                    <span class="mdl-checkbox__label">B. Garantia de fabrica basica de 72 meses.</span>
                                </label>
                            </div>
                            <div class="js-checkbox jm-checkbox--quiz max-width">
                                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="question1-3">
                                    <input type="checkbox" id="question1-3" class="mdl-checkbox__input">
                                    <span class="mdl-checkbox__label">C. Un ahorro de capacidad del 90 % en almacenamiento y copia de seguridad combinados en relaci&oacute;n con las soluciones tradicionales comparables.</span>
                                </label>
                            </div>
                            <div class="js-checkbox jm-checkbox--quiz max-width">
                                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="question1-4">
                                    <input type="checkbox" id="question1-4" class="mdl-checkbox__input">
                                    <span class="mdl-checkbox__label">D. Capacidad de copia de seguridad integrada, llevar&aacute; menos de un minuto, de media, en completar una copia de seguridad local o una restauraci&oacute;n local de una m&aacute;quina virtual de 1 TB.</span>
                                </label>
                            </div>
                            <div class="js-checkbox jm-checkbox--quiz max-width">
                                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="question1-5">
                                    <input type="checkbox" id="question1-5" class="mdl-checkbox__input">
                                    <span class="mdl-checkbox__label">E. Soporta el hypervisor Acropolis.</span>
                                </label>
                            </div>
                        </div>
                        <div class="jm-list--checkbox">
                            <div class="jm-title--checlbox">
                                <h2>2. Que bondades tiene la soluci&oacute;n de software Infosight?</h2>
                            </div>
                            <div class="js-checkbox jm-checkbox--quiz max-width">
                                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="question2-1">
                                    <input type="checkbox" id="question2-1" class="mdl-checkbox__input">
                                    <span class="mdl-checkbox__label">A. Disponibilidad de 6 nueves (99.9999%).</span>
                                </label>
                            </div>
                            <div class="js-checkbox jm-checkbox--quiz max-width">
                                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="question2-2">
                                    <input type="checkbox" id="question2-2" class="mdl-checkbox__input">
                                    <span class="mdl-checkbox__label">B. Elimina el soporte nivel 1 y 2.</span>
                                </label>
                            </div>
                            <div class="js-checkbox jm-checkbox--quiz max-width">
                                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="question2-3">
                                    <input type="checkbox" id="question2-3" class="mdl-checkbox__input">
                                    <span class="mdl-checkbox__label">C. Acceso a llamada de soporte nivel 3 en menos de 10 minutos.</span>
                                </label>
                            </div>
                            <div class="js-checkbox jm-checkbox--quiz max-width">
                                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="question2-4">
                                    <input type="checkbox" id="question2-4" class="mdl-checkbox__input">
                                    <span class="mdl-checkbox__label">D. Disponibilidad de 5 nueves (99.999%).</span>
                                </label>
                            </div>
                            <div class="js-checkbox jm-checkbox--quiz max-width">
                                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="question2-5">
                                    <input type="checkbox" id="question2-5" class="mdl-checkbox__input">
                                    <span class="mdl-checkbox__label">E. Acceso a llamada de soporte nivel 3 en menos de 1 minuto.</span>
                                </label>
                            </div>
                        </div>
                        <div class="jm-list--checkbox">
                            <div class="jm-title--checlbox">
                                <h2>3. Que productos son parte del portafolio de software de Aruba?</h2>
                            </div>
                            <div class="js-checkbox jm-checkbox--quiz max-width">
                                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="question3-1">
                                    <input type="checkbox" id="question3-1" class="mdl-checkbox__input">
                                    <span class="mdl-checkbox__label">A. Aruba ClearPass.</span>
                                </label>
                            </div>
                            <div class="js-checkbox jm-checkbox--quiz max-width">
                                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="question3-2">
                                    <input type="checkbox" id="question3-2" class="mdl-checkbox__input">
                                    <span class="mdl-checkbox__label">B. Aruba Airwave.</span>
                                </label>
                            </div>
                            <div class="js-checkbox jm-checkbox--quiz max-width">
                                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="question3-3">
                                    <input type="checkbox" id="question3-3" class="mdl-checkbox__input">
                                    <span class="mdl-checkbox__label">C. Aruba Central.</span>
                                </label>
                            </div>
                            <div class="js-checkbox jm-checkbox--quiz max-width">
                                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="question3-4">
                                    <input type="checkbox" id="question3-4" class="mdl-checkbox__input">
                                    <span class="mdl-checkbox__label">D. Aruba Introspect.</span>
                                </label>
                            </div>
                            <div class="js-checkbox jm-checkbox--quiz max-width">
                                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="question3-5">
                                    <input type="checkbox" id="question3-5" class="mdl-checkbox__input">
                                    <span class="mdl-checkbox__label">E. Aruba Meridian.</span>
                                </label>
                            </div>
                            <div class="js-checkbox jm-checkbox--quiz max-width">
                                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="question3-6">
                                    <input type="checkbox" id="question3-6" class="mdl-checkbox__input">
                                    <span class="mdl-checkbox__label">E. Aruba NetInsight.</span>
                                </label>
                            </div>
                        </div>
                        <div class="jm-list--checkbox">
                            <div class="jm-title--checlbox">
                                <h2>4. Cual es la diferencia en contratar entre estos dos servicios de HPE PointNext : Proactive Care VS Proactive Advanced?</h2>
                            </div>
                            <div class="js-checkbox jm-checkbox--quiz max-width">
                                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="question4-1">
                                    <input type="checkbox" id="question4-1" class="mdl-checkbox__input">
                                    <span class="mdl-checkbox__label">A. 1 ingeniero asignado VS. 2 ingenieros asignados.</span>
                                </label>
                            </div>
                            <div class="js-checkbox jm-checkbox--quiz max-width">
                                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="question4-2">
                                    <input type="checkbox" id="question4-2" class="mdl-checkbox__input">
                                    <span class="mdl-checkbox__label">B. 1 Ingeniero remoto asignado VS. 1 ingeniero asignado local.</span>
                                </label>
                            </div>
                            <div class="js-checkbox jm-checkbox--quiz max-width">
                                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="question4-3">
                                    <input type="checkbox" id="question4-3" class="mdl-checkbox__input">
                                    <span class="mdl-checkbox__label">C. Asistencia via telefonica en un tiempo de respuesta de 4hrs.</span>
                                </label>
                            </div>
                            <div class="js-checkbox jm-checkbox--quiz max-width">
                                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="question4-4">
                                    <input type="checkbox" id="question4-4" class="mdl-checkbox__input">
                                    <span class="mdl-checkbox__label">D. Dimensionamiento de espacio para futuras configuraciones dentro del Datacenter.</span>
                                </label>
                            </div>
                            <div class="js-checkbox jm-checkbox--quiz max-width">
                                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="question4-5">
                                    <input type="checkbox" id="question4-5" class="mdl-checkbox__input">
                                    <span class="mdl-checkbox__label">E. Establecimiento de distintos equipos en misi&oacute;n critica dentro y fuera de la red.</span>
                                </label>
                            </div>
                        </div>
                        <div class="jm-list--checkbox">
                            <div class="jm-title--checlbox">
                                <h2>5. Cuales son las ventajas competitivas de HPE Nimble Storage?</h2>
                            </div>
                            <div class="js-checkbox jm-checkbox--quiz max-width">
                                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="question5-1">
                                    <input type="checkbox" id="question5-1" class="mdl-checkbox__input">
                                    <span class="mdl-checkbox__label">A. Disponibilidad 99.9999%.</span>
                                </label>
                            </div>
                            <div class="js-checkbox jm-checkbox--quiz max-width">
                                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="question5-2">
                                    <input type="checkbox" id="question5-2" class="mdl-checkbox__input">
                                    <span class="mdl-checkbox__label">B. xxxxxx.</span>
                                </label>
                            </div>
                            <div class="js-checkbox jm-checkbox--quiz max-width">
                                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="question5-3">
                                    <input type="checkbox" id="question5-3" class="mdl-checkbox__input">
                                    <span class="mdl-checkbox__label">C. xxxxxx.</span>
                                </label>
                            </div>
                            <div class="js-checkbox jm-checkbox--quiz max-width">
                                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="question5-4">
                                    <input type="checkbox" id="question5-4" class="mdl-checkbox__input">
                                    <span class="mdl-checkbox__label">D. xxxxxx.</span>
                                </label>
                            </div>
                            <div class="js-checkbox jm-checkbox--quiz max-width">
                                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="question5-5">
                                    <input type="checkbox" id="question5-5" class="mdl-checkbox__input">
                                    <span class="mdl-checkbox__label">E. xxxxxx.</span>
                                </label>
                            </div>
                        </div>
					</div>
                    <div class="mdl-card__actions text-right">
                        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button">Enviar Quiz</button>
                    </div>
				</div>
			</div>
		</div>
	</div>

	<script src="<?php echo RUTA_JS?>jquery-3.2.1.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_JS?>jquery-1.11.2.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>bootstrap/js/bootstrap.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/bootstrap-select.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/i18n/defaults-es_ES.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>mdl/material.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>owl-carousel/owl.carousel.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>moment/moment.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>datetimepicker/js/bootstrap-material-datetimepicker.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>toaster/toastr.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_JS?>jsmenu.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_JS?>Utils.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_JS?>jsindex.js?v=<?php echo time();?>"></script>
    <script type="text/javascript">
        if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
            $('select').selectpicker('mobile');
        } else {
            $('select').selectpicker();
        }
        initButtonCalendarDaysMaxToday('birthday');
    </script>
</body>
</html>