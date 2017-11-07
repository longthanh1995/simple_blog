<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// factory(App\Model\Category::class, 5)->create();
    	// $cat = factory(App\Model\Category::class, 2)
     //       ->create()
     //       ->each(function ($c) {
     //            $c->posts()->save(factory(App\Model\Post::class)->make());
     //        });

        $cat = [
            ['name' => 'Laravel', 'slug' => 'laravel', 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
            ['name' => 'PHP', 'slug' => 'php', 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
            ['name' => 'Mysql', 'slug' => 'mysql', 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
            ['name' => 'Javascript', 'slug' => 'javascript', 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
            ['name' => 'Jquery', 'slug' => 'jquery', 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
            ['name' => 'Ajax', 'slug' => 'ajax', 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
        ];
        \DB::table('categories')->insert($cat);
    }
}
