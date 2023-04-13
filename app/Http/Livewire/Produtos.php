<?php

namespace App\Http\Livewire;
use Livewire\Component;
use App\Models\Produto;
use Livewire\WithFileUploads;
use Livewire\WithPagination;    


class Produtos extends Component
{
    use WithFileUploads;
    use WithPagination;
    public $categoria;
    public $sub_categoria;
    public $marca;
    public $preco;
    public $modelo;
    public $dimensoes;
    public $uso;
    public $featuredImage;
    public $estado;
    public $modelId;
    public $modalFormVisible=false;
    public $modalConfirmDeleteVisible;
    
    public $search='';

    public function render()
    {
        return view('livewire.produtos',['data'=>$this->read()]);
    }
    
    public function read()
    {
        return Produto::where('categoria','like','%'.$this->search.'%')->orderby('id','DESC')->paginate(20);
    }
 //regras de inserçao na base de dados
    public function rules(){
        
        return[
            'categoria'=>'required',
            'sub_categoria' => 'required',
            'modelo'=>'required',
            'preco'=>'required',
            'marca'=>'required',
            'dimensoes'=>'required',
            'uso'=>'required',
            'featuredImage' => 'image',
            'estado' => 'required'
            
        

        ];
        
    
    }
// Mapear o modelo do componente
    public function modelData(){
        
        return[
            'categoria' => $this->categoria,
            'sub_categoria' => $this->sub_categoria,
            'modelo' => $this->modelo,
            'preco' => $this->preco,
            'marca' => $this->marca,
            'dimensoes' => $this->dimensoes,
            'uso' => $this->uso,
            'estado' => $this->estado,
            'featured_image' => $this->featuredImage-> hashName()
            
            
        ];
        
    }
//carregar o modelo
    public function loadModel(){
        $data=Produto::find($this->modelId);
        $this->categoria=$data->categoria;
        $this->sub_categoria=$data->sub_categoria;
        $this->modelo=$data->modelo;
        $this->preco=$data->preco;
        $this->marca=$data->marca;
        $this->dimensoes=$data->dimensoes;
        $this->uso=$data->uso;
        $this->estado=$data->estado;
        $this->featuredImage=$data->featuredImage;

    }
    //guardar
    public function create()
    {
       

       $this->validate();

       if (!empty($this->featuredImage)){
        $this->featuredImage->store('public/photos');
    }

       Produto::create($this->modelData());
        $this->modalFormVisible = false;
        $this->reset();

    }
    

    public function update()
    {
        $this->validate();

        if (!empty($this->featuredImage)){
            $this->featuredImage->store('public/photos');
        }

        Produto::find($this->modelId)->update($this->modelData());
        $this->modalFormVisible = false;

        
    }

    public function delete()
    {
         Produto::destroy($this->modelId);
        $this->modalConfirmDeleteVisible = false;
        $this->resetPage();

    }

   
    // Cria o modal de criar 

    public function createShowModal()
    {
        $this->resetValidation();
        $this->reset();
        $this->modalFormVisible = true;
    }


    //cria o modal de editar

    public function updateShowModal($id)
    {
        $this->resetValidation();
        $this->reset();
        $this->modalFormVisible = true;
        $this->modelId = $id;
        $this->loadModel();
    }

    //cria o modal de delete
    public function deleteShowModal($id)
    {
        $this->modelId = $id;
        $this->modalConfirmDeleteVisible = true;
    }



}

