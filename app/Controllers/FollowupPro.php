<?php

namespace App\Controllers;

class FollowupPro extends BaseController
{
    public function index()
    {
        return view('followup_pro');
    }

    public function nms()
    {
        return view('follow_proactive/nms');
    }
}
