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
    return view('master-layout');
});


Route::get('/dich-vu', function () {
    return view('pages.dich-vu');
});

Route::get('/blog', function () {
    return view('pages.blog');
});
	
Route::get('/dangki',function(){
	return view('dangki.dangki');
});
Route::get('/dangnhap',function(){
	return view('dangki.dangnhap');
});
Route::get('/giohang',function(){
	return view('dangki.giohang');
});
Route::get('/sanpham',function(){
	return view('dangki.sanpham');
});
