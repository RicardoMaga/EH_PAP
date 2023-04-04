<x-app-layout>
<div class="bg-gradient-to-r from-green-700 to-lime-500 w h-19">
 <a href="/" class="text-3xl pt-7 pr-7 pl-7 pb-4 hover:bg-gray-800 text-white">ElectroHouse</a>
    
        <button class="pt-4 pr-2 pl-2 pb-4 text-lg  text-white rounded-none hover:bg-gray-800 "><a
                href="/comprar">Comprar</a></button>

        <button class="pt-4 pr-2 pl-2 pb-4 text-lg text-white rounded-none hover:bg-gray-800 "><a
                href="/reservas">Reservas</a></button>

        <button class="pt-4 pr-2 pl-2 pb-4 text-lg  text-white rounded-none hover:bg-gray-800 "><a
                href="/contactos">Contacto</a></button>

        <a class="pr-10 pl-10">
            <input type="text"
                class=" pl-3 py-2 px-1 w-1/3 rounded shadow font-thin focus:outline-none focus:shadow-lg focus:shadow-slate-200 duration-100 shadow-gray-100"
                placeholder="Pesquisar...">
        </a>
        @if (!Auth::User())
            <button
                class=" pt-4 pr-4 pl-5 pb-4 text-lg text-white rounded-none absolute right-0 top-0 hover:bg-gray-800 "><a
                    href="/login">Iniciar Sessão</a></button>
        @else
            <button
                class=" pt-4 pr-4 pl-5 pb-4 text-lg text-white rounded-none absolute right-0 top-0 hover:bg-gray-800 "><a
                    href="/logout">Encerrar Sessão</a></button>
        @endif
        <div class="bg-white h-screen w-full">
  
    <div class="bg-white h-screen w-full">

          <div class=" text-3xl flex justify-center">
             Informações
          </div>

              <div class=" border-3 ml-2 mr-2 h-1 rounded bg-black">
                  <div class="flex pt-5 justify-center">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1785.989101306456!2d-8.615670262921197!3d41.163689816298714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd246453331c6779%3A0x4acafb2087c2badd!2sR.%20do%20Padre%20Jos%C3%A9%20Pacheco%20do%20Monte%2C%20Porto!5e0!3m2!1spt-PT!2spt!4v1671634626881!5m2!1spt-PT!2spt" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  
                  <div class="px-2 pr-2 p l-2 pb-2 text-lg">
                  
                   <div class="container my-1 px-9 mx-auto">

                         </div> 
                         <br><br>
                        <div> 
@livewire('contactos')

</div>

</x-app-layout>