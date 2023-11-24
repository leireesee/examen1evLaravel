<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
    <h2 class="font-semibold text-xl text-gray-800 leading-tight max-w-7xl mx-auto sm:px-6 lg:px-8">
        {{ __('Manzanas') }}
    </h2>

    @foreach ($manzanas as $manzana)
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                {{-- DATOS --}}
                <p><strong>Id: </strong>{{ $manzana->id }}</p>
                <p><strong>Tipo: </strong>{{ $manzana->tipoManzana }}</p>
                <p><strong>Precio/Kilo: </strong>{{ $manzana->precioKilo }}</p>

                <div style="display: flex">
                    {{-- ELIMINAR --}}
                    <form action="{{ route('dashboard.eliminar', $manzana) }}" method="POST">
                        @csrf
                        <button type="submit" style="z-index: 1000000; background-color: black; color: white; padding: 10px; border-radius: 10px; margin-top: 10px;">
                            Eliminar
                        </button>
                    </form>

                    {{-- MODFICAR --}}
                    <a href="{{ route('formModificar', $manzana) }}" style="background-color: #1536a3; color: white; padding: 10px; border-radius: 10px; margin-top: 10px; margin-left: 10px">Modificar</a>
                </div>
                

            </div>
        </div>
    </div>
    @endforeach
</x-app-layout>
