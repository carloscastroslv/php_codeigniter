<?php

namespace App\Controllers;

class Produto extends BaseController
{
    public function index(): string
    {
        return view('Produto');
    }

    public function show(): string
    {
        return view('Relatorio');
    }
}
