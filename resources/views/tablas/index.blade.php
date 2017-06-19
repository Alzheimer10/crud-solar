@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">{{$name_tabla}}</h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>
        @include('flash::message')
        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
             	@include('tablas.table')
            </div>
        </div>
    </div>
@endsection