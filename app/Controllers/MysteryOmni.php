<?php

namespace App\Controllers;

class MysteryOmni extends BaseController
{
    public function index()
    {
        return view('mystery_omni');
    }
    public function voice()
    {
        return view('mystery_omni/voice');
    }
    public function email()
    {
        return view('mystery_omni/email');
    }
    public function socmed()
    {
        return view('mystery_omni/socmed');
    }
}
