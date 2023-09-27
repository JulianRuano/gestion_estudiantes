@extends('layout/template')

@section('title', 'Alumnos | Escuela')

@section('contenido')

<main>
    <div class="container py-4">
        @if(session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('status') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
        @endif

        <h2>Alumnos</h2>

        <a href="{{url('alumnos/create')}}" class="btn btn-primary btn-sm">Nuevo registro</a>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th >Matricula</th>
                    <th >Nombre</th>
                    <th >Fecha de nacimiento</th>
                    <th >Telefono</th>
                    <th >Email</th>
                    <th >Nivel</th>
                    <th ></th>
                    <th ></th>
                </tr>
            </thead>

            <tbody>
                @foreach($alumnos as $alumno)
                    <tr>
                        <td>{{$alumno->id}}</td>
                        <td>{{$alumno->matricula}}</td>
                        <td>{{$alumno->nombre}}</td>
                        <td>{{$alumno->fecha_nacimiento}}</td>
                        <td>{{$alumno->telefono}}</td>
                        <td>{{$alumno->email}}</td>
                        <td>{{$alumno->nivel->nombre}}</td>
                        
                        <td><a href="{{url('alumnos/'.$alumno->id.'/edit')}}" class="btn btn-warning btn-sm">Editar</a></td>
                        <td>
                            <form action="{{url('alumnos/'.$alumno->id)}}" method="post">
                                @csrf
                                {{method_field('DELETE')}}
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Desea eliminar el registro?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</main>