<?php

namespace App\Http\Livewire;
use app\Models\contacto;
use Livewire\WithPagination;
use Livewire\Component;


class Contactos extends Component
{

    use WithPagination;
    public $nome;
    public $nº_de_telemovel;
    public $email;
    public $mensagem;
    public $modelId;
    public $modalFormVisible=false;
    public $modalConfirmDeleteVisible;

    

    public function rules(){
        return[
            'nome'=> 'requried',
            'nº de telemovel'=>'required',
            'email'=>'required',
            'mensagem'=>'required'


        ];
    

    }
    // Mapear o modelo do componente
    public function modelData(){
        return[
            'nome' => $this->nome,
            'nº de telemovel' => $this->nº_de_telemovel,
            'email' => $this->email,
            'mensagem' => $this->mensagem,
            
        ];

      }

      //carregar o modelo
    public function loadModel(){
        $data=Contacto::find($this->modelId);
        $this->nome=$data->nome;
        $this->nº_de_telemovel=$data->nº_de_telemovel;
        $this->email=$data->email;
        $this->mensagem=$data->mensagem;
    }

      public function create()
      {

         $this->validate();
         Contacto::create($this->modelData());
          $this->modalFormVisible = false;
          $this->reset();
  
      }

      public function update()
    {
        $this->validate();
        Contacto::find($this->modelId)->update($this->modelData());
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
