<?php

namespace App\Controllers;

class Shop extends BaseController
{
    public function index()
    {
        return view('shop');
    }

    public function product($type = '', $brand = '')
    {
        echo '<h2>Type: ' . $type . ' - Brand:' . $brand . '</h2>';
        // return view('product');
    }
}
