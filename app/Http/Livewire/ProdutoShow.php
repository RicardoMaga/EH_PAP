<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Produto;

class ProdutoShow extends Component
{
 public $modelId;

    public $categoria;
    public $sub_categoria;
    public $marca;
    public $preco;
    public $modelo;
    public $dimensoes;
    public $uso;
    public $featuredImage;
    public $estado;


    public function render()
    {


        return view('livewire.produto-show',[
            'data'=>Produto::whereEstado('disponivel')->get(),
        ]);
    }
}
