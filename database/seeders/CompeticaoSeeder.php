<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CompeticaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        \DB::table('competicoes')->insert([ 
            'nome' => 'Libertadores',
            'tipo_competicao_id' => 1,
        ]);

        \DB::table('competicoes')->insert([ 
            'nome' => 'Brasileirao',
            'tipo_competicao_id' => 1,
        ]);

        \DB::table('competicoes')->insert([ 
            'nome' => 'Copa do BR',
            'tipo_competicao_id' => 2,
        ]);


    }
}
