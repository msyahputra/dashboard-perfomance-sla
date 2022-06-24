<?php

namespace App\Controllers;

use App\Models\KaryawanModel;
use App\Models\ParameterModel;
use App\Models\SimpleModel;

class DataVoice extends BaseController
{

    protected $KaryawanModel;
    protected $SimpleModel;
    protected $ParameterModel;

    public function __construct()
    {
        $this->KaryawanModel = new KaryawanModel();
        $this->SimpleModel = new SimpleModel();
        $this->ParameterModel = new ParameterModel();
    }

    public function index()
    {
        helper(['form', 'url']);
        $data['parnerqa'] = $this->KaryawanModel->getQA();
        $data['parneragent'] = $this->KaryawanModel->getAgent();
        $data['parnertl'] = $this->KaryawanModel->getTl();
        $data['parnerspv'] = $this->KaryawanModel->getSpv();
        $data['tenure'] = $this->SimpleModel->getTenure();
        $data['peridoe'] = $this->SimpleModel->getPeriode();
        $data['roster'] = $this->SimpleModel->getRoster();
        $data['sample'] = $this->SimpleModel->getSample();
        $data['detailinteraksi'] = $this->SimpleModel->getDetailInteraksi();
        $data['penyebabhandling'] = $this->SimpleModel->getPenyebabHandling();
        $data['channel'] = $this->SimpleModel->getChennel();
        // $data['nilai'] = $this->ParameterModel->getNiila();
        // $data['parameterAsatu'] = $this->ParameterModel->getParamsAsatu();
        // $data['parameterAsatuA'] = $this->ParameterModel->getParamsAduaA();
        // $data['parameterAsatuB'] = $this->ParameterModel->getParamsAduaB();
        // $data['parameterAtiga'] = $this->ParameterModel->getParamsAtiga();
        // $data['parameterBsatuA'] = $this->ParameterModel->getParamsBsatuA();
        // $data['parameterBsatuB'] = $this->ParameterModel->getParamsBsatuB();
        // $data['parameterBduaA'] = $this->ParameterModel->getParamsBduaA();
        // $data['parameterBduaB'] = $this->ParameterModel->getParamsBduaB();
        // $data['parameterBtiga'] = $this->ParameterModel->getParamsBtiga();
        // $data['parameterCsatu'] = $this->ParameterModel->getParamsCsatu();
        // $data['parameterCdua'] = $this->ParameterModel->getParamsCdua();
        // $data['parameterCtiga'] = $this->ParameterModel->getParamsCtiga();
        // $data['katNonConformity'] = $this->ParameterModel->getKatNonConformity();
        // $data['detNonConformity'] = $this->ParameterModel->getDetNonConformity();
        // $data['rekomsAgent'] = $this->ParameterModel->getRekomsAgent();
        // var_dump($data);
        return view('data_tabels/voice', $data);
    }
}
