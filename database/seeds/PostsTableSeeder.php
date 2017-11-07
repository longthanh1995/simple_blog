<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\Model\Post::class, 20)->create();
        $post = [
            ['title' => 'How to learn PHP', 'slug' => 'how-to-learn-php', 'body' => 'How to learn PHP in 1 day', 'image' => null, 'is_published' => 1, 'like' => null, 'dislike' => null, 'category_id' => '1' , 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
        	['title' => 'Learn PHP in less than 1 hour', 'slug' => 'learn-php-in-less-than-one-hour', 'body' => 'How to learn PHP in less than one hour', 'image' => null, 'is_published' => 1, 'like' => null, 'dislike' => null, 'category_id' => '1' , 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
        	['title' => 'How to learn Mysql', 'slug' => 'how-to-learn-mysql', 'body' => 'How to learn Mysql in 5 day', 'image' => null, 'is_published' => 1, 'like' => null, 'dislike' => null, 'category_id' => '2' , 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
        	['title' => 'How to learn Javascript', 'slug' => 'how-to-learn-javascript', 'body' => 'How to learn javascript in 1 day', 'image' => null, 'is_published' => 1, 'like' => null, 'dislike' => null, 'category_id' => '3' , 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
        	['title' => 'How to learn Ajax', 'slug' => 'how-to-learn-ajax', 'body' => 'How to learn PHP in 3 day', 'image' => null, 'is_published' => 1, 'like' => null, 'dislike' => null, 'category_id' => '2' , 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
            ['title' => 'How to learn Jquery', 'slug' => 'how-to-learn-jquery', 'body' => 'How to learn Jquery in 8 day', 'image' => null, 'is_published' => 1, 'like' => null, 'dislike' => null, 'category_id' => '1' , 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
        	['title' => 'Master Jquery Skill', 'slug' => 'master-jquery-skill', 'body' => 'How to learn Jquery in a few days', 'image' => null, 'is_published' => 1, 'like' => null, 'dislike' => null, 'category_id' => '1' , 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
        ];
        \DB::table('posts')->insert($post);
    }
}
