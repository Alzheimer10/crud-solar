@if(!isset($tablas)) @inject('tablas','App\Services\appServiceController') @endif
@if(Config::get('app.ohm_v2'))
	<li class="header">BASES DE DATOS</li>
	<li class="treeview menu-open {{ Request::is('parametros_medidores*') ? 'active' : '' }} {{ Request::is('tabla*') ? 'active' : '' }}">
		<a href="#">
			<i class="fa fa-database fa-app" aria-hidden="true"></i><span>ohm_v2</span>
			<span class="pull-right-container">
			  <i class="fa fa-angle-left pull-right"></i>
			</span>
		</a>
		<ul class="treeview-menu" style="display: block;">
			@foreach($tablas->ohm_v2() as $key => $tabla)
				@if($key=='parametros_medidores')
					<li class="{{ Request::is('parametros_medidores*') ? 'active' : '' }}">
						<a href="{!! route('parametros_medidores.index') !!}"><i class="fa fa-pie-chart"></i>{{$key}}</a>
					</li>
				@else
					<li  class="{{ Request::is('parametros_medidores*') ? 'active' : '' }}"><a href="{{ url('tabla')}}/ohm_v2/{{$key}}"><i class="fa fa-pie-chart"></i>{{$key}}</a></li>
				@endif
			@endforeach
		</ul>
	</li>
@else
					<li class="{{ Request::is('parametros_medidores*') ? 'active' : '' }}">
						<a href="{!! route('parametros_medidores.index') !!}"><i class="fa fa-pie-chart"></i>parametros_medidores</a>
					</li>
@endif
@if(Config::get('app.mi_energia'))
	<li class="treeview">
		<a href="#">
			<i class="fa fa-database fa-app" ></i><span>mi_energia</span>
			<span class="pull-right-container">
			  <i class="fa fa-angle-left pull-right"></i>
			</span>
		</a>
		<ul class="treeview-menu">
			@foreach($tablas->mi_energia() as $key => $tabla)
					<li  class="{{ Request::is('parametros_medidores*') ? 'active' : '' }}"><a href="{{ url('tabla')}}/mi_energia/{{$key}}"><i class="fa fa-pie-chart"></i>{{$key}}</a></li>
			@endforeach
		</ul>
	</li>
@endif