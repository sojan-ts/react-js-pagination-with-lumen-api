<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lists')->insert([
            ['id'=>1,'bookname'=>'The Feynman Lectures on Physics', 'user'=>'userone'],
            ['id'=>2,'bookname'=>'Brief History of Time', 'user'=>'userone'],
            ['id'=>3,'bookname'=>'University Physics with Modern Physics',  'user'=>'usertwo'],
            ['id'=>4,'bookname'=>'Fundamentals of Physics',  'user'=>'usertwo'],
            ['id'=>5,'bookname'=>'Basic Physics',  'user'=>'userthree'],
            ['id'=>6,'bookname'=>'The Elegant Universe',  'user'=>'userthree'],
            ['id'=>7,'bookname'=>'Physics of the Impossible', 'user'=>'userfour'],
            ['id'=>8,'bookname'=>'Seven Brief Lessons on Physics', 'user'=>'userfour'],
            ['id'=>9,'bookname'=>'The Fabric of the Cosmos', 'user'=>'userfour'],
        ]);
    }
}
