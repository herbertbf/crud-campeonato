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
        'competicaoRelationship',
        'created_at', 
        'updated_at',
        
     ];

    
    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'competicao'

    ]; 
     /**
     * Get the Time Competicao.
     *
     * @return string
     */

    public function getCompeticaoAttribute()
    {
        return $this->competicaoRelationship;
    }

     /**
     * Get the Competicao Tipo.
     *
     * @return string
     */



     /**
     * Set the cidadao's competicaoAttribute.
     *
     * @param  array  $value
     * @return void
     */
    public function setCompeticaoAttribute($value) {
        $this->competicaoRelationship()->attach($value);
    }


    public function competicaoRelationship(){
        return $this->belongsToMany(Competicao::class, 'competicoes_has_time', 'time_id', 'competicao_id');
    }


    

}
