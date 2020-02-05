<?php

namespace App\Http\Controllers;

use App\Http\Requests\MessageStoreRequest;
use App\Mail\MessageReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MessageStoreRequest $request)
    {
        // Validación de entradas de formulario mediante FormRequest

        // Enviar un Mailable al usuario que envío el mensaje.
        // Se recomienda usar queue() en lugar de send() para que el usuario no tenga que esperar la respuesta hasta que se haya enviado el mail. Si no tenemos configurado el queue en laravel, se usa por defecto el método send
        // Si le pasamos información al mailable, es necesario recibirla en su respectivo contructor
        Mail::to($request->email)->queue(new MessageReceived($request->all()));

        return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
