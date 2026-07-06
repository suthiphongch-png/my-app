<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/abouts', function () {
 $name ="suthiphong";
 $data = "6 กรกฏาคม 2569";
return view('abouts', compact('name','data'));

})->name('abouts');
 $blogs = [
    [
    'title' => 'บทความที่ 1',
    'content' => 'เนื้อหาบทความที่ 1',
    'status' => true ,
    ],
    
    [
    'title' => 'บทความที่ 2',
    'content' => 'เนื้อหาบทความที่ 2',
    'status' => true ,
    ],
    
    [
    'title' => 'บทความที่ 3',
    'content' => 'เนื้อหาบทความที่ 3',
    'status' => false ,
    ]
 ];

 Route::get('/blogs', function () use ($blogs) {
    return view('blogs', compact('blogs'));
 })->name('blogs');
