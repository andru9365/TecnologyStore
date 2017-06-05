<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Inicio</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
        
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
	<script src="js/materialize.min.js" ></script>
	<script src="js/main.js" ></script>
</head>
<body>
        
	<form id="LoginModal" class="modal modal-fixed-footer">
		<div class="modal-content">                    
			<h5 class="center-align">Inicio Sesion</h5>
			<div class="row">
				<div class="input-field col s12">
					<i class="zmdi zmdi-account-circle prefix"></i>
					<input id="name" type="text" class="validate">
					<label for="name">Nickname</label>
				</div>
				<div class="input-field col s12">
					<i class="zmdi zmdi-lock prefix"></i>
					<input id="password" type="password" class="validate">
					<label for="password">Password</label>
				</div>
                          
                            
                            <script src='https://www.google.com/recaptcha/api.js'></script>
                            
                            <center><div class="g-recaptcha" data-sitekey="6LekxRsUAAAAAJfnBfpufID0UssLTwrAly8SF-G6"></div></center>
			</div>
		</div>
		<div class="modal-footer">
			<a href="#!" class="waves-effect btn-flat tooltipped" data-position="top" data-tooltip="Enviar"><i class="zmdi zmdi-mail-send"></i></a>
			<a href="#!" class="modal-action modal-close waves-effect btn-flat tooltipped" data-position="top" data-tooltip="Cancelar"><i class="zmdi zmdi-close"></i></a>
                         
		</div>
	</form>
    
   
   
	<form id="RegModal" class="modal modal-fixed-footer">
		<div class="modal-content">
			<h5 class="center-align">Registro</h5>
			<div class="row">
                               <div class="input-field col s12">
					<i class="zmdi zmdi-account-box prefix"></i>
					<input id="cedula" type="text" class="validate">
					<label for="cedula">Cedula</label>
                                        
				</div>
				<div class="input-field col s12">
					<i class="zmdi zmdi-account prefix"></i>
					<input id="nombre" type="text" class="validate">
					<label for="nombre">Nombre</label>
				</div>
				<div class="input-field col s12">
					<i class="zmdi zmdi-account prefix"></i>
					<input id="apellido" type="text" class="validate">
					<label for="apellido">Apellido</label>
				</div>
				
				<div class="input-field col s12">
					<i class="zmdi zmdi-lock prefix"></i>
					<input id="password" type="password" class="validate">
					<label for="password">Contraseña</label>
				</div>
                                <div class="input-field col s12">
					<i class="zmdi zmdi-account-box prefix"></i>
					<input id="correo" type="text" class="validate">
					<label for="correo">Correo</label>
