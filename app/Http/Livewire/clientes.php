<?php

namespace App\Http\Livewire;
use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class Clientes extends Component
{

    use WithPagination;
    public $name;
    public $email;
    public $role;
    public $nº_de_telemovel;
    public $nif;
    public $morada;
    public $compras;
    public $reservas;
    public $password;
    public $modelId;
    public $modalFormVisible=false;
    public $modalConfirmDeleteVisible;
    
    public $search='';


    public function render()
    {
        return view('livewire.clientes',['data'=>$this->read()]);
    }

    public function read()
    {
        return User::where('role','like','%'.$this->search.'%')->orWhere('name','like','%'.$this->search.'%')->orderby('id','DESC')->paginate(20);
    }
 //regras de inserçao na base de dados
    public function rules(){
        return[
            'name'=>'required',
            'email'=>'required',
            'role'=>'required',
            'password'=>'required',
            'compras'=>'required',
            'reservas'=>'required'
        ];
    }
// Mapear o modelo do componente
    public function modelData(){
        return[
            'name' => $this->name,
            'email' => $this->email,
            'nº_de_telemovel' => $this->nº_de_telemovel,
            'nif' => $this->nif,
            'morada' => $this->morada,
            'role' => $this->role,
            'password' => $this->password,
            'compras' => $this->compras,
            'reservas' => $this->reservas

        ];
        
    }
//carregar o modelo
    public function loadModel(){
        $data=User::find($this->modelId);
        $this->name=$data->name;
        $this->email=$data->email;
        $this->nº_de_telemovel=$data->nº_de_telemovel;
        $this->nif=$data->nif;
        $this->morada=$data->morada;
        $this->role=$data->role;
        $this->password=$data->password;
        $this->compras=$data->compras;
        $this->reservas=$data->reservas;

    }
    //guardar
    public function create()
    {
       $this->validate();
       User::create($this->modelData());
        $this->modalFormVisible = false;
        $this->reset();

    }

    public function update()
    {
        $this->validate();
        User::find($this->modelId)->update($this->modelData());
        $this->modalFormVisible = false;

    }

    public function delete()
    {
         User::destroy($this->modelId);
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
