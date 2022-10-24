@extends('layouts/main')

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="display-2 text-center mt-3">Animales</h1>
                <table class="table table-striped table-primary table-bordered mt-3 text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>Nombre</th>
                            <th>Tipo de Habitat</th>
                            <th>Localización</th>
                            <th>Peligro de Extinción</th>
                            <th>Eliminar</th>
                            <th>Editar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($animales as $item)
                            <tr>
                                <td>{{$item->nombre_animal}}</td>
                                <td>{{$item->tipo_habitat}}</td>
                                <td>{{$item->localizacion}}</td>
                                <td><i class="{{$item->peligro_extincion!=0?'fa-solid fa-check':'fa-solid fa-xmark'}}"></i></td>
                                <td><form action="{{route('animales.destroy',$item->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-outline-dark"><i class="fa-solid fa-trash"></i></button>
                                </form></td>
                                <td>
                                    <a href="{{route('animales.edit',$item->id)}}" class="btn btn-outline-dark">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a href="{{route('animales.index')}}" class="btn btn-outline-success">Regresar al inicio</a>
            </div>
        </div>
    </div>
@endsection