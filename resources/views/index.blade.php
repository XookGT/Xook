@extends('layouts.master') @section('css')
<link rel="stylesheet" type="text/css" href="css/personalizadoPageWeb.css"> @endsection @section('contenido')

<div id="bg"></div>
<div id="page">
    <!-- INICIO top navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="nav-btn btn-dark btn-lg accordion-toggle pull-left" title="Follow Us" role="tab" id="social-collapse" data-toggle="collapse" data-parent="#accordion" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"></a>
                <a id="menu-toggle" href="#" class="nav-btn btn-dark btn-lg toggle">
                    <i class="fa fa-bars" style="color:#fff;"></i>
                </a>
                <a id="to-top" class="btn btn-lg btn-inverse" href="#top">
                    <span class="sr-only">Toggle to Top Navigation</span>
                    <i class="fa fa-chevron-up"></i>
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse js-navbar-collapse">
                <ul class="nav navbar-nav navbar-left">
                    <a class="navbar-brand" href="#" style="font-size: 20px;font-weight: bold;">&nbsp;&nbsp;&nbsp;X O O K</a>
                    <li class="dropdown mega-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ trans('index.Tutores') }}<i class="fa fa-graduation-cap" aria-hidden="true"></i> <span class="caret"></span></a>
                        <ul class="dropdown-menu mega-dropdown-menu" style="background: rgba(255, 255, 255,.9);">
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">{{ trans('index.LosMejoresTutores') }}</li>
                                    <div id="menCollection" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="item active">
                                                <a href="#"><img src="http://mhalabs.org/wp-content/uploads/upme/1451456913_brodie.jpg" class="img-responsive center-block" alt="Tutor 1" width="150" height="150"></a>
                                                <h6 style="color:black;">Nombre del profesional</h6>
                                                <h6 style="color:black;"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></h6>
                                                <div align="right">
                                                    <button class="btn btn-primary" type="button"><span class="fa fa-phone"></span>{{ trans('index.Contactar') }}</button>
                                                </div>
                                            </div>
                                            <!-- End Item -->
                                            <div class="item">
                                                <a href="#"><img src="http://www.american.edu/uploads/profiles/large/Jane_Hall_profile.jpg" class="img-responsive center-block" alt="Tutor 2" width="150" height="150"></a>
                                                <h6 style="color:black;">Nombre del profesional</h6>
                                                <h4 style="color:black;"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></small></h4>
                                                <div align="right">
                                                    <button class="btn btn-primary" type="button"><span class="fa fa-phone"></span>{{ trans('index.Contactar') }}</button>
                                                </div>
                                            </div>
                                            <!-- End Item -->
                                            <div class="item">
                                                <a href="#"><img src="https://organicthemes.com/demo/profile/files/2012/12/profile_img.png" class="img-responsive center-block" alt="Tutor 3" width="150" height="150"></a>
                                                <h6 style="color:black;">Nombre del profesional</h6>
                                                <h6 style="color:black;"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></h6>
                                                <div align="right">
                                                    <button class="btn btn-primary" type="button"><span class="fa fa-phone"></span>{{ trans('index.Contactar') }}</button>
                                                </div>
                                            </div>
                                            <!-- End Item -->
                                        </div>
                                        <!-- End Carousel Inner -->
                                        <!-- Controls -->
                                        <a class="left carousel-control" href="#menCollection" role="button" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                            <span class="sr-only">{{ trans('index.Anterior') }}</span>
                                        </a>
                                        <a class="right carousel-control" href="#menCollection" role="button" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                            <span class="sr-only">{{ trans('index.Siguiente') }}</span>
                                        </a>
                                    </div>
                                    <!-- /.carousel -->
                                    <li class="divider"></li>
                                    <li><a href="#">{{ trans('index.VerTodosTutores') }}<span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">{{ trans('index.Categoria') }}</li>
                                    <li><a href="#">Matematicas</a></li>
                                    <li><a href="#">Fisica</a></li>
                                    <li><a href="#">Estadistica</a></li>
                                    <li><a href="#">Quimica</a></li>
                                    <li><a href="#">{{ trans('index.VerTodasCategorias') }}<span class="glyphicon glyphicon-chevron-right pull-right"></span></a>
                                        <li class="divider"></li>
                                        <li class="dropdown-header">Otras Opciones</li>
                                        <li><a href="#">as</a></li>
                                        <li><a href="#">asdf</a></li>
                                </ul>
                                </li>
                                <!--<li class="col-sm-3">
                                    <ul>
                                        <li class="dropdown-header">Escolaridad</li>
                                        <li><a href="#">Universitaria</a></li>
                                        <li><a href="#">Diversificado</a></li>
                                        <li><a href="#">Secundaria</a></li>
                                        <li><a href="#">Primaria</a></li>
                                    </ul>
                                </li>
                                <li class="col-sm-3">
                                    <ul>
                                        <li class="dropdown-header">Mas Opciones</li>
                                        <li><a href="#">asdf</a></li>
                                        <li><a href="#">asdf</a></li>
                                        <li><a href="#">Casdf</a></li>
                                        <li><a href="#">Slasdf</a></li>
                                    </ul>
                                </li>-->
                        </ul>
                        </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ trans('index.Cuenta') }}<span class="caret"></span> &nbsp &nbsp &nbsp</a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/home') }}">{{ trans('index.IniciarSesion') }}</a></li>
                            <li><a href="#">{{ trans('index.SalirSesion') }}</a></li>
                            <li class="divider"></li>
                            <li><a href="#" data-toggle="modal" data-target="#myModal">{{ trans('index.Ajustes') }}</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.nav-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <!-- INICIO Side Bar -->
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-danger pull-right hidden-md hidden-lg toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="#top"><strong>{{ trans('index.BienvenidaBar') }}</strong></a>
            </li>
            <li>
                <a href="#to-top">{{ trans('index.InicioBar') }}</a>
            </li>
            <li>
                <a href="InicioSesion.html" >{{ trans('index.IniciarSesion') }}</a>
            </li>
            <li>
                <a href="#howWorkIt">{{ trans('index.ComoFunciona') }}</a>
            </li>
            <li>
                <a href="#trendingClass">Portafolio</a>
            </li>
            <li>
                <a href="#contactUs" >{{ trans('index.Contactenos') }}</a>
            </li>
        </ul>
    </nav>
    <!-- INICIO acordion social media -->
    <aside id="accordion" class="social text-vertical-center">
        <div class="accordion-social">
            <ul class="panel-collapse collapse in nav nav-stacked" role="tabpanel" aria-labelledby="social-collapse" id="collapseOne">
                <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-lg fa-facebook"></i></a></li>
                <li><a href="https://twitter.com/" target="_blank"><i class="fa fa-lg fa-twitter"></i></a></li>
                <li><a href="https://www.plus.google.com/" target="_blank"><i class="fa fa-lg fa-google-plus"></i></a></li>
            </ul>
        </div>
    </aside>

    <!-- texto e Imagen central -->
    <div class="bannerCentral">
        <div class="hijo" align="center">
            <img src="imgVistas/logo_Xook.png" class="img-responsive" alt="Cinque Terre"><br>
            <div style="width: 100%; background:rgba(81, 116, 229,.5);">
                <span value="" class="maquinaInput" style="background:transparent;">WE</span>
                <input type="text" class="maquinaInput" name="typed" id="typed" value="">
            </div>
        </div>
    </div>
    <!--- texto e Imagen cental fin -->
