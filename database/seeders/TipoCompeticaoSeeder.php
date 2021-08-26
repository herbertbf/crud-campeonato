<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TipoCompeticaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipocompeticoes = array(
            'Copa',
            'Campeonato',
        );
        foreach($tipocompeticoes as $tipocompeticao){
            \DB::table('tipo_competicoes')->insert([ 
                'nome' => $tipocompeticao, 
            ]);
        }
    }
}
