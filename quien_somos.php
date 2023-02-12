<?php 

session_start();

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>AFEL</title>
	<link rel="stylesheet" href="./css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="./css/estilos.css">

	<link rel="stylesheet" href="./js/bootstrap.js">
	<link rel="stylesheet" href="./css/normalize.css">
	<script src="https://kit.fontawesome.com/f9302dd666.js" crossorigin="anonymous"></script>
</head>
<body class="conocenos-body">
	<div class="content">
		<header>
			<nav class="navbar navbar-dark  fixed-top">
				<div class="container-fluid">

					<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
						<div class="offcanvas-header">
							<a class="navbar-brand" href="index.html"><img src="./img/foto-sis/Logo-afel.png" alt="" class="img-nav-active"></a>
							<button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
						</div>
						<div class="offcanvas-body">
							<ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
								<li class="mb-1">
									<a href="index.html">
										<button class="btn btn-toggle align-items-center rounded collapsed offcanvas-title">
											Inicio
										</button>
									</a>
									
								</li>
								<li class="mb-1">
									<a href="login.php">
										<button class="btn btn-toggle align-items-center rounded collapsed offcanvas-title">
											Iniciar Sesion
										</button>
									</a>
									
								</li>


								<li class="mb-1">
									<a href="quien_somos.php"><button class="btn btn-toggle align-items-center rounded collapsed offcanvas-title" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
										Quien Somos
									</button></a>
									
								</li>


							</ul>

						</div>
					</div>
				</div>

			</nav>
		</header>
		<main>
			<div class="main">
     
      
    <div class="container marketing">
      <div class="conocenos">
       <h2><b>CONÓCENOS</b></h2>
       
       <ul class="conocenos-ul">
         <h2 class="h2-titulo"><b>NUESTRA MISIÓN</b></h2>
         <ol class="conocenos-ol">
          Lorem ipsum dolor sit amet consectetur adipisicing, elit. Magnam molestias quaerat repellendus repellat nulla temporibus adipisci esse, sed mollitia, eaque nobis nihil minima, molestiae impedit error eum, voluptatem dolorem tempore? <br>

        </ol>
        <h2 class="h2-titulo"><b>VISIÓN</b></h2>
        <ol class="conocenos-ol">
         Lorem ipsum, dolor sit, amet consectetur adipisicing elit. Quia, error magni explicabo id natus vero voluptatibus cupiditate iusto hic placeat libero distinctio labore aliquam quasi architecto sequi aut! Et, maiores? <br>

        </ol>
        <h2 class="h2-titulo"><b>VALORES</b></h2>
        <p><ol class="conocenos-ol">
         Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea quae voluptate, distinctio quaerat molestiae deserunt minus iure minima, et corporis quos aliquid! Autem dolorum laboriosam maiores, omnis possimus est, necessitatibus. <br>
          <li class="conocenos-ol-li">Empatía</li>
          <li class="conocenos-ol-li">Honestidad</li>
          <li class="conocenos-ol-li">Equidad</li>
          <li class="conocenos-ol-li">Sinceridad</li>
          <li class="conocenos-ol-li">Lealtad</li>
          <li class="conocenos-ol-li">Compromiso</li>

        </ol>
      </p>
    </ul>
  </div>
  <div class="row">
    <div class="col-lg-4">
      <img src="./img/foto-sis/logo-afel.png" svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/>

      <h2 class="fw-normal">LIC. RAUL ALVAREZ </h2>
      <p class="title">PRESIDENTE</p>
      <p>
        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#fer" aria-expanded="false" aria-controls="collapseWidthExample">
          CONOCE MAS SOBRE
        </button>
      </p>
      <div tyle="min-height: 120px;">
        <div class="collapse collapse-horizontal" id="fer">
          <div class="card card-body" style="width: 300px;">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <img src="./img/foto-sis/logo-afel.png" svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/></svg>

      <h2 class="fw-normal">RAFAEL RAMOS</h2>
      <p class="title">SECRETARIO GENERAL <br></p>
      <p>
        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#marcos" aria-expanded="false" aria-controls="collapseWidthExample">
          CONOCE MAS SOBRE
        </button>
      </p>
      <div style="min-height: 120px;">
        <div class="collapse collapse-horizontal" id="marcos">
          <div class="card card-body" style="width: 300px;">
            Lorem ipsum dolor sit, amet consectetur, adipisicing elit. Ex harum magni quae ut culpa, ea, voluptatum optio praesentium, quibusdam deleniti autem eaque vero, quam vel facilis maxime est quo non!
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
     <img src="./img/foto-sis/logo-afel.png" svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/></svg>

     <h2 class="fw-normal">GABRIEL LARA</h2>
     <p class="title">MENTOR 
       FOREX E INVERSIÓN EN ACCIONES
     </p>
     <p>
      <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#gabs" aria-expanded="false" aria-controls="collapseWidthExample">
        CONOCE MAS SOBRE
      </button>
    </p>
    <div style="min-height: 120px;">
      <div class="collapse collapse-horizontal" id="gabs">
        <div class="card card-body" style="width: 300px;">
          Otro de nuestros mentores quien ha aprendido bastante de manera autodidacta, al igual que nuestros otros mentores, tomó clases privadas con el CEO, también tomo un curso en una escuela Zacatecana, lleva varios años desarrollando sus habilidades en los mercados financieros, por lo que su experiencia como inversor lo respalda, nos deleitará con su gentileza y amabilidad en las aulas de Invest Capital, quien tengan por seguro, el aporte será invaluable.
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-4">
      <img src="./img/foto-sis/logo-afel.png" svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/></svg>

      <h2 class="fw-normal">JOSSUE LEGASPI</h2>
      <p class="title">
       MENTOR 
       INVERSION EN ACCIONES
     </p>
     <p>
      <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#legas" aria-expanded="false" aria-controls="collapseWidthExample">
        CONOCE MAS SOBRE
      </button>
    </p>
    <div style="min-height: 120px;">
      <div class="collapse collapse-horizontal" id="legas">
        <div class="card card-body" style="width: 300px;">
          Es un inversor de Capitales, uno de nuestros inversores bilingües, tiene años dominando los mercados bursátiles, adquirió parte de su conocimiento en una academia zacatecana, la otra parte la aprendió en los mercados financieros, ha invertido grandes capitales en acciones, su experiencia le ha permitido sacar gran provecho a los movimientos ocasionados por la pandemia del COVID 19, su conocimiento y experiencia es transmitido con una calidez y templanza en las aulas de Invest Capital, además de ello le gusta incursionar en todas las áreas de las inversiones, invirtiendo a su vez en criptomonedas.
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4">
    <img src="./img/foto-sis/logo-afel.png" svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/></svg>

    <h2 class="fw-normal">ROGER ROMERO</h2>
    <p class="title">MENTOR FOREX, INDICES Y PROGRAMADOR
    </p>
    <p>
      <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#rere" aria-expanded="false" aria-controls="collapseWidthExample">
        CONOCE MAS SOBRE
      </button>
    </p>
    <div style="min-height: 120px;">
      <div class="collapse collapse-horizontal" id="rere">
        <div class="card card-body" style="width: 300px;">
          NI PEDO
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4">
   <img src="./img/foto-sis/logo-afel.png" svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/></svg>

   <h2 class="fw-normal">DANIEL CORDOVA</h2>
   <p class="title">MENTOR INVERSIÓN
     EN CRIPTOMONEDAS, FOREX Y ACCIONES
   </p>
   <p>
    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#dano" aria-expanded="false" aria-controls="collapseWidthExample">
      CONOCE MAS SOBRE
    </button>
  </p>
  <div style="min-height: 120px;">
    <div class="collapse collapse-horizontal" id="dano">
      <div class="card card-body" style="width: 300px;">
        Uno de nuestros principales inversores en criptomonedas, con una preparación autodidacta debido a los escases de cursos en esta industria, cuenta con un largo recorrido, ha invertido en múltiples criptomonedas, él nos estará compartiendo su conocimiento en las aulas, a través de su experiencia, además de esto, su conocimiento adquirido en cuestión de acciones fue en parte por una empresa zacatecana, y a su vez experimentando en los mercados financieros, por otra parte, en el área de Forex, tiene un largo recorrido, años de práctica y preparación, pasando por las enseñanzas y tomando clases privadas de nuestro CEO.
      </div>
    </div>
  </div>
