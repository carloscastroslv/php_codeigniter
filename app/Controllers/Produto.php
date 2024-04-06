<?php

namespace App\Controllers;

class Produto extends BaseController
{
    public function index(): string
    {
        return view('index');
    }

    public function show(): string
    {
        return view('show');
    }
    public function edit(): string
    {
        return view('edit');
    }
    public function delete(): string
    {
        return view('delete');
    }
}
