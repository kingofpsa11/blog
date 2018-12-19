<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('products')->insert([
        	['name'=>'Đèn sân vườn','price'=>1500000,'category_id'=>1],
        	['name'=>'Đèn Halumos','price'=>1500000,'category_id'=>1]]
        );
    }
}
