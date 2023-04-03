<div>

    <div class="grid grid-cols-3 gap-2">

    @foreach ($data as $item)

    
      <livewire:p-show :item="$item" key="{{$item->id}}"/>


    @endforeach 

    </div>
</div>
