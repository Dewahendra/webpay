@include('layouts.Landing_Page.header')
      
@include('layouts.Landing_Page.navbar')

      <!--Main-->
      <div class="container pt-24 md:pt-36 mx-auto flex flex-wrap flex-col md:flex-row items-center">
        <!--Left Col-->
        <div class="flex flex-col w-full xl:w-2/5 justify-center lg:items-start overflow-y-hidden">
          <h1 class="my-2 mb-10 text-3xl md:text-5xl text-white font-bold leading-tight text-center md:text-left">
            WARIH IDA I DEWA GEDONG ARTHA
          </h1>
          <form class="bg-gray-900 w-full shadow-lg rounded-lg px-8 pt-6 pb-8 mb-4">
            <div class="mb-4">
              <label class="block text-blue-300 py-2 font-bold mb-2" for="emailaddress">
                Pembayaran
              </label>
            </div>

            <div class="flex items-center justify-between pt-4">
              <a
                class="bg-gradient-to-r from-purple-800 to-green-500 hover:from-pink-500 hover:to-green-500 text-white font-bold py-2 px-4 rounded focus:ring transform transition hover:scale-105 duration-300 ease-in-out"
                href="http://127.0.0.1:8000/userpurnama_tilem"
                >Purnama-Tilem
            </a>
            <a
                class="bg-gradient-to-r from-purple-800 to-green-500 hover:from-pink-500 hover:to-green-500 text-white font-bold py-2 px-4 rounded focus:ring transform transition hover:scale-105 duration-300 ease-in-out"
                href="http://127.0.0.1:8000/usersuka_duka"
                >Suka Duka
            </a>
            <a
                class="bg-gradient-to-r from-purple-800 to-green-500 hover:from-pink-500 hover:to-green-500 text-white font-bold py-2 px-4 rounded focus:ring transform transition hover:scale-105 duration-300 ease-in-out"
                href="http://127.0.0.1:8000/userdana_punia"
                >Dana Punia
            </a>
            </div>
          </form>

          <form class="bg-gray-900 w-full shadow-lg rounded-lg px-8 pt-6 pb-8 mb-4">
            <div class="mb-4">
              <label class="block text-blue-300 py-2 font-bold mb-2" for="emailaddress">
                Tentang
              </label>
            </div>

            <div class="flex items-center justify-between pt-4">
              <a
                class="bg-gradient-to-r from-purple-800 to-green-500 hover:from-pink-500 hover:to-green-500 text-white font-bold py-2 px-4 rounded focus:ring transform transition hover:scale-105 duration-300 ease-in-out"
                href="index.html"
                >Struktur Anggota
            </a>
            <a
                class="bg-gradient-to-r from-purple-800 to-green-500 hover:from-pink-500 hover:to-green-500 text-white font-bold py-2 px-4 rounded focus:ring transform transition hover:scale-105 duration-300 ease-in-out"
                href="http://127.0.0.1:8000/totalkas"
                >Total Kas
            </a>
            <a
                class="bg-gradient-to-r from-purple-800 to-green-500 hover:from-pink-500 hover:to-green-500 text-white font-bold py-2 px-4 rounded focus:ring transform transition hover:scale-105 duration-300 ease-in-out"
                href="index.html"
                >Pengeluaran
            </a>
            </div>
          </form>
        </div>

        <!--Right Col-->
        <div class="w-full xl:w-3/5 p-12 overflow-hidden">
          <img class="mx-auto w-full md:w-4/5 transform -rotate-6 transition hover:scale-105 duration-700 ease-in-out hover:rotate-6" src="assets/Landing-Page/WIZARD.png" />
        </div>
        
@include('layouts.Landing_Page.footer')