<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Competicao extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'competicoes';

      /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'tipocompeticaoRelationship',
        'pivot',
        'created_at', 
        'updated_at',
        'tipo_competicao_id'
     ];

     
    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'tipocompeticao'

    ]; 
    
    public function getTipoCompeticaoAttribute()
    {
        return $this->tipocompeticaoRelationship->nome;
    }

     /**
     * Set the cidadao's TipoCompeticaoAttribute.
     *
     * @param  array  $value
     * @return void
     */
    public function setTipoCompeticaoAttribute($value) {
        $this->tipocompeticaoRelationship()->attach($value);
        
        /*
            if(isset($value)){
            $this->attributes['parentesco_id'] = Parentesco::where('id', $value)->first()->id;
        }
        */
    }

  
   
     public function tipocompeticaoRelationship(){
        return $this->belongsTo(TipoCompeticao::class,'tipo_competicao_id');
    }

}
