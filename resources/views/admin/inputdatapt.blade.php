<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{($title)}}
        </h2>
    </x-slot>
    <h1 class="text-3xl text-black pb-6">Tambah Data</h1>
        <form action="{{(isset($purnama_tilem))?route('purnama_tilem.update', $purnama_tilem->id):route('purnama_tilem.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @if (isset($purnama_tilem))
                @method('PUT')
            @endif
            <div class="shadow sm:rounded-md sm:overflow-hidden">
              <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                <div class="grid grid-cols-3 gap-6">
                  <div class="col-span-3 sm:col-span-2">
                    <label class="block text-sm font-medium text-gray-700">
                      Nama
                    </label>
                    <div class="mt-1 flex rounded-md shadow-sm">
                      <input type="text" name="Nama" value="{{(isset($purnama_tilem))?$purnama_tilem->Nama:old('Nama')}}" class="@error('Nama') @enderror focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                    </div>
                    <div class="text-xs text-red-600"> @error('Nama') {{$message}} @enderror</div>
                  </div>
                </div>
    
                      <div class="grid grid-cols-3 gap-6">
                        <div class="col-span-3 sm:col-span-2">
                          <label class="block text-sm font-medium text-gray-700">
                            Januari
                          </label>
                          <div class="mt-1 flex rounded-md shadow-sm">
                            <input type="text" name="Januari" value="{{(isset($purnama_tilem))?$purnama_tilem->Januari:old('Januari')}}" class="@error('Januari') @enderror focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                          </div>
                          <div class="text-xs text-red-600"> @error('Januari') {{$message}} @enderror</div>
                        </div>
                      </div>
                
                          <div class="grid grid-cols-3 gap-6">
                            <div class="col-span-3 sm:col-span-2">
                              <label class="block text-sm font-medium text-gray-700">
                                Februari
                              </label>
                              <div class="mt-1 flex rounded-md shadow-sm">
                                <input type="text" name="Februari" value="{{(isset($purnama_tilem))?$purnama_tilem->Februari:old('Februari')}}" class="@error('Februari') @enderror focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                              </div>
                              <div class="text-xs text-red-600"> @error('Februari') {{$message}} @enderror</div>
                            </div>
                          </div>

                           <div class="grid grid-cols-3 gap-6">
                            <div class="col-span-3 sm:col-span-2">
                              <label class="block text-sm font-medium text-gray-700">
                                Maret
                              </label>
                              <div class="mt-1 flex rounded-md shadow-sm">
                                <input type="text" name="Maret" value="{{(isset($purnama_tilem))?$purnama_tilem->Maret:old('Maret')}}" class="@error('Maret') @enderror focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                              </div>
                              <div class="text-xs text-red-600"> @error('Maret') {{$message}} @enderror</div>
                            </div>
                          </div>

                          <div class="grid grid-cols-3 gap-6">
                            <div class="col-span-3 sm:col-span-2">
                              <label class="block text-sm font-medium text-gray-700">
                                April
                              </label>
                              <div class="mt-1 flex rounded-md shadow-sm">
                                <input type="text" name="April" value="{{(isset($purnama_tilem))?$purnama_tilem->April:old('April')}}" class="@error('April') @enderror focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                              </div>
                              <div class="text-xs text-red-600"> @error('April') {{$message}} @enderror</div>
                            </div>
                          </div>

                          <div class="grid grid-cols-3 gap-6">
                            <div class="col-span-3 sm:col-span-2">
                              <label class="block text-sm font-medium text-gray-700">
                                Mei
                              </label>
                              <div class="mt-1 flex rounded-md shadow-sm">
                                <input type="text" name="Mei" value="{{(isset($purnama_tilem))?$purnama_tilem->Mei:old('Mei')}}" class="@error('Mei') @enderror focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                              </div>
                              <div class="text-xs text-red-600"> @error('Mei') {{$message}} @enderror</div>
                            </div>
                          </div>

                          <div class="grid grid-cols-3 gap-6">
                            <div class="col-span-3 sm:col-span-2">
                              <label class="block text-sm font-medium text-gray-700">
                                Juni
                              </label>
                              <div class="mt-1 flex rounded-md shadow-sm">
                                <input type="text" name="Juni" value="{{(isset($purnama_tilem))?$purnama_tilem->Juni:old('Juni')}}" class="@error('Juni') @enderror focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                              </div>
                              <div class="text-xs text-red-600"> @error('Juni') {{$message}} @enderror</div>
                            </div>
                          </div>

                          <div class="grid grid-cols-3 gap-6">
                            <div class="col-span-3 sm:col-span-2">
                              <label class="block text-sm font-medium text-gray-700">
                                Juli
                              </label>
                              <div class="mt-1 flex rounded-md shadow-sm">
                                <input type="text" name="Juli" value="{{(isset($purnama_tilem))?$purnama_tilem->Juli:old('Juli')}}" class="@error('Juli') @enderror focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                              </div>
                              <div class="text-xs text-red-600"> @error('Juli') {{$message}} @enderror</div>
                            </div>
                          </div>

                          <div class="grid grid-cols-3 gap-6">
                            <div class="col-span-3 sm:col-span-2">
                              <label class="block text-sm font-medium text-gray-700">
                                Agustus
                              </label>
                              <div class="mt-1 flex rounded-md shadow-sm">
                                <input type="text" name="Agustus" value="{{(isset($purnama_tilem))?$purnama_tilem->Agustus:old('Agustus')}}" class="@error('Agustus') @enderror focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                              </div>
                              <div class="text-xs text-red-600"> @error('Agustus') {{$message}} @enderror</div>
                            </div>
                          </div>

                          <div class="grid grid-cols-3 gap-6">
                            <div class="col-span-3 sm:col-span-2">
                              <label class="block text-sm font-medium text-gray-700">
                                September
                              </label>
                              <div class="mt-1 flex rounded-md shadow-sm">
                                <input type="text" name="September" value="{{(isset($purnama_tilem))?$purnama_tilem->September:old('September')}}" class="@error('September') @enderror focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                              </div>
                              <div class="text-xs text-red-600"> @error('September') {{$message}} @enderror</div>
                            </div>
                          </div>

                          <div class="grid grid-cols-3 gap-6">
                            <div class="col-span-3 sm:col-span-2">
                              <label class="block text-sm font-medium text-gray-700">
                                Oktober
                              </label>
                              <div class="mt-1 flex rounded-md shadow-sm">
                                <input type="text" name="Oktober" value="{{(isset($purnama_tilem))?$purnama_tilem->Oktober:old('Oktober')}}" class="@error('Oktober') @enderror focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                              </div>
                              <div class="text-xs text-red-600"> @error('Oktober') {{$message}} @enderror</div>
                            </div>
                          </div>

                          <div class="grid grid-cols-3 gap-6">
                            <div class="col-span-3 sm:col-span-2">
                              <label class="block text-sm font-medium text-gray-700">
                                November
                              </label>
                              <div class="mt-1 flex rounded-md shadow-sm">
                                <input type="text" name="November" value="{{(isset($purnama_tilem))?$purnama_tilem->November:old('November')}}" class="@error('November') @enderror focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                              </div>
                              <div class="text-xs text-red-600"> @error('November') {{$message}} @enderror</div>
                            </div>
                          </div>

                          <div class="grid grid-cols-3 gap-6">
                            <div class="col-span-3 sm:col-span-2">
                              <label class="block text-sm font-medium text-gray-700">
                                Desember
                              </label>
                              <div class="mt-1 flex rounded-md shadow-sm">
                                <input type="text" name="Desember" value="{{(isset($purnama_tilem))?$purnama_tilem->Desember:old('Desember')}}" class="@error('Desember') @enderror focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                              </div>
                              <div class="text-xs text-red-600"> @error('Desember') {{$message}} @enderror</div>
                            </div>
                          </div>
                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                  Save
                </button>
              </div>
            </div>
          </form>
</x-admin-layout>
