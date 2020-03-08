@extends('plantilla')
@section('contenido')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                <h3> Creacion  de Cosmeticos<h3>
                </div>
                <div class="card-body">

                   {!! Form::model($cosmetico, ['route'=>['cosmeticos.update',$cosmetico->id],'method'=>'PUT'])!!}
                   @include('sistema.cosmeticos.parciales.formulario')
                   {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>

 @endsection
