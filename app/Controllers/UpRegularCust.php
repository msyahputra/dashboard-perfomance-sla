<?php

namespace App\Controllers;

class UpRegularCust extends BaseController
{
    public function index()
    {
        return view('update_regular_custm');
    }

    public function datin()
    {
        return view('update-regular-customer/datin');
    }

    public function non_datin()
    {
        return view('update-regular-customer/non_datin');
    }
}
