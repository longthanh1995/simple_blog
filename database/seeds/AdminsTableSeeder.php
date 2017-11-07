<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\Model\Admin::class, 4)->create();
        $admin = [
        	['name' => 'Ryan', 'email' => 'ryan1995@gmail.com', 'password' =>bcrypt('ryan1995'), 'phone' => '0967490982', 'remember_token' => str_random(10), 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
        	['name' => 'Buno', 'email' => 'buno1982@gmail.com', 'password' =>bcrypt('buno1982'), 'phone' => '0967494982', 'remember_token' => str_random(10), 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
        	['name' => 'Tracy', 'email' => 'tracy1998@gmail.com', 'password' =>bcrypt('tracy1998'), 'phone' => '0967190982', 'remember_token' => str_random(10), 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
        	['name' => 'Jack', 'email' => 'jack1992@gmail.com', 'password' =>bcrypt('jack1992'), 'phone' => '0967490992', 'remember_token' => str_random(10), 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
        	['name' => 'Jane', 'email' => 'jane1987@gmail.com', 'password' =>bcrypt('jane1987'), 'phone' => '0967495982', 'remember_token' => str_random(10), 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
        ];
        \DB::table('admins')->insert($admin);
    }
}
