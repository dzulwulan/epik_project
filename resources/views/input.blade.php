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
                                            <select id="jenis_surat" name="jenis_surat" autocomplete="country"
                                                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                <option>SKTM</option>
                                                <option>Surat Domisili</option>
                                            </select>
                                        </div>
                                    </div>
                                    <x-input_text field="name" label="Nama Pemohon"/>
                                    <x-input_text field="nik" label="NIK"/>
                                    <x-input_text field="pekerjaan" label="Pekerjaan"/>
                                        <div class="shadow sm:rounded-md sm:overflow-hidden">
                                            <label for="alamat" class="block text-sm font-medium text-gray-700">
                                                Alamat
                                            </label>
                                            <div class="mt-1">
                                                <textarea id="alamat" name="alamat" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="alamat"></textarea>
                                            </div>
                                        </div>
                                        <x-input_text field="keperluan" label="Keperluan"/>
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700">
                                                Upload file surat
                                            </label>
                                            <div
                                                class="mt-2 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                                <div class="space-y-1 text-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor"
                                                        fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                                        <path
                                                            d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                    <div class="flex text-sm text-gray-600">
                                                        <label for="file-upload"
                                                            class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                                            <span>Upload a file</span>
                                                            <input id="file-upload" name="file-upload" type="file"
                                                                class="sr-only">
                                                        </label>
                                                        <p class="pl-1">atau drag dan drop</p>
                                                    </div>
                                                    <p class="text-xs text-gray-500">
                                                        upload file docx file maksimal 10MB
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
