<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/css.css">
	<link rel="stylesheet" href="css/animate.css">

	<script src="js/Chart.js"></script>
	<script src="js/wow.js"></script>
	<link href='https://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	{!! Html::style('css/css.css') !!}
	{!! Html::style('css/animate.css') !!}
	{!! Html::style('css/normalize.css') !!}
	{!! Html::script('js/Chart.js') !!}
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


<div class="maestro__full maestro__grisb">
	<div class="maestro__max">
		<div class="maestros__espacio">
			<section class="candidato">

				<article class="candidato__block candidato__block--1">
					<img src="../candidatos/{{$dato2[0]->url_foto}}.jpg" class="img__responsive">
				</article><article class="candidato__block candidato__block--2">
					<div class="down_20">
						<canvas id="countries" width="150px" height="150px"></canvas>
					</div>
					<h3 class="candidato__h3">{{$dato2[0]->indicador}}% de aceptación</h3>
				</article><article class="candidato__block candidato__block--3">
					<div class="datos">
						<label class="datos__block datos__block--1">
							NOMBRES :
						</label><div class="datos__block datos__block--2">
							{{$dato2[0]->nombre}}
						</div>						
					</div>

					<div class="datos">
						<label class="datos__block datos__block--1">
							EDAD :
						</label><div class="datos__block datos__block--2">
							{{$dato2[0]->edad}}
						</div>						
					</div>

					<div class="datos">
						<label class="datos__block datos__block--1">
							OCUPACIÓN :
						</label><div class="datos__block datos__block--2">
							{{$dato2[0]->ocupacion}}
						</div>						
					</div>

					<div class="datos">
						<label class="datos__block datos__block--1">
							GOBERNANDO :
						</label><div class="datos__block datos__block--2">
							{{$dato2[0]->numero_gobiernos}} veces.

						</div>						
					</div>
					<div class="datos">
						<label class="datos__block datos__block--1">
							DESCRICIÓN :
						</label><div class="datos__block datos__block--2">
							{{$dato2[0]->descripcion}}
						</div>						
					</div>
				</article>
				
			</section>
		</div>
	</div>
</div>

	<!-- SECCION DOS DE INICIO -->
	<div class="maestro__ful">
		<div class="maestro__max">
			<div class="maestros__espacio">
					<section class="section__title">
						<h2 class="title__h2">PROPUESTAS 2016</h2>
					</section>
				<section class="sectiondos">
					<div class="sectiondos__block sectiondos__block--1">
						@foreach($datosC1 as $dato2)<a href="/candidato/{{$dato2->id}}" class="entre__espaciosarticle sectiondos__block__block">							
							<div class="">
								<img src="../categorias/{{$dato2->url_propuesta}}.jpg" class="img__responsive">
							</div>
							<div class="sectiontitle">
								<h2>{{$dato2->propuesta_nombre}}</h2>
							</div>
							<div class="sectioncontent">
								<p>{{$dato2->descripcion}}</p>
							</div>
							<div class="sectionbottom">
								<div class="sectionbottom__block sectionbottom__block--1">
									<i class="material-icons material__corazon">&#xE87E;</i><span>{{$dato2->votos_favor}}</span>
								</div><div class="sectionbottom__block sectionbottom__block--2">
									<span>{{$dato2->numero_visitas}} visitas</span>
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

<script type="text/javascript">
	var pieData = [
		{
			 value : 10,
	                color : "#02b875",
	                label : 'Sleep',
	                labelColor : 'white',
	                labelFontSize : '16'
		},
		{
			 value : 90,
	                color : "#f2f3f4",
	                label : 'Sleep',
	                labelColor : 'white',
	                labelFontSize : '16'
		}
	];
	var pieOptions = {
/*	segmentShowStroke : false,*/
  animationSteps: 100,
 		animationEasing: 'easeInOutQuart',
 		 labelAlign: 'center'

}


	window.onload = function(){
	
		var countries= document.getElementById("countries").getContext("2d");
		new Chart(countries).Doughnut(pieData, pieOptions);
	
	}
	
</script>
</body>
</html>