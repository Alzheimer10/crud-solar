@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>Medidore [{{$medidor->id_bd}}] </h1>
         <a href="{!! route('parametros_medidores.edit', [$medidor->id_bd]) !!}" class='btn btn-primary btn-xs'><i class="glyphicon glyphicon-edit"></i> Editar</a>
        {!! Form::open(['route' => ['parametros_medidores.destroy', $medidor->id_bd], 'method' => 'delete']) !!}
            <div class='btn-group'>
                {!! Form::button('<i class="glyphicon glyphicon-trash"></i> ELIMINAR', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Estas seguro?')"]) !!}
            </div>
        {!! Form::close() !!}
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                        @include('parametros_medidores.show_fields')
                    <a href="{!! route('parametros_medidores.index') !!}" class="btn btn-default">Atras</a>
                </div>
            </div>
        </div>
    </div>
@endsection
