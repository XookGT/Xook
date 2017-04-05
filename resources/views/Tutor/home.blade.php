@extends('layouts.master') 
@section('css')
<link rel="stylesheet" href="/bootstrap-vertical-tabs/bootstrap-vertical-tabs-master/bootstrap.vertical-tabs.min.css">
<link rel="stylesheet" type="text/css" href="/css/personalizadoAdmin.css">
<link rel="stylesheet" href="/bootstrap-select-1.12.2/bootstrap-select-1.12.2/dist/css/bootstrap-select.css"> 
@endsection @section('navBar')
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">XOOK</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ trans('homeTutor.Cuenta') }}<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="InicioSesion.html">{{ trans('homeTutor.IniciarSesion') }}</a></li>
                    <li><a href="#">{{ trans('homeTutor.SalirSesion') }}</a></li>
                    <li class="divider"></li>
                    <li><a href="#" data-toggle="modal" data-target="#myModal">{{ trans('homeTutor.Ajustes') }}</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
@endsection @section('contenido')

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



<div class="container">
    <div class="form-group pull-right">
        <div class="col-sm-12" align="center">
            <button type="submit" class="btn btn-primary">{{ trans('homeTutor.Guardar') }}</button>
            <button type="submit" class="btn btn-primary">{{ trans('homeTutor.Editar') }}</button>
            <button type="submit" class="btn btn-default">{{ trans('homeTutor.Cancelar') }}</button>
        </div>
    </div>
    <div class="col-xs-3">
        <!-- required for floating -->
        <!-- Nav tabs -->
        <ul class="nav nav-tabs tabs-left">
            <!-- 'tabs-right' for right tabs -->
            <li>
                <div class="text-center">
                    <img src="http://i2.wp.com/arqa.com/wp-content/uploads/2015/06/new-mistery.png" class="img-circle img-responsive center-block" alt="Foto Perfil" width="150" height="150">
                </div>
            </li>
            <li class="active"><a href="#perfil" data-toggle="tab">{{ trans('homeTutor.Perfil') }}</a></li>
            <li><a href="#disponibilidad" data-toggle="tab">{{ trans('homeTutor.Disponibilidad') }}</a></li>
            <li><a href="#agenda" data-toggle="tab">{{ trans('homeTutor.Agenda') }}</a></li>
            <li><a href="#pagos" data-toggle="tab">{{ trans('homeTutor.Pagos') }}</a></li>
        </ul>
    </div>
    <div class="col-xs-9">
        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane active" id="perfil"><br>
                <div class="panel panel-default">
                    <div class="panel-heading" align="center">{{ trans('homeTutor.DatosGenerales') }}</div>
                    <div class="panel-body">
                        <form class="form-horizontal form-style-8">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="email">{{ trans('homeTutor.Nombre') }}</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nombre" placeholder="{{ trans('homeTutor.PHNombre') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="email">{{ trans('homeTutor.Apellido') }}</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="apellido" placeholder="{{ trans('homeTutor.PHApellido') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="email">{{ trans('homeTutor.CUI') }}</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="cui" placeholder="{{ trans('homeTutor.PHCui') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="email">{{ trans('homeTutor.TelDomiciliar') }}</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="cui" placeholder="{{ trans('homeTutor.PHTelDom') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="email">{{ trans('homeTutor.Direccion') }}</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="cui" placeholder="{{ trans('homeTutor.PHDirRecidencia') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="email">{{ trans('homeTutor.CorreoE') }}</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="cui" placeholder="{{ trans('homeTutor.PHCorreoE') }}">
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" align="center">{{ trans('homeTutor.DatosPublicos') }}</div>
                    <div class="panel-body">
                        <form class="form-horizontal form-style-8">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="email">{{ trans('homeTutor.AcercaUsted') }}</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" rows="10" id="comentario" placeholder="{{ trans('homeTutor.PHAcercaUsted')}}" style="max-height:200px;"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="email">{{ trans('homeTutor.Contacto') }}</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="tel" placeholder="{{ trans('homeTutor.PHContacto') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="sel1">{{ trans('homeTutor.SelectUbicacion') }}</label>
                                <div class="col-sm-10">
                                    <select class="selectpicker" data-live-search="true" data-live-search-placeholder="{{ trans('homeTutor.Buscar') }}" data-actions-box="true" data-width="100%" title="{{ trans('homeTutor.EligeUbicacion') }}">
                                        <option>Mixco</option>
                                        <option>Amatitlan</option>
                                        <option>Guatemala</option>
                                        <option>San Cristobal</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="sel1">{{ trans('homeTutor.SelectLugarTutoria') }}</label>
                                <div class="col-sm-10">
                                    <select class="selectpicker" multiple data-live-search="true" data-live-search-placeholder="{{ trans('homeTutor.Buscar') }}" data-actions-box="true" data-width="100%" title="{{ trans('homeTutor.EligeLugares') }}">
                                                <optgroup label="{{ trans('homeTutor.CComerciales') }}">
                                                    <option value="1">C.C Miraflores</option>
                                                    <option value="3">C.C Tikal Futura</option>
                                                    <option value="6">C.C Los Proceres</option>
                                                    </optgroup>
                                                <optgroup label="{{ trans('homeTutor.Universidades') }}">
                                                    <option value="4">Universidad San Carlos de Guatemala</option>
                                                    <option value="5">Universidad Mariano Galvez z 10</option>
                                                    </optgroup>
                                                <optgroup label="{{ trans('homeTutor.Otros') }}">
                                                    <option value="2">Casa de Habitacion</option>
                                                    <option value="6">Recidencia Alumno</option>
                                                    <option value="">---</option>
                                                </optgroup>
                                        </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-2" for="email">{{ trans('homeTutor.NivelAlumno') }}</label>
                                <div class="col-sm-10">
                                    <select id="dates-field2" class="multiselect-ui form-control" multiple="multiple" title="{{ trans('homeTutor.EligeNiveles') }}">
                                            <option value="1">Primaria</option>
                                            <option value="2">Segundaria</option>
                                            <option value="3">Diversificado</option>
                                            <option value="4">Universitario</option>
                                        </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="pwd">{{ trans('homeTutor.Materias') }}</label>
                                <div class="col-sm-10">
                                    <select class="selectpicker" multiple data-live-search="true" data-live-search-placeholder="{{ trans('homeTutor.Buscar') }}" data-actions-box="true" data-width="100%" title="{{ trans('homeTutor.SelectMaterias') }}">
                                            <optgroup label="Matematica">
                                              <option>Matematica</option>
                                              <option>Algebra</option>
                                              <option>Algebra Booleana</option>
                                              <option>Ecuaciones Diferenciales</option>
                                            </optgroup>
                                            <optgroup label="Fisica">
                                              <option>Fisica</option>
                                              <option>Fisica Atomica</option>
                                              <option>Astrofisica</option>
                                            </optgroup>
                                            <optgroup label="Contabilidad">
                                              <option>Contabilidad</option>
                                              <option>Financiera</option>
                                            </optgroup>
                                          </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="email">{{ trans('homeTutor.Escolaridad') }}</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="Titulo" placeholder="{{ trans('homeTutor.PHTitulo') }}">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


            </div>
            <div class="tab-pane" id="disponibilidad">
                <div class="panel panel-default">
                    <div class="panel-heading" align="center">Horario Disponilble</div>
                    <div class="panel-body">
                        <p>Seleccione las casillas en que pueda dar tutorias.</p>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Horario</th>
                                        <th>Lun</th>
                                        <th>Mar</th>
                                        <th>Mie</th>
                                        <th>Jue</th>
                                        <th>Vie</th>
                                        <th>Sab</th>
                                        <th>Dom</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>6:00</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>7:00</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>9:00</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>10:00</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>11:00</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <div class="tab-pane" id="agenda">
                <div class="panel panel-default">
                    <div class="panel-heading" align="center">Agenda</div>
                    <div class="panel-body">
                        <p>Observe sus proximas, reuniones.</p>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Fecha</th>
                                        <th>Hora</th>
                                        <th>Lugar</th>
                                        <th>Alumno</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="danger">
                                        <td>20/4/17</td>
                                        <td>6:00 am.</td>
                                        <td>Comercial 1.</td>
                                        <td>Alumno 1 </td>
                                    </tr>
                                    <tr class="danger">
                                        <td>20/4/17</td>
                                        <td>6:00 am.</td>
                                        <td>Comercial 1.</td>
                                        <td>Alumno 1 </td>
                                    </tr>
                                    <tr class="warning">
                                        <td>20/4/17</td>
                                        <td>6:00 am.</td>
                                        <td>Comercial 1.</td>
                                        <td>Alumno 1 </td>
                                    </tr>
                                    <tr class="success">
                                        <td>20/4/17</td>
                                        <td>6:00 am.</td>
                                        <td>Comercial 1.</td>
                                        <td>Alumno 1 </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="pagos">
                <div class="panel panel-default">
                    <div class="panel-heading" align="center">Pagos</div>
                    <div class="panel-body">
                        <p>Observe los pagos, realizados y los pendientes</p>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Fecha</th>
                                        <th>Hora</th>
                                        <th>Monto</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="danger">
                                        <td>20/4/17</td>
                                        <td>6:00 am.</td>
                                        <td>$20.00</td>
                                    </tr>
                                    <tr class="danger">
                                        <td>20/4/17</td>
                                        <td>6:00 am.</td>
                                        <td>$40.00</td>
                                    </tr>
                                    <tr class="success">
                                        <td>20/4/17</td>
                                        <td>6:00 am.</td>
                                        <td>$20.00</td>
                                    </tr>
                                    <tr class="info">
                                        <td colspan="2" align="center">TOTAL</td>
                                        <td>$80.00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection @section('footerJS')
<script src="bootstrap-select-1.12.2/bootstrap-select-1.12.2/dist/js/bootstrap-select.js"></script>
<script>
    $(document).ready(function() {
        $('select').selectpicker();
    });
</script>
@endsection