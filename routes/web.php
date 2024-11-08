<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PointagesController;
use App\Http\Controllers\UtilisateursController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard-user', function () {
    return view('dashboard-user');
})->middleware(['auth', 'is_admin:admin']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');



});

require __DIR__.'/auth.php';

//Route adminDashboard 
Route::get('/admin/dashboard', [AdminController::class,'index']) ->middleware(['auth','admin'])->name('dashboard');
//Route admin vers users 
Route::get('/adminformulaire', [UtilisateursController::class,'create'])->name('adminformulaire');
Route::get('/adminlisteuser', [UtilisateursController::class,'index'])->name('adminlisteuser');
Route::post('/adminajouteruser', [UtilisateursController::class,'store'])->name('utilisateurs.store');
//Route admin vers pointages
Route::get('/listepointage', [PointagesController::class,'index'])->name('listepointage');
Route::get('/formpointage', [PointagesController::class,'create'])->name('formpointage');
Route::post('/pointage', [PointagesController::class,'store'])->name('pointages.store');
Route::get('/listeulisaeur', [UtilisateursController::class,'index'])->name('utilisateurs.index');
Route::get('/admin/detail/{{pointages}}', [PointagesController::class,'show'])->name('pointages.show');
Route::get('/admin/edite{{pointages}}', [PointagesController::class,'edit'])->name('pointage.edit');
Route::put('/admin/update/{{pointages}}', [PointagesController::class,'update'])->name('pointages.update');
Route::delete('/admin/delete/{pointages}', [PointagesController::class,'destroy'])->name('pointages.delete');

// Route Utilisateurs
Route::get('/listeulisaeur', [UtilisateursController::class,'index'])->name('utilisateurs.index');
Route::get('/admin/detail/{{utilisateurs}}', [UtilisateursController::class,'show'])->name('utilisateurs.show');
Route::get('/admin/edite/{{utilisateurs}}', [UtilisateursController::class,'edit'])->name('utilisateurs.edit');
Route::put('/admin/update/{{utilisateurs}}', [UtilisateursController::class,'update'])->name('utilisateurs.update');
Route::delete('/admin/delete/{utilisateurs}', [UtilisateursController::class,'destroy'])->name('utilisateurs.delete');
//Route pointages
Route::get('/listpointage', [PointagesController::class,'index'])->name('pointages.index');

// Route::prefix('admin')->middleware('auth:admin')->group(function () {
//     Route::get('/formUsers', function () {
//         return view('admin.formuser.index');
//     });
// });
//route resouce nous facalite la tache pour avoir  une liste des routes le crud
// Route::resource('produits',PointagesController::class);