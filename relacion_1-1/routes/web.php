<?php

use App\Models\Phone;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return '';
});

Route::get('/prueba', function () {
    // User::create([
    //     'name' => 'imanol',
    //     'email' =>'correo@dominio.com',
    //     'password' => bcrypt('12345'),
    // ]);

    // Phone::create([
    //     "number" => '987654321',
    //     "user_id" => 1
    // ]);

    //BUSCAMOS UN USUARIO
    // $user = User::find(1);
    //DEVOLVEMOS EL 'PHONE' ASIGNADO A ÉL
    // return $user->phone;

    //BUSCAMOS UN USUARIO Y LOS 'PHONES' QUE TIENE ASIGNADO
    // $user = User::where('id', 1)->with('phone')->first();
    // return $user;

    //BUSCAMOS UN NUMERO
    $phone = Phone::find(2);
    //DEVOLVEMOS EL 'USER' AIGNADO A ÉL
    return $phone->user;
});
