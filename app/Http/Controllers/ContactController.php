<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * Este controlador sólo manejará una acción, para ello declaramos
     * un único método mágico llamado __invoke
     * Comando: php artisan make:controller ContactController -i
     *
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $contacts = [
            ['name' => 'Alejandro González Reyes', 'phone' => '7131020100'],
            ['name' => 'Dulio Palacios Manrique', 'phone' => '5544820177'],
            ['name' => 'Daniela Villa Centeno', 'phone' => '4759865244']
        ];
        return view('pages.contact', compact('contacts'));
    }
}
