<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/css.css">
	<link rel="stylesheet" href="css/animate.css">
	{!! Html::style('css/css.css') !!}
	{!! Html::style('css/animate.css') !!}
	{!! Html::style('css/normalize.css') !!}
	

	<script src="js/wow.js"></script>

	<link href='https://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
</head>
<body>
	<!-- INICIO MENU -->
	<div class="maestro__full">
		<div class="maestros__espaciomenu">
			<div class="maestro__max">			
				<section class="menu">
	
					<article class="menu__block menu__block--1">
						<img src="../img/mano.svg" class="img__logo"><span class="frase__logo">
							El Promete
						</span>
					</article><article class="menu__block menu__block--2">
						<nav class="menunav">
							<ul class="menunav__block menunav__block--1">
								<li class="menu__li"><a href="#" class="menu__a">
									INICIO
								</a></li>
								<li class="menu__li"><a href="#" class="menu__a">
									CANDIDATOS
								</a>
									
								</li>
								
							</ul><ul class="menunav__block menunav__block--2">
								<div class="menu__li input__group input__group--pd">
									<input type="text" 
										class="menu__search "
										placeholder="Encuentra Propuestas">
									
								</div>
								<li class="menu__li"><a href="#" class="menu__a menu__btn">
									Ver Propuestas
								</a></li>
								<li class="menu__li"><a href="#" class="menu__a menu__btn btn__primary">
									Suscribete
								</a></li>
							</ul>
						</nav>
					</article>
				</section>
			</div>
		</div>
	</div><!-- FIN DE MENU -->
	<!-- BANNER -->
	<div class="maestro__full maestro__oscuro">
		<div class="maestro__max">
			<div class="">
				<!-- <img src="img/banner.png" class="img__responsive"> -->
			</div> 
		</div>
	</div><!-- FIN DE BANNER -->
	<!-- SECCION DOS DE INICIO -->
	<div class="maestro__ful">
		<div class="maestro__max">
			<div class="maestros__espacio">
				<section class="section__title">
					<h2 class="title__h2">PROPUESTAS 2016</h2>
				</section>
				<section class="sectiondos">
				
					<div class="sectiondos__block sectiondos__block--1">
							@foreach($datosC1 as $dato2)<a href="detalle/{{$dato2->id_propuesta}}" class="entre__espaciosarticle sectiondos__block__block">							
							<div class="sectionautor">
								<div class="sectionautor__block sectionautor__block--1">
									<img src="../candidatos/{{$dato2->foto_candidato}}.jpg" class="img__responsive img__circle" >
								</div><div class="sectionautor__block sectionautor__block--2">
									<p class="letra__autor down_5">{{$dato2->candidato_nombre}}</p>
									<span class="letra__span">{{$dato2->time}}</span>
								</div>
							</div>
							<div class="">
								<img src="../categorias/{{$dato2->url_propuesta}}.jpg" class="img__responsive">
							</div>
							<div class="sectiontitle">
								<h2>{{$dato2->propuesta_nombre}}</h2>
							</div>
							<div class="sectioncontent">
								<p>{{$dato2->descripcion}}</p>
							</div>
							<div class="sectionred">
								<span class="letra__span">Leer más</span>
							</div>
							<div class="sectionbottom">
								<div class="sectionbottom__block sectionbottom__block--1">
									<i class="material-icons material__corazon">&#xE87E;</i><span>{{$dato2->votos_favor}}</span>
								</div><div class="sectionbottom__block sectionbottom__block--2">
									<span>2 publicaciones</span>
								</div>
							</div>						
						</a>@endforeach	
					</div>
				</section>
			</div>
		</div>
	</div><!-- FIN DE SECCION DOS -->
	<!-- SECCION FEEDBACK -->
	<div class="maestro__full maestro__gris">
		<div class="maestro__max">
			<div class="maestros__espacio">
				<section class="feedback">
					<article class="feedback__block">
						
						<div class="feedback__coment down_40">
							&#8212; Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor
						</div>
						<div class="feedback__foto down_10">

							<img src="../img/manuel.jpg" class="feedback__circle">
						</div>
						<div class="feedback__nombre">
							<i class="material-icons icono__feedback">&#xE163;</i>Alvaro Manuel
						</div>

					</article><article class="feedback__block">
						<div class="feedback__coment down_40">
							&#8212; Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor
						</div>
						<div class="feedback__foto down_10">
							<img src="../img/christian.jpg" class="feedback__circle">
						</div>
						<div class="feedback__nombre">
							<i class="material-icons icono__feedback">&#xE163;</i>Christian Benavides
						</div>
					</article><article class="feedback__block">
						<div class="feedback__coment down_40">
							&#8212; Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor 
						</div>
						<div class="feedback__foto down_10">
							<img src="../img/katy.jpg" class="feedback__circle">
						</div>
						<div class="feedback__nombre">
							<i class="material-icons icono__feedback">&#xE163;</i>Katy Quesquen
						</div>
					</article><article class="feedback__block">
						<div class="feedback__coment down_40">
							&#8212; Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor 
						</div>
						<div class="feedback__foto down_10">
							<img src="../img/jerson.jpg" class="feedback__circle">
						</div>
						<div class="feedback__nombre">
							<i class="material-icons icono__feedback">&#xE163;</i>Jerson Alvitez
						</div>
					</article>
				</section>
			</div>
		</div>
	</div><!-- Fin de seccion feedback -->
<!-- INICIO FOOTER -->
<div class="maestro__full">
	<div class="maestro__max">
		<div class="maestros__espacio">
			<section class="footer">
				<h4 class="footer__h4 down_30">Informateperu es una iniciativa para dar opinión y seguimientos a las propuesta electorales</h4>
				<p>Todos los derechos reservados @copyright 2015 </p>
			</section>
		</div>
	</div>
</div><!-- fin footer -->
</body>
</html>