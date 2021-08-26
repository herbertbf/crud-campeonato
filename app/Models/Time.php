<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Time extends Model
{

     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'times';

     /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

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
