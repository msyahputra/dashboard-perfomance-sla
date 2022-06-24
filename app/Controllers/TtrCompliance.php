<?php

namespace App\Controllers;

class TtrCompliance extends BaseController
{
    public function index()
    {
        return view('ttr_compliance');
    }

    public function voice()
    {
        return view('ttr_compl/voice');
    }

    public function indihome()
    {
        return view('ttr_compl/indihome');
    }

    public function datin()
    {
        return view('ttr_compl/datin');
    }

    public function imes()
    {
        return view('ttr_compl/imes');
    }
}
