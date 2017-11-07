<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = [
        	['name' => 'Editor', 'description' => 'An Editor has permission to edit the post', 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
        	['name' => 'Publisher', 'description' => 'An Publisher has permission to publish the post', 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
        	['name' => 'Writer', 'description' => 'An Writer has permission to write the post', 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
        ];
        \DB::table('roles')->insert($role);
    }
}
