<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Produto extends Model
{
	
	use HasFactory;
	
	public $timestamps = false;



	protected $fillable = [
		'categoria',
		'sub_categoria',
		'preco',
		'modelo',
        'dimensoes',
		'marca',
		'id',
		'preco',
		'uso',
        'featured_image',
		'estado'
		
		
		
	];

	public function categorias()
	{
		return $this->belongsTo(Categoria::class,'categoria');
	}

	public function subcategorias()
	{
		return $this->belongsTo(Categoria::class,'sub_categoria');
	}

	public static function produtos_uso()
    {
        return [
			'Novo' => 'Novo',
            'Entre 1 a 3 anos' => 'Entre 1 a 3 anos',
            'Entre 3 a 6 anos' => 'Entre 3 a 6 anos',
			'Entre 6 a 10 anos' => 'Entre 6 a 10 anos',
			'Mais de 10 anos ' => 'Mais de 10 anos',
        ];
    }

	public static function prod_estado()
    {
        return [
			'disponivel' => 'Disponivel',
            'reservado' => 'Reservado'
        ];
    }

	
	
}
  
