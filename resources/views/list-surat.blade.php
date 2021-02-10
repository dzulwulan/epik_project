<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Verifikasi Surat') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{-- <x-jet-welcome /> --}}
                <div class="text-gray-900 bg-gray-200">
                    <div class="p-4 flex">
                        <h1 class="text-3xl">
                            Verifikasi Surat
                        </h1>
                    </div>
                    <div class="px-3 py-4 flex justify-center">
                        <table class="w-full text-md bg-white shadow-md rounded mb-4">
                            <tbody>
                                <tr class="border-b">
                                    <th class="text-left p-3 px-5">Jenis Surat</th>
                                    <th class="text-left p-3 px-5">Nama</th>
                                    <th class="text-left p-3 px-5">NIK</th>
                                    <th class="text-left p-3 px-5">Status</th>
                                    <th></th>
                                </tr>
                                @foreach ($surats as $surat)
                                    
                                
                                <tr class="border-b hover:bg-orange-100 bg-gray-100">
                                    <td class="p-3 px-5">{{$surat->jenis_surat}}</td>
                                    <td class="p-3 px-5">{{$surat->name}}</td>
                                    <td class="p-3 px-5">{{$surat->nik}}</td>
                                    <td class="p-3 px-5">{{$surat->status}}</td>
                                    <td class="p-3 px-5 flex justify-end"><a href="/inputs/{{$surat->id}}" type="button" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Detail</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</x-app-layout>