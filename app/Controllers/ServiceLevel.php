<?php

namespace App\Controllers;

class ServiceLevel extends BaseController
{
    public function index()
    {
        return view('service_level');
    }

    public function voice()
    {
        return view('service_level/voice');
    }

    public function indihome()
    {
        return view('service_level/indihome');
    }

    public function datin()
    {
        return view('service_level/datin');
    }

    public function vdn_1_71513()
    {
        return view('service_level/vdn_1_71513');
    }

    public function pots()
    {
        return view('service_level/pots');
    }

    public function global()
    {
        return view('service_level/global');
    }

    public function imes()
    {
        return view('service_level/imes');
    }

    public function pertamina()
    {
        return view('service_level/pertamina');
    }

    public function billing()
    {
        return view('service_level/billing');
    }

    public function psb()
    {
        return view('service_level/psb');
    }

    public function ip()
    {
        return view('service_level/ip');
    }

    public function vdn_1_71507()
    {
        return view('service_level/vdn_1_71507');
    }
}