</div>

<!--- MODAL -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">{{ trans('index.Ajustes') }}</h4>
            </div>
            <div class="modal-body">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ trans('index.CambioLang') }}</div>
                    <div class="panel-body">
                        <div class="list-group">
                            <a href="{{ url('lang', ['en']) }}" class="list-group-item" data-toggle="tooltip" title="{{ trans('index.Ingles') }}">
                                <h3>
                                    <span class="label label-default"><span class="flag-icon flag-icon-us"></span> EN</span>
                                </h3>
                            </a>
                            <a href="{{ url('lang', ['es']) }}" class="list-group-item" data-toggle="tooltip" title="{{ trans('index.Espanol') }}!">
                                <h3>
                                    <span class="label label-default"><span class="flag-icon flag-icon-es"></span> ES</span>
                                </h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>



<div id="contenido">
    <!-- info que dicen los demas -->
    <div class='row'>
        <div class='col-sm-12' style="background:black; width:100%">
            <div class="carousel slide media-carousel" id="media">
                <div class="carousel-inner">
                    <div class="item  active">
                        <div class="row">
                            <div class="col-md-4">
                                <a class="thumbnail" href="#"><img src="http://4.bp.blogspot.com/_SRAoky8zpcA/S__d-WqFtQI/AAAAAAAAA9Y/VlpaPUmJ9AY/s200/noti7.png" class="img-responsive"></a>
                            </div>
                            <div class="col-md-4">
                                <a class="thumbnail" href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/1/1b/Guatevisionlogo.JPG" class="img-responsive"></a>
                            </div>
                            <div class="col-md-4">
                                <a class="thumbnail" href="#"><img src="http://d3ustg7s7bf7i9.cloudfront.net/App_Themes/PL/assets_2017/images/prensa-libre.png" class="img-responsive"></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-md-4">
                                <a class="thumbnail" href="#"><img src="http://zuryrios.com/new/wp-content/uploads/2011/03/publinews.jpg" class="img-responsive"></a>
                            </div>
                            <div class="col-md-4">
                                <a class="thumbnail" href="#"><img src="http://nebula.wsimg.com/168f9ce33dd5bb1f6d9a6eef6cc54bdb?AccessKeyId=8B31B767624172F3F688&disposition=0&alloworigin=1" class="img-responsive"></a>
                            </div>
                            <div class="col-md-4">
                                <a class="thumbnail" href="#"><img src="http://d3ustg7s7bf7i9.cloudfront.net/App_Themes/PL/assets_2017/images/prensa-libre.png" class="img-responsive"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <!-- fin info que dicen los demas --->

    <!-- section howWorkIt -->
    <section class="container-fluid" id="howWorkIt">
        <div style="background:transparent;">
            <div class="container text-center">
                <h1>{{ trans('index.ComoFunciona') }}</h1>
            </div>
            <br>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-2 circle-badge">
                    <div class="text-center">
                        <span class="fa-stack fa-lg">
                              <i class="fa fa-circle fa-stack-2x"></i>
                              <strong class="fa-stack-1x " style="color:green">1</strong>
                            </span>
                    </div>
                    <p>{{ trans('index.PasoUno') }}</p>
                    <div class="text-center">
                        <i class="fa fa-search fa-3x" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-2 circle-badge">
                    <div class="text-center">
                        <span class="fa-stack fa-lg">
                              <i class="fa fa-circle fa-stack-2x"></i>
                              <strong class="fa-stack-1x " style="color:green">2</strong>
                            </span>
                    </div>
                    <p>{{ trans('index.PasoDos') }}</p>
                    <div class="text-center">
                        <i class="fa fa-graduation-cap fa-3x" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-2 circle-badge">
                    <div class="text-center">
                        <span class="fa-stack fa-lg">
                              <i class="fa fa-circle fa-stack-2x"></i>
                              <strong class="fa-stack-1x " style="color:green">3</strong>
                            </span>
                    </div>
                    <p>{{ trans('index.PasoTres') }}</p>
                    <div class="text-center">
                        <i class="fa fa-calendar fa-3x" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-2 circle-badge">
                    <div class="text-center">
                        <span class="fa-stack fa-lg">
                              <i class="fa fa-circle fa-stack-2x"></i>
                              <strong class="fa-stack-1x " style="color:green">4</strong>
                            </span>
                    </div>
                    <p>{{ trans('index.PasoCuatro') }}</p>
                    <div class="text-center">
                        <i class="fa fa-credit-card fa-3x" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- fin section about -->


    <div class="clearfix" id="JoinUs">
        <div class="container">
            <br>
            <br>
            <div class="jumbotron text-center" style="background:transparent; color:white; font-family: 'Open Sans', sans-serif;">
                <strong><h1>{{ trans('index.UneteTutorTitle') }}</h1></strong>
                <p>{{ trans('index.PublicidadTutor') }}</p>
                <a href="#" class="btn btn-primary">
                    <h3>{{ trans('index.Unirme') }}</h3>
                </a>
            </div>
        </div>
    </div>
    <!-- section principales tutorias -->
    <section class="container-fluid" id="trendingClass">
        <section class="content_wrap">
            <div class="jumbotron text-center" style="background:transparent; font-family: 'Open Sans', sans-serif;">
                <strong><h2>{{ trans('index.NuestrosCursos') }}</h2></strong>
            </div>
            <!-- BEGIN LIST -->
            <ul class="box">
                <!-- BEGIN LIST ELEMENT -->
                <li>
                    <div class="circle">
                        <div class="front front-popular">
                            <div class="title color-1-font"> <i class="fa fa-superscript" aria-hidden="true"></i></div>
                            <div class="price color-1-font"><span class="total">{{ trans('index.Mate') }}</span></div>
                        </div>
                        <!-- end div .front -->
                        <div class="popular color-1-font"><i class="fa fa-superscript" aria-hidden="true"></i></div>
                        <div class="back color-1-bg info">
                            <div class="title">{{ trans('index.Mate') }}</div>
                            <div class="description">
                                <p>{{ trans('index.DescMate') }}</p>
                                <a href="#" class="btn btn-danger">{{ trans('index.verMas') }}</a>
                            </div>
                            <!-- end div .description -->
                        </div>
                        <!-- end div .back color-1-bg info -->
                    </div>
                    <!-- end div .circle -->
                </li>
                <!-- END LIST ELEMENT -->
                <!-- BEGIN LIST ELEMENT -->
                <li>
                    <div class="circle">
                        <div class="front front-popular">
                            <div class="title color-2-font"><i class="fa fa-rocket" aria-hidden="true"></i></div>
                            <div class="price color-2-font"><span class="total">{{ trans('index.Fisica') }}</span></div>
                        </div>
                        <!-- end div .front -->
                        <div class="popular color-2-font"><i class="fa fa-rocket" aria-hidden="true"></i></div>
                        <div class="back color-2-bg info">
                            <div class="title">{{ trans('index.Fisica') }}</div>
                            <div class="description">
                                <p>{{ trans('index.DescFisica') }}</p>
                                <a href="#" class="btn btn-danger">{{ trans('index.verMas') }}</a>
                            </div>
                            <!-- end div .description -->
                        </div>
                        <!-- end div .back color-1-bg info -->
                    </div>
                    <!-- end div .circle -->
                </li>
                <!-- END LIST ELEMENT -->
                <!-- BEGIN LIST ELEMENT -->
                <li>
                    <div class="circle">
                        <div class="front front-popular">
                            <div class="title color-3-font glyphicon glyphicon-music"></div>
                            <div class="price color-3-font"><span class="total">{{ trans('index.Musica') }}</span></div>
                        </div>
                        <!-- end div .front -->
                        <div class="popular color-3-font glyphicon glyphicon-music"></div>
                        <div class="back color-3-bg info">
                            <div class="title">{{ trans('index.Musica') }}</div>
                            <div class="description">
                                <p>{{ trans('index.DescMusica') }}</p>
                                <a href="#" class="btn btn-danger">{{ trans('index.verMas') }}</a>
                            </div>
                            <!-- end div .description -->
                        </div>
                        <!-- end div .back color-3-bg info -->
                    </div>
                    <!-- end div .circle -->
                </li>
                <!-- END LIST ELEMENT -->
                <!-- BEGIN LIST ELEMENT -->
                <li>
                    <div class="circle">
                        <div class="front front-popular">
                            <div class="title color-4-font glyphicon glyphicon-text-background"></div>
                            <div class="price color-4-font"><span class="total">{{ trans('index.Idioma') }}</span></div>
                        </div>
                        <!-- end div .front -->
                        <div class="popular color-4-font glyphicon glyphicon-text-background"></div>
                        <div class="back color-4-bg info">
                            <div class="title">{{ trans('index.Idioma') }}</div>
                            <div class="description">
                                <p>{{ trans('index.Idioma') }}</p>
                                <a href="#" class="btn btn-danger">{{ trans('index.verMas') }}</a>
                            </div>
                            <!-- end div .description -->
                        </div>
                        <!-- end div .back color-4-bg info -->
                    </div>
                    <!-- end div .circle -->
                </li>
                <!-- END LIST ELEMENT -->
            </ul>

            <ul class="box">
                              <!-- BEGIN LIST ELEMENT -->
                <li>
                    <div class="circle">
                        <div class="front front-popular">
                            <div class="title color-1-font"> <i class="fa fa-superscript" aria-hidden="true"></i></div>
                            <div class="price color-1-font"><span class="total">{{ trans('index.Mate') }}</span></div>
                        </div>
                        <!-- end div .front -->
                        <div class="popular color-1-font"><i class="fa fa-superscript" aria-hidden="true"></i></div>
                        <div class="back color-1-bg info">
                            <div class="title">{{ trans('index.Mate') }}</div>
                            <div class="description">
                                <p>{{ trans('index.DescMate') }}</p>
                                <a href="#" class="btn btn-danger">{{ trans('index.verMas') }}</a>
                            </div>
                            <!-- end div .description -->
                        </div>
                        <!-- end div .back color-1-bg info -->
                    </div>
                    <!-- end div .circle -->
                </li>
                <!-- END LIST ELEMENT -->
                <!-- BEGIN LIST ELEMENT -->
                <li>
                    <div class="circle">
                        <div class="front front-popular">
                            <div class="title color-2-font"><i class="fa fa-rocket" aria-hidden="true"></i></div>
                            <div class="price color-2-font"><span class="total">{{ trans('index.Fisica') }}</span></div>
                        </div>
                        <!-- end div .front -->
                        <div class="popular color-2-font"><i class="fa fa-rocket" aria-hidden="true"></i></div>
                        <div class="back color-2-bg info">
                            <div class="title">{{ trans('index.Fisica') }}</div>
                            <div class="description">
                                <p>{{ trans('index.DescFisica') }}</p>
                                <a href="#" class="btn btn-danger">{{ trans('index.verMas') }}</a>
                            </div>
                            <!-- end div .description -->
                        </div>
                        <!-- end div .back color-1-bg info -->
                    </div>
                    <!-- end div .circle -->
                </li>
                <!-- END LIST ELEMENT -->
                <!-- BEGIN LIST ELEMENT -->
                <li>
                    <div class="circle">
                        <div class="front front-popular">
                            <div class="title color-3-font glyphicon glyphicon-music"></div>
                            <div class="price color-3-font"><span class="total">{{ trans('index.Musica') }}</span></div>
                        </div>
                        <!-- end div .front -->
                        <div class="popular color-3-font glyphicon glyphicon-music"></div>
                        <div class="back color-3-bg info">
                            <div class="title">{{ trans('index.Musica') }}</div>
                            <div class="description">
                                <p>{{ trans('index.DescMusica') }}</p>
                                <a href="#" class="btn btn-danger">{{ trans('index.verMas') }}</a>
                            </div>
                            <!-- end div .description -->
                        </div>
                        <!-- end div .back color-3-bg info -->
                    </div>
                    <!-- end div .circle -->
                </li>
                <!-- END LIST ELEMENT -->
                <!-- BEGIN LIST ELEMENT -->
                <li>
                    <div class="circle">
                        <div class="front front-popular">
                            <div class="title color-4-font glyphicon glyphicon-text-background"></div>
                            <div class="price color-4-font"><span class="total">{{ trans('index.Idioma') }}</span></div>
                        </div>
                        <!-- end div .front -->
                        <div class="popular color-4-font glyphicon glyphicon-text-background"></div>
                        <div class="back color-4-bg info">
                            <div class="title">{{ trans('index.Idioma') }}</div>
                            <div class="description">
                                <p>{{ trans('index.DescIdioma') }}</p>
                                <a href="#" class="btn btn-danger">{{ trans('index.verMas') }}</a>
                            </div>
                            <!-- end div .description -->
                        </div>
                        <!-- end div .back color-4-bg info -->
                    </div>
                    <!-- end div .circle -->
                </li>
                <!-- END LIST ELEMENT -->

            </ul>


            <!--END LIST -->
        </section>

    </section>
    <!-- fin principales tutorias -->

    <!-- precios -->
    <section class="container-fluid" id="prices">
    </section>
    <!-- fin precios -->
    <!-- FOOTER -->
    <div class="clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 footerleft " id="contactUs">
                    <div class="logofooter" align="center"> X O O K</div>
                    <hr size="100%">
                    <p>{{ trans('index.DescFooterXook') }}</p>
                    <p><i class="fa fa-map-pin"></i> {{ trans('index.DirFooterXook') }}</p>
                    <p><i class="fa fa-phone"></i> {{ trans('index.TelFooterXook') }}</p>
                    <p><i class="fa fa-envelope"></i> {{ trans('index.MailFooterXook') }}</p>

                </div>
                <div class="col-md-3 col-sm-6 paddingtop-bottom">
                    <h6 class="heading7">{{ trans('index.FooterGeneralesLinks') }}</h6>
                    <ul class="footer-ul">
                        <li><a href="#"> {{ trans('index.Privacidad') }}</a></li>
                        <li><a href="#"> {{ trans('index.TermyCondi') }}</a></li>
                        <li><a href="#">{{ trans('index.Ranking') }}</a></li>
                        <li><a href="#"> {{ trans('index.CasosEstudio') }}</a></li>
                        <li><a href="#"> {{ trans('index.PreguntasFrecuentes') }}</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 paddingtop-bottom">
                    <div style="color: red;">
                        <div class="">
                            <a href="https://www.facebook.com/" style="color: white;"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a>
                        </div>
                        <div class="">
                            <a href="https://www.twitter.com" style="color: white;"><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i></a>
                        </div>
                        <div class="">
                            <a href="https://www.google.com" style="color: white;"><i class="fa fa-google-plus-square fa-2x" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="col-md-6">
                <p>{{ trans('index.CopyRight') }}</p>
            </div>
            <div class="col-md-6">
                <ul class="bottom_ul">
                    <li><a href="#">xook.com.gt</a></li>
                    <!--<li><a href="#">About us</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Faq's</a></li>
                    <li><a href="#">Contact us</a></li>
                    <li><a href="#">Site Map</a></li>-->
                </ul>
            </div>
        </div>
    </div>

    <!-- FIN FOOTER -->

</div>
@endsection @section('footerJS')
<script type="text/javascript" src="js/efectoSideBar.js"></script>
<script type="text/javascript" src="js/paginaInicial.js"></script>
<script type="text/javascript" src="js/Escritura.js"></script>

<script id="jsbin-javascript">
    var images = [
        "imgVistas/imagen1.jpg",
        "imgVistas/imagen2.jpg",
        "imgVistas/imagen3.jpg",
        "imgVistas/imagen4.jpg"
    ];
    var $body = $("body"),
        $bg = $("#bg"),
        n = images.length,
        c = 0; // Loop Counter

    // Preload Array of images...
    for (var i = 0; i < n; i++) {
        var tImg = new Image();
        tImg.src = images[i];
    }

    $body.css({
        backgroundImage: "url(" + images[c] + ")"
    });

    (function loopBg() {
        $bg.hide().css({
            backgroundImage: "url(" + images[++c % n] + ")"
        }).delay(3000).fadeTo(1200, 1, function() {
            $body.css({
                backgroundImage: "url(" + images[c % n] + ")"
            });
            loopBg();
        });
    }());
</script>
@endsection