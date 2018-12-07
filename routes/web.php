<?php

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('nosotros', function () {
    return view('about');
})->name('about');

Route::get('servicios', function () {
    return view('service');
})->name('service');

Route::get('contactos', function () {
    return view('contact');
})->name('contact');

Route::post('messages', function () {

    //enviar un correo
    $data = request()->all();
    Mail::send("emails/message", $data, function($message) use ($data){
        $message->from($data['email'],$data['name'])
            ->to('edilbertomarrugo03@hotmail.com','Edilberto M. Gutierrez')
            ->subject($data['subject']);
    });

    //responder al usuario
    //se crea una llave flash para mostrar luego de que se ejecute todo lo relacionado con este ruta.
    return back()->with('flash', $data['name'].', Tu mensaje ha sido recibido');

})->name('messages');
