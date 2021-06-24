<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">Verifikasi Status Relawan Anda</h2>
                    <br>
                    <h2>Masukkan kode verifikasi</h2>
                    <form action="{{ route('relawan.verif') }}" method="POST">
                    @csrf
                        <input class=" rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="number" name="token" id="token"> <br />
                        <br>
                        <x-button type="submit" value="Verifikasi!">Verifikasi</x-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
