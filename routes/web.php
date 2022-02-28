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

use App\Role;
use Illuminate\Support\Facades\Route;

//Hiển thị sản phẩm trong CSDL
Route::get('SanPham', 'SanPhamController@hienthi');


//Thử Summernote, DataTable, MultiSelect 
Route::get('test', 'TestController@test');

//Đổ DL trong CSDL ra DataTable
Route::get('show', 'LoaiSanPhamController@show')->name('show');
/*
    Day la route login, signin
*/
//Login 
Route::get('login', 'AuthController@getLogin')->name('login');
Route::post('login', 'AuthController@postLogin')->name('Auth-login');
Route::get('logout', 'AuthController@logout')->name('logout');

Route::post('sign-up', 'AuthController@postSignUp')->name('sign-up');


/*
    Day la route group cua admin
*/
Route::prefix('admin')->middleware('check-admin')->group(function () {
    //Hiển thị menu Admin
    Route::get('home', 'AdminController@home')->name('home');

    Route::prefix('LSP')->group(function () {
        //LOẠI SẢN PHẨM
        //List
        Route::get('list-LSP', 'LoaiSanPhamController@show')->name('list-LSP');
        //Thêm: 1. Route get add-LSP gọi đến view addLSP chứa form thêm LSP
        Route::get('add-LSP', 'LoaiSanPhamController@getAdd')->name('getAddLSP');
        //Thêm: 2. Action của form là route postAddLSP
        Route::post('add-LSP', 'LoaiSanPhamController@add')->name('postAddLSP');
        //Sửa 
        Route::get('edit-LSP/{id}', 'LoaiSanPhamController@getEdit')->name('getEditLSP');
        Route::post('edit-LSP/{id}', 'LoaiSanPhamController@edit')->name('postEditLSP');
        //Xóa 
        Route::get('delete/{id}', 'LoaiSanPhamController@delete')->name('delete-LSP');
    });

    Route::prefix('DMSP')->group(function () {
        //DANH MỤC SẢN PHẨM
        //List 
        Route::get('list-DMSP', 'DanhMucSPController@show')->name('list-DMSP');
        //Thêm
        Route::get('add-DMSP', 'DanhMucSPController@getAdd')->name('getAddDMSP');
        Route::post('add-DMSP', 'DanhMucSPController@add')->name('postAddDMSP');
        //Sửa
        Route::get('edit-DMSP/{id}', 'DanhMucSPController@getEdit')->name('getEditDMSP');
        Route::post('edit-DMSP/{id}', 'DanhMucSPController@edit')->name('postEditDMSP');
        //Xóa
        Route::get('delete/{id}', 'DanhMucSPController@delete')->name('delete-DMSP');
    });

    // Route::prefix('Slide')->group(function () {
    //     //SLIDE
    //     //List
    //     Route::get('list-Slide', 'SlideController@show')->name('list-Slide');
    //     //Xóa
    //     Route::get('delete/{id}', 'SlideController@delete')->name('delete-Slide');
    // });

    // Route::prefix('DanhGia')->group(function () {
    //     //LIST ĐÁNH GIÁ
    //     Route::get('list-DanhGia', 'DanhGiaController@show')->name('list-DanhGia');
    // });

    Route::prefix('ThanhVien')->group(function () {
        //LIST THÀNH VIÊN
        Route::get('list-ThanhVien', 'ThanhVienController@show')->name('list-ThanhVien');
    });

    Route::prefix('HoaDon')->group(function () {
        //LIST ĐƠN HÀNG 
       Route::get('list-HoaDon', 'HoaDonController@show')->name('list-HoaDon'); 
       Route::get('detail-HoaDon/{idhd}', 'HoaDonController@showDetail')->name('detail-HoaDon');

       //CHUYỂN TRẠNG THÁI ĐƠN HÀNG
       Route::get('change/{id}', 'HoaDonController@change')->name('change-status');
    });

    Route::prefix('SanPham')->group(function () {
        //SẢN PHẨM
        //LIST 
        Route::get('list-SanPham', 'SanPhamController@show')->name('list-SanPham'); 
        //THÊM
        Route::get('add-SP', 'SanPhamController@getAdd')->name('getAddSP');
        Route::post('add-SP', 'SanPhamController@add')->name('postAddSP');
        //SỬA
        Route::get('edit-SP/{id}', 'SanPhamController@getEdit')->name('getEditSP');
        Route::post('edit-SP/{id}', 'SanPhamController@edit')->name('postEditSP');
        //XÓA 
        Route::get('delete/{id}', 'SanPhamController@delete')->name('delete-SanPham');       
    });  
});

  
/*Website Route group*/  
Route::prefix('/')->middleware('check-user')->group(function () {
    Route::get('', 'PageController@mainPage')->name('mainPage');

    Route::get('LoaiSanPham/{id}', 'PageController@showLSP')->name('showLSP');
    Route::get('LoaiSanPham/DanhMuc/{iddm}', 'PageController@showDMSP')->name('showDMSP');
    Route::get('TatCaSanPham', 'PageController@showSP')->name('showSP');
    Route::get('ChiTietSanPham/{idsp}', 'PageController@showDetail')->name('showDetail');
    Route::post('Search', 'PageController@search')->name('search');

    Route::post('GioHang', 'CartController@add')->name('add-cart');
    Route::get('GioHang', 'CartController@show')->name('show-cart');
    Route::post('Update-GioHang', 'CartController@update')->name('update-cart');
    Route::get('delete-product/{idsp}', 'CartController@delete')->name('delete-product');
    Route::post('check-out', 'CartController@checkout')->name('check-out');
});

