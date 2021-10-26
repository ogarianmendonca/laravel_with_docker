<?php

use App\Entities\Banda;
use App\Entities\BandaMembro;
use App\Entities\Membro;
use Illuminate\Database\Seeder;

class BandaMembroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $banda1 = Banda::where('nome', 'Kreator')->first();
        $banda2 = Banda::where('nome', 'Tormentor')->first();

        $membro1 = Membro::where('nome', 'Ventor')->first();
        $membro2 = Membro::where('nome', 'Mille Petrozza')->first();

        BandaMembro::create(
            [
                'banda_id' => $banda1->id,
                'membro_id' => $membro1->id
            ]
        );

        BandaMembro::create(
            [
                'banda_id' => $banda1->id,
                'membro_id' => $membro2->id
            ]
        );

        BandaMembro::create(
            [
                'banda_id' => $banda2->id,
                'membro_id' => $membro2->id
            ]
        );
    }
}
