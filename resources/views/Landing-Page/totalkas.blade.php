@include('layouts.Landing_Page.header')
@include('layouts.Landing_Page.navbar')

<!--Main-->
<form class="bg-gray-900 w-full shadow-lg rounded-lg px-8 pt-6 pb-8 mb-4">
    <div class="mb-4">
      <label class="block text-white py-2 font-bold mb-2 text-center">
    TOTAL KAS
      </label>
      </div>
      <div class="flex items-center justify-between text-center px-2 pt-4">
        <label
        class="bg-gradient-to-r from-purple-800 to-green-500 hover:from-pink-500 hover:to-green-500 text-white font-bold py-4 px-8 mr-4 rounded focus:ring" 
        >2021  Rp16.850.000,00
        </label>
        <label
        class="bg-gradient-to-r from-purple-800 to-green-500 hover:from-pink-500 hover:to-green-500 text-white font-bold py-4 px-8 mr-4  rounded focus:ring" 
        >2020 Rp14.050.000,00
        </label>
        <label
        class="bg-gradient-to-r from-purple-800 to-green-500 hover:from-pink-500 hover:to-green-500 text-white font-bold py-4 px-8 mr-4  rounded focus:ring" 
        >2019 Rp13.000.000,00
        </label>
        <label
        class="bg-gradient-to-r from-purple-800 to-green-500 hover:from-pink-500 hover:to-green-500 text-white font-bold py-4 px-8 mr-4  rounded focus:ring" 
        >2018 Rp12.500.000,00
        </label>
        <label
        class="bg-gradient-to-r from-purple-800 to-green-500 hover:from-pink-500 hover:to-green-500 text-white font-bold py-4 px-8 mr-4  rounded focus:ring" 
        >2017 Rp10.000.000,00
        </label>
        <label
        class="bg-gradient-to-r from-purple-800 to-green-500 hover:from-pink-500 hover:to-green-500 text-white font-bold py-4 px-8 mr-4  rounded focus:ring" 
        >2016 Rp8.400.000,00
        </label>
  </div>
  <div class="flex items-center justify-end pt-6">
    <a
      class="bg-gradient-to-r from-purple-800 to-green-500 hover:from-pink-500 hover:to-green-500 text-white font-bold py-2 px-4 rounded focus:ring transform transition hover:scale-105 duration-300 ease-in-out"
      href="index.html">
      Tahun Sebelumnya
   </a>
  </div>
  </form>

  @include('layouts.Landing_Page.footer')