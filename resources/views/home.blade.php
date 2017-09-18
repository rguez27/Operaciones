@extends('layouts.app')

@section('content')
<div class="container">
      
            <div class=" col-md-12 col-md-offset-1">
                
                    @yield('cuerpo')
                
            </div>    
    
    <div class="side navbar-fixed-top"><!--Lado-->
    
        <img src="holder.js/205x150?text=LOGO" id="holder">

        <ul id="menu" class="clearfix">
            <li><a href="{!!URL::to('/Panel')!!}"><span class="material-icons">home </span> Inicio</a></li>
            <li><a href="{!!URL::to('/Empresas/create')!!}"><span class="material-icons">business </span> Alta de Empresa</a></li>
            <li><a href="{!!URL::to('/Empresas')!!}"><span class="material-icons">assignment </span> Lista de Empresas</a></li>
            <li><a href="{!!URL::to('/Empleados/create')!!}"><span class="material-icons">group add </span> Alta de Personal</a></li>
            <li><a href="{!!URL::to('/Empleados')!!}"><span class="material-icons">assignment </span> Lista de Personal</a></li>
            <li><a href="{!!URL::to('/Sectores')!!}"><span class="material-icons">place </span> Sectores</a></li>
            <li><a href=""><span class="material-icons">event </span> Horarios de Empleados</a></li>
            <li><a href="{!!URL::to('/Descanso')!!}"><span class="material-icons">description </span> Rol de Descansos</a></li>
        </ul>
        
  </div><!--/Lado-->

</div>
@endsection
