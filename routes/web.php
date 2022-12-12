<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BinhLuanController;
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

// người dùng đăng nhập đăng ký
Route::get('/dang-ky',[UserController::class,'dangky'])->name('dang-ky');
Route::post('/dang-ky',[UserController::class,'xldangKy'])->name('xl-dang-ky');
Route::get('/dang-nhap',[UserController::class,'dangnhap'])->name('dang-nhap');
Route::post('/dang-nhap',[UserController::class,'xldangnhap'])->name('xl-dang-nhap');
Route::get('/dang-xuat',[UserController::class,'dangxuat'])->name('dang-xuat');
Route::get('/ho-so',[UserController::class,'hoso'])->name('ho-so');
Route::get('/trang-chu',[UserController::class,'trangchu'])->name('trang-chu');

// nguời dùng đăng bài
Route::get('/dang-bai',[UserController::class,'dangbai'])->name('dang-bai');
Route::post('/dang-bai',[UserController::class,'xldangbai'])->name('xl-dang-bai');
Route::get('/chi-tiet/{id}',[UserController::class,'chitiet'])->name('chi-tiet');
Route::get('/da-dang',[UserController::class,'dadang'])->name('da-dang');
Route::get('/xoa-bai/{id}',[UserController::class,'delete'])->name('xoa-bai');
Route::get('/tim-kiem',[UserController::class,'sreach'])->name('sreach');
Route::get('/ban-tin',[UserController::class,'tintuc'])->name('ban-tin');
Route::get('/chi-tiet-tin/{id}',[UserController::class,'chitietbantin'])->name('chi-tiet-tin');
Route::get('/doi-pass',[UserController::class,'doipass'])->name('doi-mat-khau');
Route::post('/doi-password',[UserController::class,'updatepass'])->name('xl-doi-mat-khau-moi');
Route::get('/gioi-thieu',[UserController::class,'gioithieu'])->name('gioi-thieu');
Route::post('/chi-tiet/{id}',[BinhluanController::class,'store'])->name('binh-luan');
Route::get('tim-kiem/{id}',[UserController::class,'timkiem'])->name('tim-kiem');
// Xử lý cập nhật-sửa
Route::get('/edit/{id}',[UserController::class,'xledit'])->name('edit');
Route::post('/edit/{id}',[UserController::class,'updatee'])->name('update');

//admin đăng ký, nhập
Route::get('/admin',[AdminController::class,'adpage'])->name('admin');
Route::get('/ql-bai',[AdminController::class,'qlbaiviet'])->name('ql-bai');
Route::get('/dang-tin',[AdminController::class,'dangtin'])->name('dang-tin');
Route::post('/dang-tin',[AdminController::class,'xldangtin'])->name('xl-dang-tin');
Route::get('/tin-tuc',[AdminController::class,'tintuc'])->name('tin-tuc');
Route::get('/chi-tiet-bai-viet/{id}',[AdminController::class,'ctbaiviet'])->name('chi-tiet-bai-viet');
Route::get('/chi-tiet-ban-tin/{id}',[AdminController::class,'ctbantin'])->name('chi-tiet-ban-tin');
Route::get('/xoa-tin/{id}',[AdminController::class,'xoatin'])->name('xoa-tin');
Route::get('/xoa-bai-viet/{id}',[AdminController::class,'xoabaiviet'])->name('xoa-bai-viet');
Route::get('/chi-tiet-user/{id}',[AdminController::class,'userdisplay'])->name('chi-tiet-user');
Route::get('/ql-user',[AdminController::class,'qluser'])->name('ql-user');
Route::get('/xoa-user/{id}',[AdminController::class,'xoauser'])->name('xoa-user');
Route::post('/chi-tiet-bai-viet/{id}',[BinhLuanController::class,'store'])->name('binh-luan');
Route::get('edit-tin/{id}',[AdminController::class,'edittin'])->name('edit-tin');
Route::post('edit-tin/{id}',[AdminController::class,'updatetin'])->name('update-tin');
Route::get('edit-ho-so',[AdminController::class,'edithoso'])->name('edit-ho-so');
Route::post('admin',[AdminController::class,'updatehoso'])->name('update-ho-so');


