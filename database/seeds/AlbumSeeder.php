<?php

use Illuminate\Database\Seeder;
use App\Entities\Album;
use App\Entities\Banda;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $banda = Banda::where('nome', 'Kreator')->first();
        Album::create([
            'nome' => 'Enemy of God',
            'data_lancamento' => '2005-10-14 00:00:01',
            'qtd_musicas' => 12,
            'banda_id' => $banda->id
        ]);

        Album::create([
            'nome' => 'Pleasure to Kill',
            'data_lancamento' => '2006-10-14 00:00:01',
            'qtd_musicas' => 10,
            'banda_id' => $banda->id
        ]);
    }
}
