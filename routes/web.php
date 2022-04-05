<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/home',[PagesController::class,'home']);

Route::get('/',[PagesController::class,'home']);

Route::get('/Service',[PagesController::class,'Service'] );

Route::get('/Apropos',[PagesController::class,'Apropos']);

Route::get('/show/{id}',[PagesController::class,'Mampiseho']);

Route::get('/Ajouter',[PagesController::class,'Ajout']);

Route::post('/sauverproduit',[PagesController::class,'sauvegarder']);



/*
Route::get('/apropos/{Anarana}/{fanampiny}/{Num}', function ($Anarana,$fanampiny,$Num) {
    return "<h1>Bonjour</h1> <I>votre nom est</I>:<h2>".$Anarana."</h2> <h1> Prénom </h1>:".$fanampiny." numéro ".$Num."";
});

Route::get('/service', function () {
    return "<h1>Bienvenue sur la page de service</h1>";
});*/
