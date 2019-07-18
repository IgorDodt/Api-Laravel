<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    protected $table = 'fornecedores';
    protected $primaryKey = 'id_fornecedor';
    public $timestamps = false;

    protected $fillable = [
        'nome',

    ];

    public function rules()
    {
        return [
            'nome' => 'required'

        ];
    }
    
}
