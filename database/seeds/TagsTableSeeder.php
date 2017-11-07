<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\Model\Tag::class, 10)->create();
        $tag = [
            ['name' => 'Laravel', 'slug' => 'laravel', 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
            ['name' => 'PHP', 'slug' => 'php', 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
            ['name' => 'Mysql', 'slug' => 'mysql', 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
            ['name' => 'Javascript', 'slug' => 'javascript', 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
            ['name' => 'Jquery', 'slug' => 'jquery', 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
            ['name' => 'Ajax', 'slug' => 'ajax', 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
        ];
        \DB::table('tags')->insert($tag);
    }
}
