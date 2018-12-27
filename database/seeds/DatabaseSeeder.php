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
        $this->call(ThanhvienTableSeeder::class);
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
        DB::table('products')->insert([
            ['name'=>'Đèn Libra','cate_id'=>2],
            ['name'=>'Đèn Master','cate_id'=>2],
            ['name'=>'Đèn Indu','cate_id'=>1],
            ['name'=>'Cột BGC07','cate_id'=>3],
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

class CarTableSeeder extends Seeder {
    public function run () {
        DB::table('cars')->insert([
            ['name'=>'BMW','price'=>140000000],
            ['name'=>'Audi','price'=>150000000],
            ['name'=>'Honda','price'=>160000000],
            ['name'=>'Suzuki','price'=>170000000],
            ['name'=>'Porsche','price'=>180000000],
        ]);
    }
}

class ColorTableSeeder extends Seeder {
    public function run () {
        DB::table('colors')->insert([
            ['name'=>'red'],
            ['name'=>'blue'],
            ['name'=>'black'],
            ['name'=>'green'],
            ['name'=>'yellow'],
        ]);
    }
}

class CarColorTableSeeder extends Seeder {
    public function run () {
        DB::table('car_colors')->insert([
            ['car_id'=>1,'color_id'=>2],
            ['car_id'=>3,'color_id'=>2],
            ['car_id'=>2,'color_id'=>1],
            ['car_id'=>2,'color_id'=>3],
            ['car_id'=>1,'color_id'=>4],
        ]);
    }
}

class ThanhvienTableSeeder extends Seeder {
    public function run () {
        DB::table('thanh_viens')->insert([
            ['user'=>'admin','pass'=>Hash::make(123456),'level'=>'1'],
            ['user'=>'member','pass'=>bcrypt(123456),'level'=>'2'],
        ]);
    }
}
