<?php

use App\ExpenseReport;
use App\Http\Controllers\ExpenseReportController;
use Illuminate\Support\Facades\Route;

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

//util para pruebas
// Route::get('/test', function () {
//     return ['saludo' => 'hola',
//             'nombre' => 'laravel'
//             ];
// });


Route::get('/', 'HomeController@index');

Route::get('/dashboard','DashboardController@index');

Route::resource('/expenseReports', 'ExpenseReportController');


Route::get('expenseReports/{id}/confirmDelete','ExpenseReportController@confirmDelete');
