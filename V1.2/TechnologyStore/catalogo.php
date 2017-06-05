<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Catalogo</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
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
	<section>
		<div class="container">
			<div class="row">
				<h4 class="center-align tittles">Productos</h4>
				<div class="col s12 m6 l4">
					<div class="card">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Card Title<i class="zmdi zmdi-more-vert right"></i></span>
							<p><a href="#">This is a link</a></p>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Card Title<i class="zmdi zmdi-close right"></i></span>
							<p>Here is some more information about this product that is only revealed once clicked on.</p>
						</div>
					</div>
				</div>
				<div class="col s12 m6 l4">
					<div class="card">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Card Title<i class="zmdi zmdi-more-vert right"></i></span>
							<p><a href="#">This is a link</a></p>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Card Title<i class="zmdi zmdi-close right"></i></span>
							<p>Here is some more information about this product that is only revealed once clicked on.</p>
						</div>
					</div>
				</div>
				<div class="col s12 m6 l4">
					<div class="card">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Card Title<i class="zmdi zmdi-more-vert right"></i></span>
							<p><a href="#">This is a link</a></p>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Card Title<i class="zmdi zmdi-close right"></i></span>
							<p>Here is some more information about this product that is only revealed once clicked on.</p>
						</div>
					</div>
				</div>
				<div class="col s12 m6 l4">
					<div class="card">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Card Title<i class="zmdi zmdi-more-vert right"></i></span>
							<p><a href="#">This is a link</a></p>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Card Title<i class="zmdi zmdi-close right"></i></span>
							<p>Here is some more information about this product that is only revealed once clicked on.</p>
						</div>
					</div>
				</div>
				<div class="col s12 m6 l4">
					<div class="card">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Card Title<i class="zmdi zmdi-more-vert right"></i></span>
							<p><a href="#">This is a link</a></p>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Card Title<i class="zmdi zmdi-close right"></i></span>
							<p>Here is some more information about this product that is only revealed once clicked on.</p>
						</div>
					</div>
				</div>
				<div class="col s12 m6 l4">
					<div class="card">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Card Title<i class="zmdi zmdi-more-vert right"></i></span>
							<p><a href="#">This is a link</a></p>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Card Title<i class="zmdi zmdi-close right"></i></span>
							<p>Here is some more information about this product that is only revealed once clicked on.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col s12 m6">
					<h5>Technology Store</h5>
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