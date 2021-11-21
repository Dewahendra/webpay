@include('layouts.Landing_Page.header')
@include('layouts.Landing_Page.navbar')

<form class="bg-gray-900 w-full shadow-lg rounded-lg px-8 pt-6 pb-8 mb-4">
    <div class="mb-4">
      <label class="block text-white py-2 font-bold mb-2 text-center">
        PURNAMA-TILEM
      </label>
    </div>

    <div class="flex items-center justify-between pt-4">
      <a
        class="bg-gradient-to-r from-purple-800 to-green-500 hover:from-pink-500 hover:to-green-500 text-white font-bold py-2 px-4 rounded focus:ring transform transition hover:scale-105 duration-300 ease-in-out"
        href="blank.404">
        Bayar Sekarang
     </a>
    </div>
  </form>

@include('layouts.Landing_Page.footer')