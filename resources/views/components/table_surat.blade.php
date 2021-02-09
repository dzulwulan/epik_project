<!-- component -->
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
                @foreach ($surat as $item)
                    
                
                <tr class="border-b hover:bg-orange-100 bg-gray-100">
                    <td class="p-3 px-5">{{$item['jenis_surat']}}</td>
                    <td class="p-3 px-5">{{$item['name']}}</td>
                    <td class="p-3 px-5">{{$item['nik']}}</td>
                    <td class="p-3 px-5">{{$item['status']}}</td>
                    <td class="p-3 px-5 flex justify-end"><button type="button" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Save</button><button type="button" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>