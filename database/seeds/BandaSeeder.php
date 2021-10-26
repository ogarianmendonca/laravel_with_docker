<?php

use Illuminate\Database\Seeder;
use App\Entities\Banda;

class BandaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Banda::create([
            'nome' => 'Kreator',
            'genero' => 'Thrash Metal',
            'data_criacao' => '1984-10-20 00:00:01'
        ]);
    }
}
