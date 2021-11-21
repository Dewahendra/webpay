<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{($title)}}
        </h2>
    </x-slot>

    <h1 class="text-3xl text-black pb-6">Suka Duka</h1>

    <div class="flex flex-col">
      <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
          <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
            <table class="min-w-full divide-y divide-gray-200">
              <thead class="bg-gray-50">
                <tr>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Pilih
                  </th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    No
                  </th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Nama
                  </th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Januari
                  </th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Februari
                  </th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Maret
                  </th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    April
                  </th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Mei
                  </th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Juni
                  </th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Juli
                  </th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Agustus
                  </th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    September
                  </th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Oktober
                  </th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    November
                  </th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Desember
                  </th>
                  <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Aksi
                  </th>
                </tr>
              </thead>
              <tbody class="bg-white divide-y divide-gray-200">
                <div class="col-span-6 p-4 flex justify-end">
                  <form action="{{route('suka_duka.index')}}" method="GET">
                  <input type="search" name="search" value="{{(isset($_GET['search']))?$_GET['search']:''}}" class="px-4 py-2 focus:ring-indigo-500 focus:border-indigo-500 rounded-none rounded-1-md sm:text-sm border-gray-300" placeholder="Cari...">
                  <button class="rounded-r-md border border-1-0 px-4 py-1 border-gray-300 bg-gray-50 text-gray-500 hover:text-white hover:bg-blue-600" type="submit">Cari</button>
                  </form>
                </div>
                <div class="shadow px-6 py-4 bg-gray-50 rounded sm:px-1 sm:py-1">
                  <div class="grid grid-cols-12">
                      <div class="col-span-6 p-4">
                          <a href="{{route('suka_duka.create')}}"><button class="px-4 py-1 text-sm rounded text-purple-600 font-semibold border border-purple-400 hover:text-white hover:bg-purple-600 hover:border-transparent focus:outline-none">Tambah Data</button></a>
                <?php $No=1;?>
                @foreach ($suka_duka as $item)
            
                <tr>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                    <input type="checkbox" name="" id="">{{$item->Pilih}}
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                    {{$No}}
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap">
                  <div class="text-sm font-medium text-gray-900">{{$item->Nama}}</div>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">{{$item->Januari}}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                      <div class="text-sm text-gray-900">
                        {{$item->Februari}}
                      </div>
                      <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">
                          {{$item->Maret}}
                        </div>
                        <td class="px-6 py-4 whitespace-nowrap">
                          <div class="text-sm text-gray-900">
                            {{$item->April}}
                          </div>
                          <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">
                              {{$item->Mei}}
                            </div>
                            <td class="px-6 py-4 whitespace-nowrap">
                              <div class="text-sm text-gray-900">
                                {{$item->Juni}}
                              </div>
                              <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">
                                  {{$item->Juli}}
                                </div>
                                <td class="px-6 py-4 whitespace-nowrap">
                                  <div class="text-sm text-gray-900">
                                    {{$item->Agustus}}
                                  </div>
                                  <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">
                                      {{$item->September}}
                                    </div>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                      <div class="text-sm text-gray-900">
                                        {{$item->Oktober}}
                                      </div>
                                      <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">
                                          {{$item->November}}
                                        </div>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                          <div class="text-sm text-gray-900">
                                            {{$item->Desember}}
                                          </div>
                  </td>
                  <form action="{{route('suka_duka.destroy', $item->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                  <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                    <a href="{{route('suka_duka.edit', $item->id)}}" class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-indigo-500 text-white hover:text-white">Edit</a>
                    <button type="submit" class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-500 text-white hover:text-white">Hapus</button>
                  </form>
                  </td>
                </tr>

                <?php $No++; ?>
                @endforeach
                {{$suka_duka->appends(['search' => request()->query('search')])->links()}}
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</x-admin-layout>
