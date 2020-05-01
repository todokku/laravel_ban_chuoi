<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        try{

			\DB::table('admins')->insert([
				'name' => 'Cao Tú An',
				'email' => 'andevct96@gmail.com',
				'password' => bcrypt('123456789')
			]);
			\DB::table('admins')->insert([
				'name' => 'Admin',
				'email' => 'admin@gmail.com',
				'password' => bcrypt('admin123456789')
            ]);
            \DB::table('admins')->insert([
				'name' => 'Phú Cường',
				'email' => 'noname21062000@gmail.com',
				'password' => bcrypt('admin123456789')
			]);
		}catch (\Exception $exception){
			Log::error("Seed : ". $exception->getMessage());
		}
    }
}
