<?php

use Illuminate\Database\Seeder;

class Users2TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' => 'MohyNaz',
            'email' => 'MohyNaz@acpaglobal.net',
            'password' => '$2y$10$e74yozLYGtCZj9v3HWkN4OkYeY7zQQc5QHepsg5kkPbvsb/FMfGEq',
            'student_limit' => '15000',
            'exam_limit' => '1500' 
             
         ]);

         DB::table('products')->insert([
            'name' => 'MohyNaz2',
            'email' => 'MohyNaz2@acpaglobal.net',
            'password' => '$2y$10$e74yozLYGtCZj9v3HWkN4OkYeY7zQQc5QHepsg5kkPbvsb/FMfGEq',
            'student_limit' => '15000',
            'exam_limit' => '1500' 
         ]);
 
    }
}
