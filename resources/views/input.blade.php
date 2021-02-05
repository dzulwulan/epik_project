<x-app-layout>
    @section('title','Input Surat Baru')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Input Validasi Surat Baru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div>
                    <div class="md:grid md:grid-cols-3 md:gap-6">
                        <div class="md:col-span-1">
                            <div class="px-8 pt-10 sm:px-3">
                                <h3 class="text-lg font-medium leading-6 text-gray-900">Input Surat Baru</h3>
                                <p class="mt-1 text-sm text-gray-600">
                                    Isi data surat sesuai dengan data sebenarnya
                                </p>
                            </div>
                        </div>
                        <div class="mt-5 md:mt-0 md:col-span-2">
                            <form action="#" method="Post">
                                @csrf
                                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                    <div class="shadow sm:rounded-md sm:overflow-hidden">
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="jenis_surat"
                                                class="block text-sm font-medium text-gray-700">Jenis Surat</label>
                                            <select id="jenis_surat" name="jenis_surat"
                                                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                <option value="SKTM">SKTM</option>
                                                <option value="Surat Domisili">Surat Domisili</option>
                                            </select>
                                        </div>
                                    </div>
                                    <x-input_text field="name" label="Nama Pemohon" />
                                    <div class="shadow sm:rounded-md sm:overflow-hidden">
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="jenis_surat"
                                                class="block text-sm font-medium text-gray-700">Jenis Kelamin</label>
                                            <select id="gender" name="gender"
                                                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                <option value="Perempuan">PEREMPUAN</option>
                                                <option value="Laki-laki">LAKI-LAKI</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="shadow sm:rounded-md sm:overflow-hidden">
                                        <div class="col-span-3 sm:col-span-2">
                                            <div class="col-span-2 sm:col-span-4">
                                                <label for="tempat_lahir"
                                                    class="block text-sm font-medium text-gray-700">Kota Lahir</label>
                                                <input type="text" name="tempat_lahir" id="tempat_lahir"
                                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                                    placeholder="BATANG">
                                            </div>
                                        </div>
                                        <x-datepicker />
                                    </div>
                                    <x-input_text field="nasionaliti" label="Warga Negara" />
                                    <x-input_text field="nik" label="NIK" />
                                    <x-input_text field="agama" label="Agama" />
                                    <x-input_text field="pekerjaan" label="Pekerjaan" />
                                    <x-text_area />
                                    <x-input_text field="keperluan" label="Keperluan" />
                                    <x-upload_file />
                                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                        <button type="submit"
                                            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                            Save
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
