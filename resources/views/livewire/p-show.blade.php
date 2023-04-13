<div>


<div class="p-4 mb-4 pr-4 text-sm text-blue-800 rounded-lg bg-white dark:bg-white dark:text-blue-400">
<p class="text-3xl text-black">{{$item->nome}}</p> 
  <p class="text-2xl text-black">{{ $p->Subcategorias->nome }}  </p>
<p class="text-xl text-black"> {{ $p->marca }}  </p>  
<p>
  @if (!empty($p->featured_image ))
                                <img style="width: 340.699px; height: 362px; margin: 10.9px 22.0px;" src="{{url('storage/photos/'. $p->featured_image)}}"/>
                                   @else
                                   Nenhuma Foto Disponivel
   
                                @endif
  </p>
  <p class="text-xl text-red-600">{{$p->preco}}</p>
  <p class="text-l text-black">Uso: {{$p->uso}}</p>
  <p class="text-l text-black">Modelo: {{ $p->modelo }}</p> 
  <p class="text-l text-black">Dimensões: {{ $p->dimensoes }}</p> 
  <p class="text-3xl text-black">{{ $p->estado }}</p>


  <br>
Contacte o número --- --- --- para Comprar/Reservar o item
</div>

    
</div>
