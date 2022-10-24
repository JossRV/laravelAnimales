@extends('layouts/main')

@section('contenido')
<div class="container">
    <div class="row my-3">
        <div class="col">
            <h1 class="display-2 text-center">Editar animales</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <form action="{{route('animales.update',$item->id)}}" method="POST">
                @csrf
                @method("PUT")
                <div class="input-group mb-4 shadow rounded">
                    <label for="nombre" class="input-group-text">Nombre</label>
                    <input class="form-control" type="text" name="nombre" id="nombre" value="{{$item->nombre_animal}}">
                </div>
                <div class="input-group mb-4 shadow rounded">
                    <label for="nombre" class="input-group-text">Tipo de hábitat</label>
                    <input class="form-control" type="text" name="habitat" id="habitat" value="{{$item->tipo_habitat}}">
                </div>
                <div class="input-group mb-4 shadow rounded">
                    <label for="nombre" class="input-group-text">Localización</label>
                    <input class="form-control" type="text" name="localizacion" id="localizacion" value="{{$item->localizacion}}">
                </div>
                <div class="mb-4">
                    <label for="" class="form-label fs-4 text">Peligro de extinción</label>
                    <div class="row">
                        <div class="col-2">
                            <input class="form-check-input" type="radio" value="1" id="extincion" name="extincion" {{$item->peligro_extincion==1 ? 'checked' : ''}}>
                            <label class="form-check-label" for="ckeckSi">Si</label>
                        </div>
                        <div class="col-2">
                            <input class="form-check-input" type="radio" value="0" id="extincion" name="extincion" {{$item->peligro_extincion==0 ? 'checked' : ''}}>
                            <label class="form-check-label" for="ckeckNo">No</label>
                        </div>
                    </div>
                </div>
                <button class="btn btn-outline-dark">Actualizar</button>
                <a href="{{route('animales.muestra')}}" class="btn btn-outline-warning ms-4">Cancelar</a>
            </form>
        </div>
        <div class="col-3"></div>
    </div>
</div>
@endsection
