<?php

namespace App\Controllers;

class CaringConfir extends BaseController
{
    public function index()
    {
        return view('caring_confir');
    }

    public function tiket_all()
    {
        return view('caring_terkonfirmasi/tiket_all');
    }

    public function voice()
    {
        return view('caring_terkonfirmasi/voice');
    }

    public function indihome()
    {
        return view('caring_terkonfirmasi/indihome');
    }

    public function datin()
    {
        return view('caring_terkonfirmasi/datin');
    }

    public function rfo()
    {
        return view('caring_terkonfirmasi/rfo');
    }
}
