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
				<section class="sectionMuestra">
					<div class="sectionMuestra__block sectionMuestra__block--1">
						<a href="#" class="entre__espaciosarticle">
							@foreach($datosC1 as $dato2)
							<div class="sectiontop">
								<div class="sectiontop__block sectiontop__block--1">
									<img src="../candidatos/{{$dato2->url_foto}}.jpg" class="img__responsive img__circle--1" >
								</div><div class="sectiontop__block sectiontop__block--2">
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
							@endforeach	
						</a>
					</div><div class="sectionMuestra__block sectionMuestra__block--2">
						<div class="aside__muestra down_50">
							<h5 class="aside__h4"><span class="aside__bottom">TOP CANDIDATOS</span></h4>
							<div class="asideContent">								
								@foreach($datos as $dato)								
								<div class="asideContent__block asideContent__block--1">

									<img src="../candidatos/{{$dato->url_foto}}.jpg" class="aside__img">
									
								</div><div class="asideContent__block asideContent__block--2">
									<h5 class="aside__h5">{{$dato->nombre}}</h5>
									<p class="aside__italic"> {{$dato->indicador}} % aceptación </p>
								</div>
								@endforeach	
							</div>
						</div>

						<div class="aside__muestra">
							<h5 class="aside__h4"><span class="aside__bottom">MEJORES PROPUESTAS</span></h4>
							<div class="asideContent">
								@foreach($datosC as $dato1)
								<div class="asideContent__block asideContent__block--1">
									<div class="aside__number">{{$dato1->id_propuesta}}</div>
								</div><div class="asideContent__block asideContent__block--2">
									<h5 class="aside__h5">{{$dato1->propuesta_nombre}}</h5>
									<p class="aside__italic">{{$dato1->candidato_nombre}}</p>
								</div>
								@endforeach
								
							</div>

						

						</div>

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