<?php

namespace App\Controllers;

class Notes extends BaseController
{
    public function index()
    {
        return view('notes.php');
    }
}
