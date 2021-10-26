<?php

use Illuminate\Database\Seeder;
use App\Entities\Membro;
use App\Entities\Banda;

class MembroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Membro::create([
            'nome' =>  'Ventor',
            'atividade' => 'Baterista'
        ]);

        Membro::create([
            'nome' =>  'Mille Petrozza',
            'atividade' => 'Vocalista, Guitarrista'
        ]);
    }
}
