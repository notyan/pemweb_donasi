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
                    <h2>Halo, {{ Auth::user()->name }}!</h2>
                    @if(Auth::user()->level > 1)
                     <a href="/admin" ><b>Menuju Dashboard Admin</b></a>
                    @endif
                    @if(DB::table('relawan')->where('id_user', Auth::id())->get()->first())
                          <a href="/admin"><b>Menuju Dashboard Relawan</b></a>
                    @else
                         <p>Tertarik untuk menjadi relawan ? <a href="/relawan/daftar"><b> Daftar</b></a></p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
