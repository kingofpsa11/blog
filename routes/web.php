<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


//Bài 4
//https://www.youtube.com/watch?v=oNIPQtKKD8U&index=6&t=0s&list=PLqEKeWbzk0aTloUonoi7J_D6QslCc9VXv
Route::get('welcome/{monhoc?}/{thoigian?}', function ($monhoc='hom nay',$thoigian='ngay mai'){
    return "hom nay la: $monhoc va $thoigian";
})->where(['monhoc'=>'[0-9a-zA-Z]+','thoigian'=>'[a-zA-Z]{1,10}']);


//Bài 5
//https://www.youtube.com/watch?v=eirDGD9Udcg&list=PLqEKeWbzk0aTloUonoi7J_D6QslCc9VXv&index=6

Route::get('view', function () {
    $value = "Hello ngay moi";
    return view('view',compact('value'));
});

Route::get('test-controller', 'TestController@test');

//Định danh thường dùng trong Form hoặc Chuyển hướng trang
Route::get('dinh-danh', ['as' => 'dinhdanh',function () {
    return 'Day la dinh danh';
}]);
Route::get('vao-dinh-danh', function () {
    return redirect()->route('dinhdanh');
});
Route::get('vao-dinh-danh-controller', 'TestController@chuyenHuong');

//Tạo group trong Route
Route::group(['prefix' => 'admin'], function () {
    Route::get('tin-tuc', function () {
        return "Day la group tin tuc";
    });
    Route::get('thong-bao', function () {
        return "Day la group thong bao";
    });
});


//Bài 6
//https://www.youtube.com/watch?v=x04TLqzRbC4
//Phân cấp thư mục cho view
Route::get('goi-view', function () {
    return view('root.view');
});

Route::get('goi-view-2', function () {
    return view('root.view2');
});
//Tạo ra biến public $title
view()->share('title', 'Lap trinh Laravel 5.x');
//Share biến $thongtin cho 1 hoặc nhiều view xác định
view()->composer(['root.view','root.view2'], function ($view) {
    return $view->with('thongtin','Day la trang thong tin');
});

//Kiểm tra sự tồn tại của 1 view
Route::get('check-view', function () {
    if (view()->exists('root.view')) {
        return "Ton tai view";
    }else {
        return "Khong ton tai view";
    }
});

//Bài 7
//https://www.youtube.com/watch?v=k3VQrkPgJcE&list=PLqEKeWbzk0aTloUonoi7J_D6QslCc9VXv&index=8
//Blade template
//Bao gồm: @yield, @section, @extends
Route::get('goi-master', function () {
    return view('root.sub');
});


//Bài 8
//https://www.youtube.com/watch?v=1GrXWa7885s&list=PLqEKeWbzk0aTloUonoi7J_D6QslCc9VXv&index=9
// Hàm @if
// Hàm if rút gọn ? :
// Hàm if rút gọn {{ $value or 'khong ton tai $value' }}


//Bài 9
//https://www.youtube.com/watch?v=mGq0df4SE3w&list=PLqEKeWbzk0aTloUonoi7J_D6QslCc9VXv&index=10
//for
//for...while
//foreach


//Bài 15 - Schema builder - Drop column in table
//https://www.youtube.com/watch?v=VAt79RFi3nI&list=PLqEKeWbzk0aTloUonoi7J_D6QslCc9VXv&index=16
Route::get('schema/drop-column', function () {
    Schema::table('categories', function ($table) {
        $table->dropColumn('description');
    });
});

Route::get('schema/drop', function () {
    Schema::dropIfExists('laravel');
});

//Bài 16 - Schema builder - Foreign Keys
//https://www.youtube.com/watch?v=kVTzY7fXkBc&list=PLqEKeWbzk0aTloUonoi7J_D6QslCc9VXv&index=17
Route::get('schema/create/category', function () {
    Schema::create('category', function ($table) {
        $table->increments('id');
        $table->string('name');
        $table->string('slug');
        $table->timestamps();
    });
});