</div>
<div class="col-lg-4">
 <img src="./img/foto-sis/logo-afel.png" svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/></svg>

 <h2 class="fw-normal">ÁNGEL DE AVILA</h2>
 <p class="title">MENTOR 
  INVERSION EN ACCIONES Y TRADING DE FUTUROS.
</p>
<p>
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#angelito" aria-expanded="false" aria-controls="collapseWidthExample">
    CONOCE MAS SOBRE
  </button>
</p>
<div style="min-height: 120px;">
  <div class="collapse collapse-horizontal" id="angelito">
    <div class="card card-body" style="width: 300px;">
      Es otro de nuestros mentores, quien empezó ya hace tiempo su trayectoria como inversionista, su carrera de estudios y preparación iniciaron de manera autodidacta, aprendiendo a base de errores y lecciones adquiridas en el camino, después de eso se inscribió en una escuela de inversiones que lo ayudó en parte de su formación, al igual que todos nuestros otros mentores, su carrera y aprendizaje lo ha desempeñado en los mercados bursátiles dándole la capacidad que Invest Capital busca, para brindar conocimientos reales a sus alumnos.
    </div>
  </div>
</div>
</div>
</div>




    <!--<hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">FOTO 4 <span class="text-muted">DESCRIPCION 4</span></h2>
        <p class="lead"> CONTENIDO 4</p>
      </div>
      <div class="col-md-5">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading fw-normal lh-1">FOTO 5<span class="text-muted">DESCRIPCION 5</span></h2>
        <p class="lead">CONTENIDO 5</p>
      </div>
      <div class="col-md-5 order-md-1">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">FOTO 6<span class="text-muted">DESCRIPCION 6</span></h2>
        <p class="lead">CONTENIDO 6</p>
      </div>
      <div class="col-md-5">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

      </div>
    </div>

    <hr class="featurette-divider">-->

    

  </div>



  
</div>


</div>
	</main>
	<footer class="footer">

	</footer>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script type="text/javascript" src="./js/bootstrap.min.js"></script>
</body>
</html>