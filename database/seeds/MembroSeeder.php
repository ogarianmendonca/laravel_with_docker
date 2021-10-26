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
        $banda = Banda::where('nome', 'Kreator')->first();
        Membro::create([
            'nome' =>  'Ventor',
            'atividade' => 'Baterista',
            'banda_id' => $banda->id,
        ]);
    }
}
