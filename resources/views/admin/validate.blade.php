<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detail Surat') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <!-- This example requires Tailwind CSS v2.0+ -->
                <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                    <div class="px-4 py-5 sm:px-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">
                            Informasi Surat
                        </h3>
                        <p class="mt-1 max-w-2xl text-sm text-gray-500">
                            Detail informasi pengajuan validasi surat.
                        </p>
                    </div>
                    <div class="border-t border-gray-200">
                        <dl>
                            <div class="bg-white-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">
                                    Jenis Surat
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    {{$surat->jenis_surat}}
                                </dd>
                            </div>
                            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">
                                    Nama
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    {{$surat->name}}
                                </dd>
                            </div>
                            <div class="bg-white-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">
                                    NIK
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    {{ $surat->jenis_kelamin}}
                                </dd>
                            </div>
                            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">
                                    Tempat, Tanggal Lahir
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    {{$surat->tempat_lhr}} ,{{$surat->tgl_lhr}}
                                </dd>
                            </div>
                            <div class="bg-white-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">
                                    Agama
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    {{$surat->agama}}
                                </dd>
                            </div>
                            <div class="bg-white-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">
                                    Warga Negara
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    {{$surat->warga_negara}}
                                </dd>
                            </div>
                            <div class="bg-white-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">
                                    Pekerjaan
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    {{$surat->pekerjaan}}
                                </dd>
                            </div>
                            <div class="bg-white-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">
                                    Alamat
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    {{$surat->alamat}}
                                </dd>
                            </div>
                            <div class="bg-white-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">
                                    Keperluan
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    {{$surat->keperluan}}
                                </dd>
                            </div>
                            <div class="bg-white-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">
                                  Status Verifikasi
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                  {{$surat->status}}
                                </dd>
                              </div>
                              <div class="bg-white-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">
                                  No Registrasi
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                  {{$surat->no_regis}}
                                </dd>
                              </div>
                            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">
                                    Attachments
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    <ul class="border border-gray-200 rounded-md divide-y divide-gray-200">
                                        <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">
                                            <div class="w-0 flex-1 flex items-center">
                                                <!-- Heroicon name: solid/paper-clip -->
                                                <svg class="flex-shrink-0 h-5 w-5 text-gray-400"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                    fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                                <span class="ml-2 flex-1 w-0 truncate">
                                                    {{$surat->file_path}}
                                                </span>
                                            </div>
                                            <div class="ml-4 flex-shrink-0">
                                                <a href="{{ route('admin.validate.download', $surat->file_path) }}" class="font-medium text-indigo-600 hover:text-indigo-500">
                                                    Download
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </dd>
                            </div>
                            <div>
                                <button class="bg-green-500 text-white active:bg-green-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1" type="button" style="transition: all .15s ease" onclick="toggleModal('modal-id')">
                                    Open regular modal
                                  </button>
                                  <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="modal-id">
                                    <div class="relative w-auto my-6 mx-auto max-w-3xl">
                                      <!--content-->
                                      <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                                        <!--header-->
                                        <div class="flex items-start justify-between p-5 border-b border-solid border-gray-300 rounded-t">
                                          <h3 class="text-3xl font-semibold">
                                            Validasi Surat
                                          </h3>
                                          <button class="p-1 ml-auto bg-transparent border-0 text-black opacity-5 float-right text-3xl leading-none font-semibold outline-none focus:outline-none" onclick="toggleModal('modal-id')">
                                            <span class="bg-transparent text-black opacity-5 h-6 w-6 text-2xl block outline-none focus:outline-none">
                                              X
                                            </span>
                                          </button>
                                        </div>
                                        <!--body-->
                                        <div class="relative p-6 flex-auto">
                                          <form class="pt-6 pb-6 my-8 leading-relaxed" action="" method="post" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                                <x-input_text field="no_regis" label="No registrasi" placeholder="{{$surat->no_regis}}" />
                                                <x-upload_file />
                                            </div>
                                        </div>
                                        <!--footer-->
                                        <div class="flex items-center justify-end p-6 border-t border-solid border-gray-300 rounded-b">
                                          <button class="text-red-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1" type="button" style="transition: all .15s ease" onclick="toggleModal('modal-id')">
                                            Close
                                          </button>
                                          <button class="bg-green-500 text-white active:bg-green-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1" type="button" style="transition: all .15s ease" onclick="toggleModal('modal-id')">
                                            Save Changes
                                          </button>
                                        </form>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-id-backdrop"></div>
                            </div>
                        </dl>        
                    </div>              
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<script type="text/javascript">
    function toggleModal(modalID){
      document.getElementById(modalID).classList.toggle("hidden");
      document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
      document.getElementById(modalID).classList.toggle("flex");
      document.getElementById(modalID + "-backdrop").classList.toggle("flex");
    }
  </script>