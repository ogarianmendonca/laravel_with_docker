<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(BandaSeeder::class);
        $this->call(AlbumSeeder::class);
        $this->call(MembroSeeder::class);
        $this->call(BandaMembroSeeder::class);
    }
}
