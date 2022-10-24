@extends('layouts/main')

@section('contenido')

<div class="container mt-3">
    <div class="row mb-3">
        <div class="col">
            <h1 class="display-2 text-center">Animales</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <form action="{{route('animales.store')}}" method="POST">
                @csrf
                <div class="input-group mb-4 shadow rounded">
                    <label for="nombre" class="input-group-text">Nombre</label>
                    <input class="form-control" type="text" name="nombre" id="nombre" required>
                </div>
                <div class="input-group mb-4 shadow rounded">
                    <label for="nombre" class="input-group-text">Tipo de hábitat</label>
                    <input class="form-control" type="text" name="habitat" id="habitat" required>
                </div>
                <div class="input-group mb-4 shadow rounded">
                    <label for="nombre" class="input-group-text">Localización</label>
                    <input class="form-control" type="text" name="localizacion" id="localizacion" required>
                </div>
                <div class="mb-4">
                    <label for="" class="form-label fs-4 text">Peligro de extinción</label>
                    <div class="row">
                        <div class="col-2">
                            {{-- <div class="form-check"> --}}
                                <input class="form-check-input" type="radio" value="1" id="extincion" name="extincion" required>
                                <label class="form-check-label" for="ckeckSi">Si</label>                      
                            {{-- </div> --}}
                        </div>
                        <div class="col-2">
                            <input class="form-check-input" type="radio" value="0" id="extincion" name="extincion">
                            <label class="form-check-label" for="ckeckNo">No</label>  
                        </div>
                    </div>
                </div>
                <button class="btn btn-outline-dark">Guardar</button>
                <a href="{{route('animales.muestra')}}" class="btn btn-outline-info ms-3">Mostrar mis animales</a>
            </form>
        </div>
        <div class="col-3"></div>
    </div>
</div>

@endsection