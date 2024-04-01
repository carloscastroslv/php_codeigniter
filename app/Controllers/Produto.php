<?php

namespace App\Controllers;

class Produto extends BaseController
{
    public function index(): string
    {
        return view('Produto');
    }
}
