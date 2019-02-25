<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible"  content="IE=edge">
    <meta name="viewport"               content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <meta name="description"            content="HPE Siguiendo Tormentas">
    <meta name="keywords"               content="HPE Siguiendo Tormentas">
    <meta name="robots"                 content="Index,Follow">
    <meta name="date"                   content="December 15, 2018"/>
    <meta name="language"               content="en">
    <meta name="theme-color"            content="#425563">
	<title>HPE Siguiendo Tormentas</title>
    <link rel="shortcut icon" href="<?php echo RUTA_IMG?>logo/favicon.ico">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>toaster/toastr.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>mdl/material.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap-select/css/bootstrap-select.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap/css/bootstrap.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>material-icons.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>metric.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_CSS?>m-p.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_CSS?>style.css?v=<?php echo time();?>">
</head>
<body>
    <div class="js-header">
        <div class="js-header--container">
            <div class="js-header--left">
                <img src="<?php echo RUTA_IMG?>logo/hpe-logo.png">
            </div>
            <div class="js-header--right">
                <img src="<?php echo RUTA_IMG?>logo/logo-sass.png">
            </div>
        </div>
    </div>
    <section id="home">
        <div class="js-fondo"></div>
        <div class="js-container">
            <div class="js-home js-flex">
                <div class="js-contenido">
                    <h2>Persiguiendo las grandes tormentas</h2>
                    <p>Un evento de tendencias globales</p>
                </div>
            </div>
        </div>
    </section>
    <section id="register" class="js-section">
        <div class="js-container">
            <div class="js-information">
                <h1>El ORBE ofrece a sus clientes soluciones tecnol&oacute;gicas innovadoras, basadas en el portafolio de l&iacute;deres de la industria como HPE y SAS, para apoyarles en su proceso de transformaci&oacute;n y en su capacidad para tomar mejores decisiones y generar mayores resultados para su negocio.</h1>
                <h2>Jueves 7 de Febrero, 2019</h2>
                <h3>Hora de inicio: 4:00 p.m.</h3>
                <p>K'abel Sala de eventos</p>
                <span>6A Avenida 9-18 zona 10, Edificio Sixtino2 nivel 10, Ciudad de Guatemala</span>
                <h4>Un evento de</h4>
                <img src="<?php echo RUTA_IMG?>logo/logo-orbe.png">
            </div>
            <div class="js-title">
                <h2>Reg&iacute;strese completando el siguiente formulario</h2>
            </div>
            <div class="row">
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
                        <label for="text">Email*</label>
                        <input type="text" id="email" >
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="js-input">
                        <label for="text">Tel&eacute;fono*</label>
                        <input type="text" id="phone">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                     <div class="js-input">
                        <label for="text">Empresa*</label>
                        <input type="text" id="company" >
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="js-input">
                        <label for="text">Cargo*</label>
                        <input type="text" id="position">
                    </div>
                </div>
                <div class="col-xs-12 text-center jm-subtitle">
                    <p>Parte de la filosofia de <strong style="font-weight: 100;">Componentes El Orbe</strong> es compartir conocimiento por lo que queremos  obsequiarle a los 40
                    primeros registrados un libro de esta coleccion de reciente lanzamiento. Marque el de su preferencia el cual se le entregara en el evento.</p>
                </div>
                <div class="col-xs-12">
                    <div class="col-md-3 col-sm-6 col-xs-6 jm-book">
                        <div class="jm-book__flip">
                            <div class="jm-book__front">
                                <img src="<?php echo RUTA_IMG?>logo/book1.png">
                            </div>
                            <div class="jm-book__back">
                                <h2>Irresistible</h2>
                                <p>En su revolucionario libro, el profesor de Psicolog&iacute;a y Marketing de la Universidad de Nueva York Adam Alter analiza el auge de las 
                                adicciones del comportamiento y explica por qu&eacute; tantos de los productos que consumimos hoy d&iacute;a son irresistibles. Estos milagrosos productos 
                                tienen el poder de acortar las distancias que nos separan de las personas de cualquier parte del mundo, pero su extraordinario —y en 
                                ocasiones perjudicial— magnetismo no es fruto de la casualidad. Las empresas que dise&ntilde;an estos productos los ajustan y reajustan hasta que 
                                logran que sea pr&aacute;cticamente imposible resistirse a ellos.</p>
                                <button id="book1" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button" onclick="openModalLibro(this.id)">Ver m&aacute;s</button>
                            </div>
                        </div>
                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1">
                        </label>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6 jm-book">
                        <div class="jm-book__flip">
                            <div class="jm-book__front">
                                <img src="<?php echo RUTA_IMG?>logo/book2.png">                                
                            </div>
                            <div class="jm-book__back">
                                <h2>S&aacute;lvese quien pueda!</h2>
                                <p>Manteni&eacute;ndose fiel a su caracter&iacute;stico estilo period&iacute;stico, Andr&eacute;s Oppenheimer lleva a sus lectores en un nuevo viaje, esta vez a trav&eacute;s del mundo, 
                                con la intenci&oacute;n de comprender cu&aacute;l ser&aacute; el futuro de los trabajos de hoy en el d&iacute;a, mientras se aproxima lo que muchos han denominado como la era de 
                                la automatizaci&oacute;n.</p>
                                <button id="book2" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button" onclick="openModalLibro(this.id)">Ver m&aacute;s</button>
                            </div>
                        </div>
                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
                            <input type="radio" id="option-2" class="mdl-radio__button" name="options" value="1">
                        </label>                
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6 jm-book">
                        <div class="jm-book__flip">
                            <div class="jm-book__front">
                                <img src="<?php echo RUTA_IMG?>logo/book3.jpg">
                            </div>
                            <div class="jm-book__back">
                                <h2>Vida 3.0</h2>
                                <p>El cosm&oacute;logo Max Tegmark (Estocolmo, 1967) director del Future of Life Institute (MIT, en Cambridge, Estados Unidos), es autor de un texto muy importante: “Vida 3.0. 
                                Ser humano en la era de la inteligencia artificial”. En &eacute;l, habla de las oportunidades que la Inteligencia Artificial puede presentar a los seres humanos; pero, tambi&eacute;n, 
                                de los enormes riesgos que provienen de descartar el factor humano de la vida en el planeta.</p>
                                <button id="book3" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button" onclick="openModalLibro(this.id)">Ver m&aacute;s</button>
                            </div>
                        </div>
                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-3">
                            <input type="radio" id="option-3" class="mdl-radio__button" name="options" value="1">
                        </label>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6 jm-book">
                        <div class="jm-book__flip">
                            <div class="jm-book__front">
                                <img src="<?php echo RUTA_IMG?>logo/book4.jpg">
                            </div>
                            <div class="jm-book__back">
                                <h2>El Futuro de la Humanidad</h2>
                                <p>El Dr. Kaku nos presenta a lo largo de estas p&aacute;ginas a robots autoreplicantes, nanomateriales y cultivos de bioingenier&iacute;a que permitir&aacute;n a la humanidad 
                                terraformar Marte; las naves nanom&eacute;tricas, las velas l&aacute;ser, las m&aacute;quinas de fusi&oacute;n ram-jet, los motores antimateria y los cohetes hiperimpulsores que 
                                nos llevar&aacute;n a las estrellas; y las tecnolog&iacute;as radicales que alteran el cuerpo que nos permitir&aacute;n sobrevivir al largo y agotador viaje de conquista del espacio</p>
                                <button id="book4" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button" onclick="openModalLibro(this.id)">Ver m&aacute;s</button>
                            </div>
                        </div>
                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-4">
                            <input type="radio" id="option-4" class="mdl-radio__button" name="options" value="1">
                        </label>
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
    <footer class="js-section p-t-20 p-b-20">
        <div class="js-container text-center">
            <p>&copy;Copyright 2018 Hewlett Packard Enterprise Development LP</p>
            <p class="content">*Completando está información participa en un sorteo al final del evento.</p>
        </div>
    </footer>

    <div class="modal fade" id="ModalLibro" tabindex="-1" role="dialog" aria-labelledby="simpleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
		<div class="modal-dialog modal-sm jm-modal" role="document">
			<div class="modal-content">
				<div class="mdl-card">
					<div class="mdl-card__title p-b-0">
						<h2></h2>
					</div>
					<div class="mdl-card__supporting-text p-t-0">
						<p></p>
					</div>
                    <div class="mdl-card__menu">
                        <button class="mdl-button mdl-js-button mdl-button--icon" data-dismiss="modal">
                            <i class="mdi mdi-close"></i>
                        </button>
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
    <script src="<?php echo RUTA_PLUGINS?>toaster/toastr.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_JS?>Utils.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_JS?>jsindex.js?v=<?php echo time();?>"></script>
    <script type="text/javascript">
        // var URLactual = window.location;
        // if(URLactual['href'] != 'http://www.marketinghp.net/microsite/DCN/evento_cr/'){
        //     location.href = 'http://www.marketinghp.net/microsite/DCN/evento_cr/';
        // }
        if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
            $('select').selectpicker('mobile');
        } else {
            $('select').selectpicker();
        }
    </script>
</body>
</html>