Route::get('schema/create/product', function () {
    Schema::create('product', function ($table) {
        $table->increments('id');
        $table->string('name');
        $table->integer('cate_id')->unsigned();
        $table->foreign('cate_id')->references('id')->on('category')->onDelete('cascade');
        $table->timestamps();
    });
});

//Bài 18, 19 - Migration
//https://www.youtube.com/watch?v=VxIRKDb9X1w&index=19&list=PLqEKeWbzk0aTloUonoi7J_D6QslCc9VXv
// migrate
//   migrate:fresh        Drop all tables and re-run all migrations
//   migrate:install      Create the migration repository
//   migrate:refresh      Reset and re-run all migrations
//   migrate:reset        Rollback all database migrations
//   migrate:rollback     Rollback the last database migration
//   migrate:status       Show the status of each migration
// php artisan make:migration create_(table_name)_table


//Bài 20 - Seeding
//Tạo dữ liệu mẫu để test


//Bài 21 - Query Builder
//https://www.youtube.com/watch?v=8bdXkbDAqjs&index=22&list=PLqEKeWbzk0aTloUonoi7J_D6QslCc9VXv

Route::get('query/select-all', function () {
    $data = DB::table('category')->get();
    echo "<pre>";
    print_r($data);
    echo "<pre>";
});

Route::get('query/select-column', function () {
    $data = DB::table('category')->select('name')->where('id','=',1)->get();
    echo "<pre>";
    print_r($data);
    echo "<pre>";
});

Route::get('query/where-or', function () {
    $data = DB::table('category')->where('id',1)->orWhere('id',2)->get();
    echo "<pre>";
    print_r($data);
    echo "<pre>";
});

//Bài 22 - Query Builder
//https://www.youtube.com/watch?v=eefns5FlS2s&list=PLqEKeWbzk0aTloUonoi7J_D6QslCc9VXv&index=23

Route::get('query/order-by', function () {
    $data = DB::table('category')->select('id','name','slug')->orderBy('name','ASC')->get();
    echo "<pre>";
    print_r($data);
    echo "<pre>";
});

Route::get('query/offset-limit', function () {
    $data = DB::table('category')->skip(1)->take(2)->get();
    echo "<pre>";
    print_r($data);
    echo "<pre>";
});

Route::get('query/where-between', function () {
    // $data = DB::table('category')->whereBetween('id',[1,2])->get();
    $data = DB::table('category')->whereNotBetween('id',[1,2])->get();
    echo "<pre>";
    print_r($data);
    echo "<pre>";
});

Route::get('query/where-in', function () {
    // $data = DB::table('category')->whereIn('id',[1,3])->get();
    $data = DB::table('category')->whereNotIn('id',[1,3])->get();
    echo "<pre>";
    print_r($data);
    echo "<pre>";
});

//Bài 23 - Query Builder
//https://www.youtube.com/watch?v=wQvtB2XIeik&list=PLqEKeWbzk0aTloUonoi7J_D6QslCc9VXv&index=24

Route::get('query/count', function () {
    $data = DB::table('category')->count();
    echo $data;
});

Route::get('query/max', function () {
    // $data = DB::table('category')->max('name');
    // $data = DB::table('category')->avg('id');
    $data = DB::table('category')->sum('id');
    echo $data;
});

//Bài 24 - Query builder - Join
//https://www.youtube.com/watch?v=7yXrHdt9dyw&index=25&list=PLqEKeWbzk0aTloUonoi7J_D6QslCc9VXv

Route::get('schema/create/product-2', function () {
    Schema::create('product_2', function ($table) {
        $table->increments('id');
        $table->string('name');
        $table->integer('cate_id')->unsigned();
        $table->integer('price');
        $table->timestamps();
    });
});
Route::get('query/join', function () {
    $data = DB::table('product')
                ->join('category','category.id','=','product.cate_id')
                ->select('product.*','category.slug')
                ->get();
    echo "<pre>";
    print_r($data);
    echo "<pre>";
});

//Bài 25 - Query builder - insert, insertGetId, update
//https://www.youtube.com/watch?v=eBcJz1LWz4M&list=PLqEKeWbzk0aTloUonoi7J_D6QslCc9VXv&index=26

