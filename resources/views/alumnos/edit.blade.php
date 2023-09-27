@extends('layout/template')

@section('title', 'Editar alumno | Escuela')

@section('contenido')

<main>
    <div class="container py-4">
        <h2>Editar Alumnos</h2>

        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <h5>Por favor corrige los siguientes errores: </h5>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>                        
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{url('alumnos/'.$alumno->id)}}" method="post">
            @method('PUT')
            @csrf

            <div class="mb-3 row">
                <label for="matricula" class="col-sm-2 col-form-label">Matricula</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="matricula" name="matricula" placeholder="Matricula" value="{{$alumno->matricula}}"
                    required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="nombre" class="col-sm-2 col-form-label">Nombre completo: </label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre" value="{{$alumno->nombre}}"
                    required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="fecha" class="col-sm-2 col-form-label">Fecha</label>
                <div class="col-sm-5">
                    <input type="date" class="form-control" id="fecha" name="fecha" placeholder="fecha" value="{{$alumno->fecha_nacimiento}}"
                    required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="telefono" class="col-sm-2 col-form-label">Telefonpo</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="telefono" name="telefono" placeholder="telefono" value="{{$alumno->telefono}}"
                    required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="email" class="col-sm-2 col-form-label">Email: </label>
                <div class="col-sm-5">
                    <input type="email" class="form-control" id="email" name="email" placeholder="email" value="{{$alumno->email}}">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="nivel" class="col-sm-2 col-form-label">Nivel: </label>
                <div class="col-sm-5">
                    <select name="nivel" id="nivel" class="form-select" required>
                        <option value="">Seleccione un nivel</option>
                        <!-- lo traemos de la base de datos -->
                        @foreach ($niveles as $nivel)
                            <option value="{{$nivel->id}}" 
                                @if ($nivel->id == $alumno->nivel_id)
                                    selected="selected" 
                                @endif>{{$nivel->nombre}}</option>
                        @endforeach                       
                    </select>
                </div>
            </div>

            <a href="{{url('alumnos')}}" class="btn btn-secondary">Regresar</a>

            <button type="submit" class="btn btn-success">Guardar</button>

        </form>
    </div>
</main>