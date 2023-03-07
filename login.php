<!DOCTYPE html>
<html lang="es">
<head>


	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>AFEL</title>
	<link rel="shortcut icon" href="./img/foto-sis/logo-afel.png" type="image/x-icon">
	<link rel="stylesheet" href="./css/estilos1.css">
	<link rel="stylesheet" href="./css/normalize.css">



</head>
<body class="b-login">

<nav class="menu">
        <section class="menu__container">
           <span class="span__logo"><img src="./img/foto-sis/logo-afel.png" class="logo" alt=""></span>

            <ul class="menu__links">
                <li class="menu__item">
                    <a href="index.html" class="menu__link">Inicio</a>
                </li>
    
               <!--  <li class="menu__item menu__item--show">
                    <a href="#" class="menu__link">About <img src="./img/foto-sis/flecha.svg" class="menu__arrow"></a>
    
                    <ul class="menu__nesting">
                        <li class="menu__inside">
                            <a href="#" class="menu__link menu__link--inside">About 1</a>
                        </li>
                        <li class="menu__inside">
                            <a href="#" class="menu__link menu__link--inside">About 2</a>
                        </li>
                        <li class="menu__inside">
                            <a href="#" class="menu__link menu__link--inside">About 3</a>
                        </li>
                    </ul>
                </li> -->
    
               
    
            </ul>

            <div class="menu__hamburguer">
                <img src="./img/foto-sis/menus.svg" class="menu__img">
            </div>
        </section>

      
    </nav>



	<section class="left-form">

	</section>

	<section class="right-form">
		<form method="POST" action="./controlador/controlador-login.php" >

			<h2 class="titulo">
				ASOCIACION DE FUTBOL DEL ESTADO LARA
			</h2>
			<h2>Acceso Login</h2>

			<label for="usuario">Usuario</label>
			<input type="text" class="form-control" id="inputAddress" placeholder="Nombre de Usuario" name="user" required="">

			<label for="contraseña">Contraseña</label>
			<input type="password" class="form-control" id="inputAddress" placeholder="Contraseña" name="pass" required="">

	
			<input type="submit" name="btn-enviar" value="Iniciar Sesion">

		</form>
	</section>


<script  src="./js/app.js"></script>

</body>
</html>