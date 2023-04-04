<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Produto;
use App\Models\Categoria;

class ProdutoShow extends Component
{
 

    public $categoria, $modelId;
    public $sub_categoria;
    public $marca;
    public $preco;
    public $modelo;
    public $dimensoes;
    public $uso;
    public $featured_Image;
    public $estado;

    public $search='';






    public function render()
    {
      $categorias = Categoria::with('produtos')->where('nome','like','%'.$this->search.'%')->get();

        return view('livewire.produto-show',[
            'data'=>$categorias
        ]);
    }

    
}
