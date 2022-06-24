<?php

namespace App\Controllers;

class KpiAgent extends BaseController
{
    public function index()
    {
        return view('kpi_agent');
    }

    public function agent_t1()
    {
        return view('penc_kpi_agent/agent_t1');
    }

    public function agent_t2()
    {
        return view('penc_kpi_agent/agent_t2');
    }

    public function agent_t2_violet()
    {
        return view('penc_kpi_agent/agent_t2_violet');
    }

    public function agent_t2_global()
    {
        return view('penc_kpi_agent/agent_t2_global');
    }

    public function agent_outbond()
    {
        return view('penc_kpi_agent/agent_outbond');
    }

    public function agent_digital()
    {
        return view('penc_kpi_agent/agent_digital');
    }

    public function imes()
    {
        return view('penc_kpi_agent/imes');
    }
}
