<?php

use Illuminate\Database\Seeder;
use Scool\Assesments\seeds\AssesmentsTableSeeder;
use Scool\Assesments\seeds\GradeTableSeeder;
use Scool\Assesments\seeds\ScaleTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(AssesmentsTableSeeder::class);
         $this->call(GradeTableSeeder::class);
         $this->call(ScaleTableSeeder::class);
//         $this->call(UsersTableSeeder::class);
    }
}
