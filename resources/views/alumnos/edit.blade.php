@extends('layout/template')

@section('title', 'Editar alumno | Escuela')


@section('content')
    <div id="spinner" class="w-screen h-screen fixed top-0 left-0 z-50 flex justify-center items-center bg-gray-900">
        <div class="animate-spin rounded-full h-32 w-32 border-t-2 border-b-2"></div>
    </div>

    <div id="formulario-edit"
        class="min-w-screen min-h-screen bg-gray-900 flex flex-col justify-center items-center px-5 py-5 "
        style="display: none;">
        <div class="bg-gray-100 text-gray-500 rounded-3xl shadow-xl w-full overflow-hidden mx-auto relative"
            style="max-width:1000px">
            <div class="md:flex w-full">
                <a href="{{ url('alumnos') }}">
                    <div class="hidden md:block">
                        <!-- Ícono que se mostrará en pantallas medianas y grandes -->
                        <i class="fa-solid fa-3x fa-arrow-left text-white absolute top-0 left-0 p-4 cursor-pointer"></i>
                    </div>
                    <div class="md:hidden">
                        <!-- Ícono que se mostrará en pantallas pequeñas -->
                        <i
                            class="fa-solid fa-3x fa-arrow-left  absolute top-0 left-0 p-4 cursor-pointer text-slate-400"></i>
                    </div>
                </a>
                <div class="hidden md:block w-1/2 py-10 px-10 blur-on-load-edit"
                    style="background-image: url('https://res.cloudinary.com/dzxhdnqm4/image/upload/v1696197983/pexels-mary-taylor-5896424_mb7wky.avif'); background-size: cover; background-position: center;">
                    <!-- No necesitas la etiqueta <img> aquí -->
                </div>


                <div class="w-full md:w-1/2 py-10 px-5 md:px-10">
                    <form action="{{ url('alumnos/' . $alumno->id) }}" method="post">
                        @method('PUT')
                        @csrf
                        <div class="text-center mb-10">
                            <h1 class="font-bold text-3xl text-gray-900  tracking-widest">EDITAR ALUMNO</h1>
                            <p>Actualiza la siguiente informacion:</p>
                        </div>
                        <div>
                            <div class="flex -mx-3">
                                <div class="w-1/2 px-3 mb-5">
                                    <label for="" class="text-xs font-semibold px-1">Matricula</label>
                                    <div class="flex">
                                        <div
                                            class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                                            <i class="mdi mdi-account-outline text-gray-400 text-lg"></i>
                                        </div>
                                        <input type="text"
                                            class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500"
                                            id="matricula" name="matricula" placeholder="12345"
                                            value="{{ $alumno->matricula }}">
                                    </div>
                                    @error('matricula')
                                        <p class="text-red-500 text-xs italic mb-0">El campo matricula es requerido</p>
                                    @enderror
                                </div>
                                <div class="w-1/2 px-3 mb-5">
                                    <label for="" class="text-xs font-semibold px-1">Nombre</label>
                                    <div class="flex">
                                        <div
                                            class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                                            <i class="mdi mdi-account-outline text-gray-400 text-lg"></i>
                                        </div>
                                        <input type="text" id="nombre" name="nombre"
                                            class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500"
                                            placeholder="John" value="{{ $alumno->nombre }}">
                                    </div>
                                    @error('nombre')
                                        <p class="text-red-500
                                        text-xs italic mb-0">El
                                            campo
                                            nombre es requerido</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="flex -mx-3">
                                <div class="w-full px-3 mb-5">
                                    <label for="" class="text-xs font-semibold px-1">Email</label>
                                    <div class="flex">
                                        <div
                                            class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                                            <i class="mdi mdi-email-outline text-gray-400 text-lg"></i>
                                        </div>
                                        <input type="email" id="email" name="email"
                                            class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500"
                                            placeholder="john@example.com" value="{{ $alumno->email }}"">
                                    </div>
                                    @error('email')
                                        <p class="text-red-500 text-xs italic mb-0">El campo email es requerido</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="flex -mx-3">
                                <div class="w-full px-3 mb-5">
                                    <label for="" class="text-xs font-semibold px-1">Fecha de nacimiento</label>
                                    <div class="flex">
                                        <div
                                            class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                                            <i class="mdi mdi-email-outline text-gray-400 text-lg"></i>
                                        </div>
                                        <input type="date"
                                            class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500"
                                            id="fecha" name="fecha" placeholder="john@example.com"
                                            value="{{ $alumno->fecha_nacimiento }}"">
                                    </div>
                                    @error('fecha')
                                        <p class="text-red-500 text-xs italic mb-0">El campo fecha de nacimiento es requerido
                                        </p>
                                    @enderror
                                </div>
                            </div>
                            <div class="flex -mx-3">
                                <div class="w-full px-3 mb-5">
                                    <label for="" class="text-xs font-semibold px-1">Teléfono</label>
                                    <div class="flex">
                                        <div
                                            class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                                            <i class="mdi mdi-email-outline text-gray-400 text-lg"></i>
                                        </div>
                                        <input type="string" id="telefono" name="telefono"
                                            class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500"
                                            placeholder="0123456789" value="{{ $alumno->telefono }}">
                                    </div>
                                    @error('telefono')
                                        <p class="text-red-500
                                        text-xs italic mb-0">El
                                            campo
                                            fecha de nacimiento es requerido
                                        </p>
                                    @enderror
                                </div>
                            </div>
                            <div class="flex -mx-3">
                                <div class="w-full px-3 mb-5">
                                    <label for="" class="text-xs font-semibold px-1">Nivel de estudios</label>
                                    <div class="flex">
                                        <div
                                            class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                                            <i class="mdi mdi-email-outline text-gray-400 text-lg"></i>
                                        </div>
                                        <select name="nivel" id="nivel"
                                            class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500"
                                            required>
                                            <option value="">Seleccione un nivel</option>
                                            <!-- lo traemos de la base de datos -->
                                            @foreach ($niveles as $nivel)
                                                <option value="{{ $nivel->id }}"
                                                    @if ($nivel->id == $alumno->nivel_id) selected="selected" @endif>
                                                    {{ $nivel->nombre }}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                    @error('nivel')
                                        <p class="text-red-500 text-xs italic mb-0">El campo nivel de estudios es requerido
                                        </p>
                                    @enderror
                                </div>
                            </div>
                            <div class="flex -mx-3">
                                <div class="w-full px-3 mb-5">
                                    <button type="submit"
                                        class="block w-full max-w-xs mx-auto bg-indigo-500 hover:bg-indigo-700 focus:bg-indigo-700 text-white rounded-lg px-3 py-3 font-semibold">GUARDAR
                                        CAMBIOS</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        const img = new Image();
        img.src = 'https://res.cloudinary.com/dzxhdnqm4/image/upload/v1696197983/pexels-mary-taylor-5896424_mb7wky.avif';
        img.onload = function() {
            const spinner = document.getElementById('spinner');
            const formulario2 = document.getElementById('formulario-edit');
            spinner.style.display = 'none';
            formulario2.style.display = "block";
        };
    </script>
@endsection
