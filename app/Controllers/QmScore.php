<?php

namespace App\Controllers;

class Qmscore extends BaseController
{
    public function index()
    {
        return view('qmscore');
    }

    public function voice()
    {
        return view('qmscore/voice');
    }

    public function indihome()
    {
        return view('qmscore/indihome');
    }

    public function datin()
    {
        return view('qmscore/datin');
    }

    public function email()
    {
        return view('qmscore/email');
    }

    public function socmed()
    {
        return view('qmscore/socmed');
    }

    public function chat()
    {
        return view('qmscore/chat');
    }
}
