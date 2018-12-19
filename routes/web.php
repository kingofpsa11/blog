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
