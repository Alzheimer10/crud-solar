@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>Medidore [{{$medidor->id_bd}}] </h1>
        {!! Form::open(['route' => ['parametros_medidores.destroy', $medidor->id_bd], 'method' => 'delete']) !!}
            <div class='btn-group'>
                {!! Form::button('<i class="glyphicon glyphicon-trash"></i> ELIMINAR', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Estas seguro?')"]) !!}
            </div>
        {!! Form::close() !!}
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                    {!! Form::model($medidor, ['data-toggle'=>'validator', 'role'=>'form','route' => ['parametros_medidores.update', $medidor->id_bd], 'method' => 'patch']) !!}
                        @include('parametros_medidores.fields')
                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection