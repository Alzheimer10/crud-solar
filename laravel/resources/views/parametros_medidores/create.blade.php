@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>Parametros de Medidores</h1>
        <select name="cliente" id="cliente">
                <option value="">CLIENTE</option>
            @foreach($clientes as $cliente)   
                <option value="{{$cliente->id}}">{{$cliente->rut}}</option>
            @endforeach
        </select>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row"> 
                    {{--
                    {!! Form::open(['novalidate'=>'true', 'role'=>'form','route' => ['parametros_medidores.store'], 'enctype' => 'multipart/form-data']) !!}
                    --}}
                    {!! Form::open(['data-toggle'=>'validator', 'role'=>'form','route' => ['parametros_medidores.store'], 'enctype' => 'multipart/form-data']) !!}

                        @include('parametros_medidores.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection