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
        $this->call(CategoryTableSeeder::class);
    }
}

class CategoryTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['name'=>'Đèn sân vườn','slug'=>'den-san-vuon'],
            ['name'=>'Đèn đường phố','slug'=>'den-duong-pho'],
            ['name'=>'Cột thép','slug'=>'cot-thep']
        ]);
    }
}


class ProductTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
            ['name'=>'Đèn Libra','cate_id'=>2],
            ['name'=>'Đèn Master','cate_id'=>2],
            ['name'=>'Cột Indu','cate_id'=>2]
        ]);

    }
}

class Product2TableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_2')->insert([
            ['name'=>'Đèn Toby','cate_id'=>1,'price'=>1500000],
            ['name'=>'Đèn Halumos','cate_id'=>1,'price'=>2500000],
            ['name'=>'Đèn Cara','cate_id'=>1,'price'=>3500000]
        ]);
    }
}