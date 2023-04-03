<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contacto extends Model{
    use HasFactory;

    protected $fillable = [
        'nome',
        'nº de telemovel',
        'email',
        'mensagem'

    ];

    }