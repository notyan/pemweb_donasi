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
                    <form action="{{ route('relawan.reg') }}" method="POST">
                        @csrf
                        <table>
                            <tr>
                                <td width="150">Nama depan</td>
                                <td><input style="width: 250px;" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="text" name="nama_depan" id="nama_depan"></td>
                            </tr>
                            <tr>
                                <td>Nama belakang</td>
                                <td><input style="width: 250px;" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="text" name="nama_belakang" id="nama_belakang"></td>
                            </tr>
                            <tr>
                                <td>Alamat ktp</td>
                                <td><input style="width: 250px;" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="text" name="alamat_ktp" id="alamat_ktp"></td>
                            </tr>
                            <tr>
                                <td>No WA</td>
                                <td><input style="width: 250px;" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="number" name="no_wa" id="no_wa"></td>
                            </tr>
                            <tr>
                                <td>Kelurahan</td>
                                <td>
                                    <select style="width: 250px;" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="id_kelurahan" id="id_kelurahan">
                                    @foreach($list_kelurahan as $kelurahan)
                                        <option value="{{ $kelurahan->id }}">{{ $kelurahan->nama }}</option>
                                    @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Profesi</td>
                                <td>
                                    <select style="width: 250px;" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="id_profesi" id="id_progesi">
                                    @foreach($list_profesi as $profesi)
                                        <option value="{{ $profesi->id }}">{{ $profesi->nama }}</option>
                                    @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Vendor</td>
                                <td>
                                    <select style="width: 250px;" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="id_jk" id="id_jk">
                                    @foreach($list_jk as $jk)
                                        <option value="{{ $jk->id }}">{{ $jk->nama }}</option>
                                    @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Agama</td>
                                <td>
                                    <select style="width: 250px;" class=" rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="id_agama" id="id_agama">
                                    @foreach($list_agama as $agama)
                                        <option value="{{ $agama->id }}">{{ $agama->nama }}</option>
                                    @endforeach
                                    </select> 
                                </td>
                            </tr>
                            
                        </table>
                        <br>
                        <x-button type="submit" value="Daftar!">Daftar</x-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
