<?php

use Illuminate\Database\Seeder;
use App\Evenement;

class EvenementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Evenement::class,20)->create();

    }
}
