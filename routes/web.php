<?php

use App\Http\Controllers\CategoryController;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('welcome');
})->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});

require __DIR__ . '/settings.php';
require __DIR__ . '/auth.php';


Route::get("/teacher", function () {
    return view("teacher");
});

Route::get("/student", function () {
    return view("student");
});

Route::get("/theme", function () {
    return view("theme");
});


Route::get('/active/index', function () {
    return view('active/index');
})->name('index');

Route::get('/active/about', function () {
    return view('active/about');
})->name('about');
Route::get('/active/services', function () {
    return view('active/services');
})->name('services');
Route::get('/active/portfolio', function () {
    return view('active/portfolio');
})->name('portfolio');
Route::get('/active/team', function () {
    return view('active/team');
})->name('team');
Route::get('/active/blog', function () {
    return view('active/blog');
})->name('blog');
Route::get('/active/contact', function () {
    return view('active/contact');
})->name('contact');

Route::get('/components/active-bootstrap', function () {
    return view('/components/active-bootstrap');
})->name('active');

Route::get('/test', function () {
    return view('test');
})->name('test');

Route::get('/coronavirus',function(){
    $reports = [
        (object) ["country"=>"China" , "date"=>"2020-04-19" , "total"=>"2765", "active"=>"790"  , "death"=>"47", "recovered"=>"1928"],
        (object) ["country"=>"Thailand" , "date"=>"2020-04-18" , "total"=>"2733", "active"=>"899"  , "death"=>"47", "recovered"=>"1787"],
        (object) ["country"=>"Thailand" , "date"=>"2020-04-17" , "total"=>"2700", "active"=>"964"  , "death"=>"47", "recovered"=>"1689"],
        (object) ["country"=>"Thailand" , "date"=>"2020-04-16" , "total"=>"2672", "active"=>"1033" , "death"=>"46", "recovered"=>"1593"],
        (object) ["country"=>"Thailand" , "date"=>"2020-04-15" , "total"=>"2643", "active"=>"1103" , "death"=>"43", "recovered"=>"1497"],
    ];
    return view("coronavirus", compact("reports") );
})->name('coronavirus');

Route::get('/active/teacher', function () {
    $teachers = json_decode(file_get_contents('https://raw.githubusercontent.com/arc6828/laravel8/main/public/json/teachers.json'));
    return view("active.teacher", compact("teachers"));
})->name('active.teacher');

Route::get('/category/sport', function () {
    return "<h1>This is sport Category Page</h1>";
});
Route::get('/category/politic', function () {
    return "<h1>This is politic Category Page</h1>";
});
Route::get('/category/entertain', function () {
    return "<h1>This is entertain Category Page</h1>";
});
Route::get('/category/auto', function () {
    return "<h1>This is auto Category Page</h1>";
});

Route::get('/category/sport', [CategoryController::class, "sport"]);
Route::get('/category/politic', [CategoryController::class, "politic"]);
Route::get('/category/entertain', [CategoryController::class, "entertain"]);
Route::get('/category/auto', [CategoryController::class, "auto"]);


Route::get('query/sql', function () {
    $products = DB::select("SELECT * FROM products");
    return view('query-test', compact('products'));
});

Route::get('query/builder', function () {
    $products = DB::table('products')->get();
    return view('query-test', compact('products'));
});

Route::get('query/orm', function () {
    $products = Product::get();
    return view('query-test', compact('products'));
});

Route::get('product/form', function () {
    //
})->name("product.form");

Route::get('barchart', function () {    
    return view('barchart');
})->name('barchart');