<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/roles', [App\Http\controllers\RoleController::class, 'index'])->name('index');
Route::get('/listarroles', [App\Http\controllers\RoleController::class, 'listar'])->name('listarrole');
Route::get('/crearrol', [App\Http\controllers\RoleController::class, 'create'])->name('crearrole');
Route::put('/store', [App\Http\controllers\RoleController::class, 'storerole'])->name('storeroler');
Route::get('/editarro/{role}',[App\Http\Controllers\RoleController::class, 'editar'])->name('editarrol');
Route::put('/updaterol/{role}',[App\Http\Controllers\RoleController::class, 'update'])->name('updaterol');
Route::get('/detallerol/{id}', [App\Http\controllers\RoleController::class, 'detalle'])->name('detallerol');
Route::get('/eliminarrol/{role}', [App\Http\controllers\RoleController::class, 'eliminar'])->name('eliminarrol');
//Route::resource('roles', 'admin/RoleController')
//->names('role')
//->parameters(['permisos'=>'role']);
//->only(['index','show']);


Route::get('/permiso', [App\Http\controllers\PermissionController::class, 'index'])->name('index');
Route::get('/listarpermission', [App\Http\controllers\PermissionController::class, 'show'])->name('listarpermission')
->middleware(['Permission:admin-permission.listar']);
Route::get('/crearpermission', [App\Http\controllers\PermissionController::class, 'crearPermiso'])->name('crearpermission');
Route::put('/storepermission', [App\Http\controllers\PermissionController::class, 'storepermiso'])->name('storepermission');
Route::get('/editarpermiso/{permission}',[App\Http\Controllers\PermissionController::class, 'editar'])->name('editarpermiso');
Route::put('/updatepermiso/{permission}',[App\Http\Controllers\PermissionController::class, 'update'])->name('updatepermiso');
Route::get('/detallepermiso/{id}', [App\Http\controllers\PermissionController::class, 'detalle'])->name('detallpermiso');
Route::get('/eliminarpermiso/{permission}', [App\Http\controllers\PermissionController::class, 'eliminar'])->name('eliminarpermiso');

//imagen y eliminar no estan
////Route::get('/index', [App\Http\controllers\UserController::class, 'index'])->name('home');
//Route::get('/crear', [App\Http\controllers\Auth\RegisterController::class, 'create'])->name('crearusuario');
Route::get('/user', [App\Http\controllers\UserController::class, 'index'])->name('index');
Route::get('/listaruser', [App\Http\controllers\UserController::class, 'listar'])->name('listaruser');
Route::get('/crearuser', [App\Http\controllers\UserController::class, 'create'])->name('crearuser');
Route::put('/storeusu', [App\Http\controllers\UserController::class, 'store'])->name('storeususer');
Route::get('/editar/{user}',[App\Http\Controllers\UserController::class, 'editar'])->name('editaruser');
Route::put('/update/{user}',[App\Http\Controllers\UserController::class, 'update'])->name('updateuser');
Route::get('/detalleuser/{id}', [App\Http\controllers\UserController::class, 'detalle'])->name('detalleuser');
Route::get('/eliminaruser/{user}', [App\Http\controllers\UserController::class, 'eliminar'])->name('eliminaruserl');
//Auth::routes();
    


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::prefix('Usuario_1')->namespace('admin')->name('admin')->group(function(){
////Route::patch('usuarios/{user}/imagen','usersController@image')->name('user.image');
//Route::patch('usuarios/{user}/roles','usersController@role')->name('user.role');
//Route::resource('usuarios', 'UserController')
//->names('user')
//->parameters(['usuarios='>'user'])
//->except(['destroy']);

//Route::resource('permisos', 'PermissionController')
//->names('permission')
//->parameters(['permisos'=>'permission'])
//->only(['index','listar', 'editar','eliminar']);

//})


/*
1      post         App\Http\Controllers\Auth\LoginController@login
2      get          App\Http\Controllers\Auth\LoginController@showLoginForm 
3      post         App\Http\Controllers\Auth\LoginController@logout
4      get          App\Http\Controllers\Auth\ConfirmPasswordController@showConfirmForm
5      post         App\Http\Controllers\Auth\ConfirmPasswordController@confirm
*/
// Authentication Routes...
Route::get('iniciar_sesion', 'App\Http\controllers\Auth\LoginController@showLoginForm')->name('login');
Route::post('iniciar_sesion', 'App\Http\controllers\Auth\LoginController@login');
Route::post('logout', 'App\Http\controllers\Auth\LoginController@logout')->name('logout');

// Registration Routes...
    Route::get('register', 'App\Http\controllers\Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'App\Http\controllers\Auth\RegisterController@register');


// Password Reset Routes...
Route::get('password/reset', 'App\Http\controllers\Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'App\Http\controllers\Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'App\Http\controllers\Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'App\Http\controllers\Auth\ResetPasswordController@reset')->name('password.update');

// Email Verification Routes...
Route::emailVerification();

Route::get('/home', 'App\Http\controllers\HomeController@index')->name('home');
/*

post         App\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail
post         App\Http\Controllers\Auth\ResetPasswordController@reset 
get          App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm
get          App\Http\Controllers\Auth\ResetPasswordController@showResetForm

get          App\Http\controllers\PermissionController@index


*/