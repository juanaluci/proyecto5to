@extends('plantilla')
@section('contenido')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                <h3>categorias
                <a href="{{route('categorias.create')}}" class="btn btn-primary pull-rigth">Nuevo</a>
                <h3>
                </div>
                <div class="card-body">
                    <table>
                         <thead>
                        <tr>
                         <th>Id</th>
                        <th>Categorias</th>
                        <th>Descripcion</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                        </tr>
                        </thead>
                    <tbody>
                <!-- Esto es un comentario -->
                @foreach ($categorias as $item)
                <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->categoria}}</td>
                        <td>{{$item->descripcion}}</td>
                        <td>
                        <a href="{{route('categorias.edit', $item->id)}}" class="btn btn-success">Editar</a>

                </td>
                <td>
                    <form method="post" action="{{url('/categorias/'.$item->id)}}">

                        <button type="submit" onclick="return confirm('Deseas borrar');"class="  btn btn-danger">Borrar</button>
                        {{csrf_field()}}
                        {{method_field('DELETE')}}

                    </form>

                </td>
                </tr>
@endforeach
                    </tbody>
                     </table>
                </div>
            </div>
        </div>
    </div>
</div>

 @endsection
