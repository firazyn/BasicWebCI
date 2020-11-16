<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ProdukModel;

Class Produk extends BaseController {
    public function index() {
        $model = new ProdukModel();
        $data['data'] = $model->getProduk();

        echo view ('produk/index', $data);

        //return('welcome_message');
    }
}