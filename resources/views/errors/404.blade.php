@extends('layout/template')

@section('title', 'Alumnos | Escuela')

@section('contenido')

    <div
        class="lg:px-24 lg:py-24 md:py-20 md:px-44 px-4 py-24 items-center flex justify-center flex-col-reverse lg:flex-row md:gap-28 gap-16">
        <div class="xl:pt-24 w-full xl:w-1/2 relative pb-12 lg:pb-0">
            <div class="relative">
                <div class="absolute">
                    <div class="">
                        <h1 class="my-2 text-gray-800 font-bold text-2xl tracking-widest">
                            Parece que has encontrado la puerta a la gran nada,
                            lo sentimos.
                            Visite nuestra página de inicio para llegar a su destino.
                        </h1>
                        <p class="my-2 text-gray-800">Visite nuestra página de inicio para llegar a su destino.
                        </p>
                        <a href="{{ url('alumnos') }}">
                            <button
                                class="sm:w-full lg:w-auto my-2 border rounded md py-4 px-8 text-center bg-indigo-600 text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-700 focus:ring-opacity-50 tracking-widest">Llevame
                                ahí!</button>
                        </a>

                    </div>
                </div>
                <div>
                    <img src="https://i.ibb.co/G9DC8S0/404-2.png" />
                </div>
            </div>
        </div>
        <div>
            <img src="https://i.ibb.co/ck1SGFJ/Group.png" />
        </div>
    </div>
