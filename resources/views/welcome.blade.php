@extends('layout/template')

@section('title', 'Bienvenidos | Escuela')

@section('content')


    <main class="min-h-screen min-w-screen bg-gray-900">
        <div class="container flex justify-center items-center min-h-screen min-w-screen ">
            <button type="button"
                class="block w-full max-w-xs mx-auto bg-indigo-500 hover:bg-indigo-700 focus:bg-indigo-700 text-white rounded-lg px-3 py-3 font-semibold z-10"
                onclick="window.location.href='http://127.0.0.1:8000/alumnos'">CRUD</button>
        </div>

        <div class="area h-0">
            <ul class="circles">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>

    </main>
@endsection
