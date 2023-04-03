<div>


<div class="p-4 mb-4 pr-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-200 dark:text-blue-400">
<p class="text-xl text-black">{{$item->Categorias->nome}}</p> 
<p class="text-l text-black">{{ $item->Subcategorias->nome }}</p>  

  @if (!empty($item->featured_image))
                                <img style="width: 400.699px; height: 302px; margin: 14.9px 0px;" src="{{url('storage/photos/'. $item->featured_image)}}"/>
                                   @else
                                   Nenhuma Foto Disponivel
                                   @endif
  
  <p class="text-l text-black">Idade: {{$item->uso}}</p>  
  <br>
  <button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 ali">Comprar</button>
  <button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 ali">Reservar</button><p class="text-xl text-align: right text-red-600">{{$item->preco}}</p>

</div>

    
</div>
