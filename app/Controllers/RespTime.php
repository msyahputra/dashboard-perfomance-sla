<?php

namespace App\Controllers;

class RespTime extends BaseController
{
    public function index()
    {
        return view('resp_time');
    }

    public function email()
    {
        return view('resp_time/email');
    }

    public function socmed()
    {
        return view('resp_time/socmed');
    }

    public function facebook()
    {
        return view('resp_time/facebook');
    }

    public function twitter()
    {
        return view('resp_time/twitter');
    }

    public function chat()
    {
        return view('resp_time/chat');
    }
}