<!--                                        <i class="fa fa-envelope-open" aria-hidden="true"></i>-->
				</div>
                                  <div class="input-field col s12">
					<i class="zmdi zmdi-account-box prefix"></i>
					<input id="ciudad" type="text" class="validate">
					<label for="ciudad">Ciudad</label>
				</div>
                              <div class="input-field col s12">
					<i class="zmdi zmdi-account-box prefix"></i>
					<input id="genero" type="text" class="validate">
					<label for="genero">Genero</label>
				</div>
                              <div class="input-field col s12">
					<i class="zmdi zmdi-account-box prefix"></i>
                                        <br></br>
					<input id="fecha" type="date" class="validate">
					<label for="fecha">Fecha Nacimiento</label>
				</div>
                           
				
			</div>
		</div>
		<div class="modal-footer">
			<a href="#!" class="waves-effect btn-flat tooltipped" data-position="top" data-tooltip="Enviar"><i class="zmdi zmdi-mail-send"></i></a>
			<a href="#!" class="modal-action modal-close waves-effect btn-flat tooltipped" data-position="top" data-tooltip="Cancelar"><i class="zmdi zmdi-close"></i></a>
		</div>
	</form>
	<nav class="NavBar full">
		<div class="row">
			<div class="tittles NavBar-logo col s12 m3">Technology Store</div>
			<ul class="NavBar-links col m9">
				<li><a href="index.php" class="waves-effect">Inicio</a></li>
                                <li><a href="catalogo.php" class="waves-effect">Catalogo</a></li>
				<li><a href="#!" class="waves-effect btn-shopcart">Carro Compras</a></li>
                                <li><a href="#RegModal" class="waves-effect modal-trigger">Registro</a></li>
				<li><a href="#LoginModal" class="waves-effect modal-trigger">Inicio Sesion</a></li>	
			</ul>
			<i class="zmdi zmdi-more-vert full btn-menu hide-on-med-and-up waves-effect"></i>
		</div>
	</nav>
	<div class="full ShoppingCart valign-wrapper">
		<div class="container valign">
			<div class="row valign-wrapper">
				<div class="col s12 m6 valign">
					<p class="center-align" style="color: #2F9FF3;">
						<i class="zmdi zmdi-shopping-cart zmdi-hc-5x"></i>		
					</p>
					<p class="center-align">
						<a class="btn-floating waves-effect waves-light red tooltipped" data-position="bottom" data-tooltip="Eliminar Compra" style="margin-right: 17px;"><i class="zmdi zmdi-delete"></i></a>
						<a class="btn-floating waves-effect waves-light green tooltipped" data-position="bottom" data-tooltip="Confirmar Compra"><i class="zmdi zmdi-money"></i></a>
					</p>
				</div>
				<div class="col s12 m6 valign">
					<table class="centered highlight responsive-table">
				        <thead>
				          	<tr>
								<th>Product</th>
								<th>Price</th>
				          	</tr>
				        </thead>
				        <tbody>
					        <tr>
					            <td>Product #1</td>
					            <td>$7</td>
					        </tr>
					        <tr>
					            <td>Product #2</td>
					            <td>$7</td>
					        </tr>
					        <tr>
					            <td>Product #3</td>
					            <td>$7</td>
					        </tr>
				        	<tr>
				        		<td>Total</td>
				        		<td>$21</td>
				        	</tr>
				        </tbody>
      				</table>	
				</div>
			</div>
		</div>
	</div>
	<header class="full header valign-wrapper">
		<div class="container valign">
			<div class="row">
				<div class="col s12 m6">
					<figure>
                                            <img src="assets/img/mac.jpg"  alt="Header" class="responsive-img center-box">
					</figure>
				</div>
				<div class="col s12 m6">
                                    <h5 class="tittles center-align">Technology Store</h5>
					<p class="flow-text">
						El Mac Pro es una estación de trabajo basada en la tecnología Intel Xeon lanzada 
                                                originalmente por Apple el 7 de agosto del 2006 en la WWDC, con el fin de reemplazar 
                                                al Power Mac G5, y en conjunto con el nuevo Xserve completar la transición de la compañía 
                                                hacia la plataforma Intel.
					</p>
				</div>
			</div>
		</div>
	</header>
	<section class="full new-prod">
		<h5 class="tittles center-align">Noticias</h5>
		<div class="container">
			<div class="row">
				<div class="col s12 m6 l4">
					<div class="card hoverable">
						<figure class="card-image">
                                                    <img src="assets/img/mac.jpg" height="250px" width="250px" >
							<figcaption class="card-title">Mac PRO</figcaption>
						</figure>
						<div class="card-content">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt.
							</p>
						</div>
						<div class="card-action">
							<a href="#!">This is a link</a>
						</div>
					</div>
				</div>	
				<div class="col s12 m6 l4">
					<div class="card hoverable">
						<figure class="card-image">
                                                    <img src="assets/img/iphone.jpg" height="250px" width="250px" >
							<figcaption class="card-title">Card Title</figcaption>
						</figure>
						<div class="card-content">
							<p>
								Phone con iOS 10EarPods con conector LightningAdaptador de Lightning a jack de 3.5 mm para audífonosCable de Lightning a USBAdaptador de corriente USBDocumentación
							</p>
						</div>
						<div class="card-action">
							<a href="#!">This is a link</a>
						</div>
					</div>
				</div>
				<div class="col s12 m6 l4">
					<div class="card hoverable">
						<figure class="card-image">
                                                    <img src="assets/img/ipod.jpg" height="250px" width="250px" >
							<figcaption class="card-title">Card Title</figcaption>
						</figure>
						<div class="card-content">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt.
							</p>
						</div>
						<div class="card-action">
							<a href="#!">This is a link</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="full promo">
		<div class="container">
			<div class="row">
				<div class="col s12">
					<h5 class="tittles center-align">Envios </h5>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita quos dolore modi officiis eius voluptas consequatur facilis, praesentium aspernatur! Ipsum qui ratione sequi veniam facilis quaerat sit porro consectetur itaque!
					</p>
				</div>
			    <div class="col s12 m4">
			    	<p class="center-align">
			        	<i class="zmdi zmdi-card-giftcard zmdi-hc-5x"></i>
			    	</p>
			        <p class="center-align flow-text">Regalo Online</p>
			        <p>
			        	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			        	tempor incididunt ut labore et dolore magna aliqua.
			        </p>
			    </div>
			    <div class="col s12 m4">
			    	<p class="center-align">
			        	<i class="zmdi zmdi-card zmdi-hc-5x"></i>
			    	</p>
			        <p class="center-align flow-text">Tarjeta</p>
			        <p>
			        	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			        	tempor incididunt ut labore et dolore magna aliqua.
			        </p>
			    </div>
			    <div class="col s12 m4">
			    	<p class="center-align">
			        	<i class="zmdi zmdi-money zmdi-hc-5x"></i>
			    	</p>
			        <p class="center-align flow-text">Efectivo</p>
			        <p>
			        	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			        	tempor incididunt ut labore et dolore magna aliqua.
			        </p>
			    </div>
		    </div>
		</div>	
	</section>
	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col s12 m6">
					<h5>Technology Store </h5>
					<p>
						Este es un sitio web diseñado por Andrés Muñoz para la compra de productos tecnologicos.
					</p>
				</div>
				<div class="col s12 m6">
					<h5 class="center-align">Contacto</h5>
					<ul class="center-align">
						<li><a href="#!"><i class="zmdi zmdi-facebook"></i> &nbsp; Facebook</a></li>
						<li><a href="#!"><i class="zmdi zmdi-twitter"></i> &nbsp; Twitter</a></li>
						<li><a href="#!"><i class="zmdi zmdi-google-plus"></i> &nbsp; Google+</a></li>
						
					</ul>	
				</div>
				<div class="col s12 tittles footer-copyright">Technology Store &copy; 2017</div>
			</div>
		</div>
	</footer>
</body>
</html>