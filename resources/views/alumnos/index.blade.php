@extends('layout/template')

@section('title', 'Alumnos | Escuela')

@section('content')
    <div id="spinner" class="w-screen h-screen fixed top-0 left-0 z-50 flex justify-center items-center bg-gray-900">
        <div class="animate-spin rounded-full h-32 w-32 border-t-2 border-b-2"></div>
    </div>

    <div id="list-alumnos" class="mx-auto min-h-full px-4 py-8 sm:px-8  bg-gray-900" style="display: none;">
        <div class="flex items-center justify-between pb-6  mx-auto xl:max-w-6xl">
            <div>
                <h2 class="font-semibold text-white  tracking-widest">Alumnos registrados</h2>
                <span class="text-xs text-white  tracking-widest">Lista de alumnos registrados</span>
            </div>
            <div class="flex items-center justify-between">
                <div class="ml-10 space-x-8 lg:ml-40">
                    <a href="{{ url('alumnos/create') }}" class="block w-full no-underline">
                        <button
                            class="flex items-center gap-2 rounded-md bg-indigo-500 px-4 py-2 text-sm font-semibold text-white focus:outline-none focus:ring hover:bg-blue-700 hover:bg-indigo-700 w-full h-full">
                            <i class="fa-solid fa-plus"></i> Nuevo registro
                        </button>
                    </a>


                </div>
            </div>
        </div>
        <div class="overflow-y-hidden rounded-lg border  mx-auto xl:max-w-6xl ">
            <div class="overflow-x-auto bg-white">
                <table class="w-full">
                    <thead>
                        <tr class="bg-indigo-500 text-left text-xs font-semibold uppercase tracking-widest text-white">
                            <th class="px-5 py-3">ID</th>
                            <th class="px-5 py-3">Matricula</th>
                            <th class="px-5 py-3">Nombre</th>
                            <th class="px-5 py-3">Fecha de nacimiento</th>
                            <th class="px-5 py-3">Telefono</th>
                            <th class="px-5 py-3">Email</th>
                            <th class="px-5 py-3">Nivel</th>
                            <th class="px-5 py-3">Acciones</th>
                            <th class="px-5 py-3"></th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-500">

                        @foreach ($alumnos as $alumno)
                            <tr>
                                <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                                    <p class="whitespace-no-wrap">{{ $alumno->id }}</p>
                                </td>
                                <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                                    <p class="whitespace-no-wrap">{{ $alumno->matricula }}</p>
                                </td>
                                <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                                    <p class="whitespace-no-wrap">{{ $alumno->nombre }}</p>
                                </td>
                                <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                                    <p class="whitespace-no-wrap">{{ $alumno->fecha_nacimiento }}</p>
                                </td>
                                <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                                    <p class="whitespace-no-wrap">{{ $alumno->telefono }}</p>
                                </td>
                                <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                                    <p class="whitespace-no-wrap">{{ $alumno->email }}</p>
                                </td>
                                <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                                    <p class="whitespace-no-wrap">{{ $alumno->nivel->nombre }}</p>
                                </td>
                                <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                                    <div class="flex">

                                        <a href="{{ url('alumnos/' . $alumno->id . '/edit') }}"
                                            class="bg-blue-100 text-blue-800 text-xs font-medium mr-2 px-2.5 py-1 rounded-full dark:bg-blue-900 dark:text-blue-300  no-underline">Editar</a>
                                        <form action="{{ url('alumnos/' . $alumno->id) }}" method="post" class="mb-0">
                                            @csrf
                                            {{ method_field('DELETE') }}

                                            <a href="#"
                                                class="bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-1 rounded-full dark:bg-red-900 dark:text-red-300 mt-1 no-underline "
                                                onclick="eliminarAlumno({{ $alumno->id }});"> <button type="submit"
                                                    class="mt-1"
                                                    onclick="return confirm('¿Desea eliminar el registro?')">Eliminar</button></a>
                                        </form>


                                    </div>

                                </td>
                            </tr>
                        @endforeach
                        @if (count($alumnos) == 0)
                            <td>
                                <br>
                                <br>
                            </td>
                        @endif

                    </tbody>
                </table>
            </div>

            <div class="flex flex-col items-center border-t bg-white px-5 py-5 sm:flex-row sm:justify-between">
                <span class="text-xs text-gray-600 sm:text-sm"> Showing {{ $alumnos->firstItem() }} to
                    {{ $alumnos->lastItem() }} of {{ $alumnos->total() }} Entries </span>
                <div class="mt-2 inline-flex sm:mt-0">
                    @if ($alumnos->previousPageUrl())
                        <a href="{{ $alumnos->previousPageUrl() }}">
                            <button
                                class="mr-2 h-12 w-12 rounded-full border text-sm font-semibold text-gray-600 transition duration-150 hover:bg-gray-100">
                                Prev
                            </button>
                        </a>
                    @else
                        <button
                            class="cursor-not-allowed mr-2 h-12 w-12 rounded-full border text-sm font-semibold text-gray-600 bg-gray-100"
                            disabled>
                            Prev
                        </button>
                    @endif


                    @if ($alumnos->nextPageUrl())
                        <a href="{{ $alumnos->nextPageUrl() }}">
                            <button
                                class="mr-2 h-12 w-12 rounded-full border text-sm font-semibold text-gray-600 transition duration-150 hover:bg-gray-100">
                                Next
                            </button>
                        </a>
                    @else
                        <button
                            class="cursor-not-allowed mr-2 h-12 w-12 rounded-full border text-sm font-semibold text-gray-600 bg-gray-100"
                            disabled>
                            Next
                        </button>
                    @endif


                </div>
            </div>

        </div>
    </div>


    <script>
        function mostrarContenido() {
            const spinner = document.getElementById('spinner');
            const lista = document.getElementById('list-alumnos');
            spinner.style.display = 'none';
            lista.style.display = "block";
        }
        window.addEventListener('load', mostrarContenido);
    </script>
@endsection
