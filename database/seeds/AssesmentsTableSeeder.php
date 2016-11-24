<?php

use Illuminate\Database\Seeder;
use Scool\Assesments\Models\Assesment;

class AssesmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Assesment::class,10)->create();
    }
}
