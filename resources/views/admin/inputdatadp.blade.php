<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{($title)}}
        </h2>
    </x-slot>
    <h1 class="text-3xl text-black pb-6">Tambah Data</h1>
        <form action="{{(isset($dana_punia))?route('dana_punia.update', $dana_punia->id):route('dana_punia.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @if (isset($dana_punia))
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
                      <input type="text" name="Nama" value="{{(isset($dana_punia))?$dana_punia->Nama:old('Nama')}}" class="@error('Nama') @enderror focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                    </div>
                    <div class="text-xs text-red-600"> @error('Nama') {{$message}} @enderror</div>
                  </div>
                </div>
    
                      <div class="grid grid-cols-3 gap-6">
                        <div class="col-span-3 sm:col-span-2">
                          <label class="block text-sm font-medium text-gray-700">
                            Jumlah
                          </label>
                          <div class="mt-1 flex rounded-md shadow-sm">
                            <input type="text" name="Jumlah" value="{{(isset($dana_punia))?$dana_punia->Jumlah:old('Jumlah')}}" class="@error('Jumlah') @enderror focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                          </div>
                          <div class="text-xs text-red-600"> @error('Jumlah') {{$message}} @enderror</div>
                        </div>
                      </div>
                
                          <div class="grid grid-cols-3 gap-6">
                            <div class="col-span-3 sm:col-span-2">
                              <label class="block text-sm font-medium text-gray-700">
                                Keterangan
                              </label>
                              <div class="mt-1 flex rounded-md shadow-sm">
                                <input type="date" name="Keterangan" value="{{(isset($dana_punia))?$dana_punia->Keterangan:old('Keterangan')}}" class="@error('Keterangan') @enderror focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                              </div>
                              <div class="text-xs text-red-600"> @error('Keterangan') {{$message}} @enderror</div>
                            </div>
                          </div>
                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                  Save
                </button>
              </div>
            </div>
          </form>
</x-admin-layout>