Route::get('query/insert', function () {
    DB::table('category')->insert([
        'name' => 'Cột sân vườn',
        'slug' => 'cot-san-vuon',
    ]);
    return "Insert thành công";
});

//insertGetId chỉ insert được 1 record
Route::get('query/insertgetid', function () {
    $id = DB::table('category')->insertGetId([
        'name' => 'Đèn pha',
        'slug' => 'den-pha',
    ]);
    return $id;
});

Route::get('query/update', function () {
    DB::table('category')
        ->where('id',5)
        ->update(['name' => 'Đèn pha']);
    return "Update thanh cong";
});

//Bài 26 - Eloquent ORM
//https://www.youtube.com/watch?v=ZYWDhszTRAY&list=PLqEKeWbzk0aTloUonoi7J_D6QslCc9VXv&index=27
// php artisan make:model Category --migration
// or php artisan make:model Category -m

//Bài 27 - Eloquent ORM
//https://www.youtube.com/watch?v=bYqOdu1lu7Q&list=PLqEKeWbzk0aTloUonoi7J_D6QslCc9VXv&index=29

Route::get('eloquent/all', function () {
    $data = App\Category::all()->tojSon();
    // $data = App\Category::all()->toArray();
    // $data = App\Category::find(1)->toArray();
    // $data = App\Category::findOrFail(1)->toArray();
    
    echo "<pre>";
    print_r($data);
    echo "</pre>";
});

//Bài 28 - Eloquent ORM
//https://www.youtube.com/watch?v=mnFVtaoMfBY&index=29&list=PLqEKeWbzk0aTloUonoi7J_D6QslCc9VXv

Route::get('eloquent/where', function () {
    // $data = App\Category::where('id',2)->get()->toArray();
    // $data = App\Category::where('id',"=",2)->get()->toArray();
    $data = App\Category::where('id',">",2)->firstOrFail()->toArray(); //firstOrFail không có get()
    echo "<pre>";
    print_r($data);
    echo "<pre>";
});

Route::get('eloquent/take', function () {
    $data = App\Category::all()->take(2)->toArray();
    echo "<pre>";
    print_r($data);
    echo "<pre>";
});

Route::get('eloquent/count', function () {
    $data = App\Category::all()->count();
    echo "<pre>";
    print_r($data);
    echo "<pre>";
});

Route::get('eloquent/raw', function () {
    $data = App\Category::whereRaw('id >= ? AND name LIKE ?',[1,'Đèn%'])->get()->toArray();
    echo "<pre>";
    print_r($data);
    echo "<pre>";
});

//Bài 29 - Eloquent ORM - Chú ý về vị trí của select() trong Eloquent ORM
//https://www.youtube.com/watch?v=dJFoxf23xmY&list=PLqEKeWbzk0aTloUonoi7J_D6QslCc9VXv&index=30

//Bài 30 - Eloquent ORM - Thêm dữ liệu
//https://www.youtube.com/watch?v=M-RHrQsN97U&index=31&list=PLqEKeWbzk0aTloUonoi7J_D6QslCc9VXv

Route::get('eloquent/insert', function () {
    $category = new App\Category;
    $category->name = 'Đèn cầu';
    $category->slug = 'den-cau';
    if ($category->save()) {
        echo "Thêm thành công";
    }
});

Route::get('eloquent/create', function () {
    $data = [
        'name' => 'Đèn Toby',
        'slug' => 'den-toby',
    ];
    App\Category::create($data);

});

Route::get('eloquent/update', function () {
    $category = App\Category::find(2);
    $category->name = 'Đèn Halumos';
    $category->slug = 'den-halumos';
    if ($category->save()) {
        echo "Chinh sua thanh cong";
    }
});

Route::get('eloquent/delete', function () {
    App\Category::destroy(5);
});

//Bài 31 - Eloquent ORM

//Bài 32 - Eloquent ORM - Relation One-Many
//https://www.youtube.com/watch?v=DMjQvo-yxkc&index=33&list=PLqEKeWbzk0aTloUonoi7J_D6QslCc9VXv

