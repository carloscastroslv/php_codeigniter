<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Produtos extends BaseController
{
    public function listar()
    {
        echo view('templates/header');          
        echo view('produtos/listar');          
        echo view('templates/footer');          
    }
}
