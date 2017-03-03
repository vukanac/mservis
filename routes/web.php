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

Route::get('/home', 'HomeController@index');

Route::get('/logo', function () {
    return view('dashboard');
});

Route::get('/novi-nalog', function () {
    return view('novi-nalog');
});

Route::get('/novo-vozilo', function () {
    return view('novo-vozilo');
});

Route::get('/lista-vozila', function () {
    return view('lista-vozila', [
        'vehicles' => $vehicles
    ]);
});

Route::post('/novo-vozilo', function (\Illuminate\Http\Request $request) {
     $validator = Validator::make($request->all(), [
         'tablice' => 'required|max:255',
     ]);

     if ($validator->fails()) {
         return redirect('/')
             ->withInput()
             ->withErrors($validator);
     }   
    $vehicle = new \App\Vehicle;

    $vehicle ->tablice = $request->tablice;
    $vehicle ->marka = $request->marka;
    $vehicle->save();
    return redirect('/novo-vozilo');
});

Route::post('/novi-nalog', function (\Illuminate\Http\Request $request) {
	 $validator = Validator::make($request->all(), [
         'name' => 'required|max:255',
     ]);

     if ($validator->fails()) {
         return redirect('/')
             ->withInput()
             ->withErrors($validator);
     }

     $user = new \App\User;

     $user->name = $request->name;
     //$order->id = $request->klijent;
     //$order->tablice = $request->tablice;
     //$order->cena = $request->cena;
     // //$task->datum =/** Carbon::now();*/$request->datum;
     // $task->usluge = $request->usluge;
     // $task->markaVozila = $request->marka;
     $user->save();
    return redirect('/novi-nalog');
});
