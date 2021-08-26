<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class TipoCompeticao extends Model
{
  
    
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tipo_competicoes';


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'pivot',
        'created_at', 
        'updated_at',
     ];

     public function getNome()
    {
        return $this->nome;
    }

    
    public function getId()
    {
        return $this->id;
    }

    
}
