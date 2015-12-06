
<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/css.css">
    <link rel="stylesheet" href="css/animate.css">

    <script src="js/wow.js"></script>
    <script src="js/Chart.js"></script>

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
                        <img src="img/mano.svg" class="img__logo"><span class="frase__logo">
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
            <div class="landinpage">
                <!-- <img src="img/banner.png" class="img__responsive"> -->
               <div class="landinpage__block">
                    <img src="img/cesar.jpg" class="img__responsive img__landin">
                    <div class="landin__fondoab"></div>
                    <div class="landin__fraseab">
                        <h5 >"EL 6% DEL PBI AL SECTOR EDUCATIVO"</h5>
                        <a href="candidato/3" class="landin__enlace">VER PROPUESTAS</a>
                        <div class="landin__chart">
                            <canvas id="acunia"  class="grafico" width="40px" height="40px"></canvas>
                            <span>10% de las encuestas</span>
                        </div>
                    </div>
                </div><div class="landinpage__block">
                    <img src="img/ppk2.jpg" class="img__responsive img__landin">
                    <div class="landin__fondoab"></div>
                    <div class="landin__fraseab">
                        <h5>"TODO EL PERÚ REQUIERE DE UNA REFORMA EDUCATIVA"</h5>
                        <a href="candidato/2" class="landin__enlace">VER PROPUESTAS</a>
                        <div class="landin__chart">
                            <canvas id="ppk"  class="grafico" width="40px" height="40px"></canvas>
                            <span>16% en las encuestas</span>
                        </div>
                    </div>
                </div><div class="landinpage__block">
                    <img src="img/alangarcia.jpg" class="img__responsive img__landin">
                    <div class="landin__fondoab"></div>
                    <div class="landin__fraseab">
                        <h5>"REDUCIR LA POBREZA A MENOS DEL 10%"</h5>
                        <a href="candidato/4" class="landin__enlace">VER PROPUESTAS</a>
                        <div class="landin__chart">
                            <canvas id="alan"  class="grafico" width="40px" height="40px"></canvas>
                            <span>9% en las encuestas</span>
                        </div>
                    </div>
                </div><div class="landinpage__block">
                    <img src="img/keiko2.jpg" class="img__responsive img__landin">
                    <div class="landin__fondoab"></div>
                    <div class="landin__fraseab">
                        <h5>"APOYO A LAS MYPES CON UN SISTEMA DE TRIBUTACIÓN Y UN IGV JUSTOS"</h5>
                        <a href="candidato/1" class="landin__enlace">VER PROPUESTAS</a>
                        <div class="landin__chart">
                            <canvas id="keiko"  class="grafico" width="40px" height="40px"></canvas>
                            <span>34% en las encuestas</span>
                        </div>
                    </div>
                </div>
           
            </div> 
        </div><!-- FIN DE BANNER -->
    <!-- SECCION DOS DE INICIO -->
    <div class="maestro__ful">
        <div class="maestro__max">
            <div class="maestros__espacio">
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
                                <span class="letra__span">Read more</span>
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

                            <img src="img/manuel.jpg" class="feedback__circle">
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
                            <img src="img/christian.jpg" class="feedback__circle">
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
                            <img src="img/katy.jpg" class="feedback__circle">
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
                            <img src="img/jerson.jpg" class="feedback__circle">
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
    var pieAcunia = [
        {
             value : 10,
                    color : "#C76B00",
                    label : 'Sleep',
                    labelColor : 'white',
                    labelFontSize : '16'
        },
        {
             value : 90,
                    color : "#fff",
                    label : 'Sleep',
                    labelColor : 'white',
                    labelFontSize : '16'
        }
    ];
        var piePpk = [
        {
             value : 10,
                    color : "#C76B00",
                    label : 'Sleep',
                    labelColor : 'white',
                    labelFontSize : '16'
        },
        {
             value : 90,
                    color : "#fff",
                    label : 'Sleep',
                    labelColor : 'white',
                    labelFontSize : '16'
        }
    ];
        var pieAlan = [
        {
             value : 10,
                    color : "#C76B00",
                    label : 'Sleep',
                    labelColor : 'white',
                    labelFontSize : '16'
        },
        {
             value : 90,
                    color : "#fff",
                    label : 'Sleep',
                    labelColor : 'white',
                    labelFontSize : '16'
        }
    ];
        var pieKeiko = [
        {
             value : 10,
                    color : "#C76B00",
                    label : 'Sleep',
                    labelColor : 'white',
                    labelFontSize : '16'
        },
        {
             value : 90,
                    color : "#fff",
                    label : 'Sleep',
                    labelColor : 'white',
                    labelFontSize : '16'
        }
    ];
    var pieOptions = {
/*  segmentShowStroke : false,*/
        animationSteps: 100,
        animationEasing: 'easeInOutQuart',
        labelAlign: 'center'

}


    window.onload = function(){
    
        var chart1= document.getElementById("acunia").getContext("2d");
        new Chart(chart1).Doughnut(pieAcunia, pieOptions);

        var chart2= document.getElementById("ppk").getContext("2d");
        new Chart(chart2).Doughnut(piePpk, pieOptions);

        var chart3= document.getElementById("alan").getContext("2d");
        new Chart(chart3).Doughnut(pieAlan, pieOptions);

        var chart4= document.getElementById("keiko").getContext("2d");
        new Chart(chart4).Doughnut(pieKeiko, pieOptions);
    
    }

</script>
</body>
</html>