Route::get('eloquent/relation', function () {
    $data = App\Product::find(3)->categories()->get()->toArray();
    echo "<pre>";
    print_r($data);
    echo "<pre>";
});

//Bài 33 - Eloquent - Relation Many-Many
//https://www.youtube.com/watch?v=LfbzlrvzD3s&index=35&list=PLqEKeWbzk0aTloUonoi7J_D6QslCc9VXv&t=0s
//Dùng bảng trung gian car_colors

Route::get('eloquent/relation/many-1', function () {
    $data = App\Car::find(1)->colors()->get()->toArray(); //Phải có get() sau khi dùng hàm colors()
    echo "<pre>";
    print_r($data);
    echo "<pre>";
});

Route::get('eloquent/relation/many-2', function () {
    $data = App\Color::find(2)->cars()->get()->toArray(); //Phải có get() sau khi dùng hàm cars()
    echo "<pre>";
    print_r($data);
    echo "<pre>";
});

//Bài 34 - Form Request
//https://www.youtube.com/watch?v=YeNvZQlgQH8&list=PLqEKeWbzk0aTloUonoi7J_D6QslCc9VXv&index=35
// Install LaravelColective
//https://laravelcollective.com/docs/master/html#installation

Route::get('form/', function () {
    return view('form.layout');
});

//Bài 35 - Form Request
//https://www.youtube.com/watch?v=dJG8-B6ot1s&list=PLqEKeWbzk0aTloUonoi7J_D6QslCc9VXv&index=36

//Bài 36 - Form Request
//https://www.youtube.com/watch?v=Vqf-3kOp9lY&index=37&list=PLqEKeWbzk0aTloUonoi7J_D6QslCc9VXv

Route::get('form/dang-ky', ['as' => 'dangky', function () {
    return view('form.dangky');
}]);

Route::post('form/dang-ky-thanh-vien', ['as' => 'postDangKy', 'uses' => 'DangKyController@them']);

//Bài 37 - Form Request - Validator
//https://www.youtube.com/watch?v=iCkGUjphO54&index=38&list=PLqEKeWbzk0aTloUonoi7J_D6QslCc9VXv
// view: form/dangky.blade.php
// controller: DangKyController

//Bài 38 - Form Request - Request
//https://www.youtube.com/watch?v=nHZ_KbPpazM&index=39&list=PLqEKeWbzk0aTloUonoi7J_D6QslCc9VXv

//Bài 39 - Form Request
//https://www.youtube.com/watch?v=br39H07s7Sk&index=40&list=PLqEKeWbzk0aTloUonoi7J_D6QslCc9VXv

// Route::any('{all?}', 'HomeController@index')->where('all','(.*)');

//Bài 40 - Form Request
//https://www.youtube.com/watch?v=br39H07s7Sk&index=40&list=PLqEKeWbzk0aTloUonoi7J_D6QslCc9VXv

//Bài 41 - Form Request
//https://www.youtube.com/watch?v=l0FEVwoYI90&t=253s&list=PLqEKeWbzk0aTloUonoi7J_D6QslCc9VXv&index=43

//Bài 42 - Responses
//https://www.youtube.com/watch?v=hQFd69x0duE&index=43&list=PLqEKeWbzk0aTloUonoi7J_D6QslCc9VXv

Route::get('response/json', function () {
    $arr = [
        1 => 'hello',
        2 => 'hi',
        3 => 'bye',
    ];

    // return response()->json($arr);
    return $arr;
});

Route::get('response/xml', function () {
    $content = '<?xml version=1.0 encoding="UTF-8"?>
        <root>
            <trungtam>Khoa</trungtam>
            <danhsach>
                <monhoc>Lap trinh 1</monhoc>
                <monhoc>Lap trinh 2</monhoc>
            </danhsach>
        <root>
    ';
    $status = 200;
    $value = 'text/xml';
    // return response($content,$status)->header('Content-Type', $value);
    return response('Hello World', 200)
        ->header('Content-Type', 'text/plain');
});