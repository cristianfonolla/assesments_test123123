<?php

use Illuminate\Database\Seeder;
<<<<<<< HEAD
=======
use Scool\Assesments\seeds\AssesmentsTableSeeder;
use Scool\Assesments\seeds\GradeTableSeeder;
use Scool\Assesments\seeds\ScaleTableSeeder;
>>>>>>> aa3e909b7565fbbbf472e753bcc6fdb6e08b2c08

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        // $this->call(UsersTableSeeder::class);
=======
         $this->call(AssesmentsTableSeeder::class);
         $this->call(GradeTableSeeder::class);
         $this->call(ScaleTableSeeder::class);
//         $this->call(UsersTableSeeder::class);
>>>>>>> aa3e909b7565fbbbf472e753bcc6fdb6e08b2c08
    }
}
