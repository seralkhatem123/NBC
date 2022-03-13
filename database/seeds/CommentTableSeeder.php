<?php

use Illuminate\Database\Seeder;
use App\Comment;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comment = [
            [
                'name'       => 'Afghanistan',
                'subject' => 'Seeder test',
                'message' => 'this test of seeder works',
                'email' => 'seed@gmail.com',
            ],[
                'name'       => 'Afghanistan',
                'subject' => 'Seeder test',
                'message' => 'this test of seeder works',
                'email' => 'seed@gmail.com',
            ],
            
            
        ];
        Comment::insert($comment);
    }
}
