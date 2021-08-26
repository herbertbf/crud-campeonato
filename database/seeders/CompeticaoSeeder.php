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
        $competicoes = array(
            'Libertadores',
            'Brasileirao',
            'Copa do Brasil',
        );
        foreach($competicoes as $competicao){
            DB::table('competicoes')->insert([ 
                'nome' => $competicao, 
            ]);
        }
    }
}
