<?php

namespace App\Models;

use CodeIgniter\Model;

class ParameterModel extends Model
{

    protected $table      = 'tb_master_qmscore qm';
    protected $primaryKey = 'id_master';
    protected $useTimestamps = true;

    // SPV 
    public function getNilai($slug = false)
    {

        if ($slug == false) {
            return $this->db->table('tb_nilai_p p')
                ->join('tb_layanan l', 'l.id_layanan=p.id_layanan')
                // ->join('tb_master_qmscore qm', 'k.id_karyawan = qm.id_parner_qa')
                ->select('l.layanan, l.id_layanan, p.id_nilai , p.nilai_parameter')
                ->groupBy('p.nilai_parameter')
                ->where('l.id_layanan = p.id_layanan and l.layanan="L0 VOICE"')
                ->get()->getResultArray();
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    public function getParamsAsatu($slug = false)
    {

        if ($slug == false) {
            return $this->db->table('tb_p_a1 p')
                ->join('tb_layanan l', 'l.id_layanan=p.id_layanan')
                // ->join('tb_master_qmscore qm', 'k.id_karyawan = qm.id_parner_qa')
                ->select('l.layanan, l.id_layanan, p.id , p.parameter')
                ->groupBy('p.parameter')
                ->where('l.id_layanan = p.id_layanan and l.layanan="L0 VOICE"')
                ->get()->getResultArray();
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    public function getParamsAduaA($slug = false)
    {

        if ($slug == false) {
            return $this->db->table('tb_p_a2a p')
                ->join('tb_layanan l', 'l.id_layanan=p.id_layanan')
                // ->join('tb_master_qmscore qm', 'k.id_karyawan = qm.id_parner_qa')
                ->select('l.layanan, l.id_layanan, p.id , p.parameter')
                ->groupBy('p.parameter')
                ->where('l.id_layanan = p.id_layanan and l.layanan="L0 VOICE"')
                ->get()->getResultArray();
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    public function getParamsAduaB($slug = false)
    {

        if ($slug == false) {
            return $this->db->table('tb_p_a2b p')
                ->join('tb_layanan l', 'l.id_layanan=p.id_layanan')
                // ->join('tb_master_qmscore qm', 'k.id_karyawan = qm.id_parner_qa')
                ->select('l.layanan, l.id_layanan, p.id , p.parameter')
                ->groupBy('p.parameter')
                ->where('l.id_layanan = p.id_layanan and l.layanan="L0 VOICE"')
                ->get()->getResultArray();
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    public function getParamsAtiga($slug = false)
    {

        if ($slug == false) {
            return $this->db->table('tb_p_a3 p')
                ->join('tb_layanan l', 'l.id_layanan=p.id_layanan')
                // ->join('tb_master_qmscore qm', 'k.id_karyawan = qm.id_parner_qa')
                ->select('l.layanan, l.id_layanan, p.id , p.parameter')
                ->groupBy('p.parameter')
                ->where('l.id_layanan = p.id_layanan and l.layanan="L0 VOICE"')
                ->get()->getResultArray();
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    public function getParamsBsatuA($slug = false)
    {

        if ($slug == false) {
            return $this->db->table('tb_p_b1a p')
                ->join('tb_layanan l', 'l.id_layanan=p.id_layanan')
                // ->join('tb_master_qmscore qm', 'k.id_karyawan = qm.id_parner_qa')
                ->select('l.layanan, l.id_layanan, p.id , p.parameter')
                ->groupBy('p.parameter')
                ->where('l.id_layanan = p.id_layanan and l.layanan="L0 VOICE"')
                ->get()->getResultArray();
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    public function getParamsBsatuB($slug = false)
    {

        if ($slug == false) {
            return $this->db->table('tb_p_b1b p')
                ->join('tb_layanan l', 'l.id_layanan=p.id_layanan')
                // ->join('tb_master_qmscore qm', 'k.id_karyawan = qm.id_parner_qa')
                ->select('l.layanan, l.id_layanan, p.id , p.parameter')
                ->groupBy('p.parameter')
                ->where('l.id_layanan = p.id_layanan and l.layanan="L0 VOICE"')
                ->get()->getResultArray();
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    public function getParamsBduaA($slug = false)
    {

        if ($slug == false) {
            return $this->db->table('tb_p_b2a p')
                ->join('tb_layanan l', 'l.id_layanan=p.id_layanan')
                // ->join('tb_master_qmscore qm', 'k.id_karyawan = qm.id_parner_qa')
                ->select('l.layanan, l.id_layanan, p.id , p.parameter')
                ->groupBy('p.parameter')
                ->where('l.id_layanan = p.id_layanan and l.layanan="L0 VOICE"')
                ->get()->getResultArray();
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    public function getParamsBduaB($slug = false)
    {

        if ($slug == false) {
            return $this->db->table('tb_p_b2b p')
                ->join('tb_layanan l', 'l.id_layanan=p.id_layanan')
                // ->join('tb_master_qmscore qm', 'k.id_karyawan = qm.id_parner_qa')
                ->select('l.layanan, l.id_layanan, p.id , p.parameter')
                ->groupBy('p.parameter')
                ->where('l.id_layanan = p.id_layanan and l.layanan="L0 VOICE"')
                ->get()->getResultArray();
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    public function getParamsBtiga($slug = false)
    {

        if ($slug == false) {
            return $this->db->table('tb_p_b3 p')
                ->join('tb_layanan l', 'l.id_layanan=p.id_layanan')
                // ->join('tb_master_qmscore qm', 'k.id_karyawan = qm.id_parner_qa')
                ->select('l.layanan, l.id_layanan, p.id , p.parameter')
                ->groupBy('p.parameter')
                ->where('l.id_layanan = p.id_layanan and l.layanan="L0 VOICE"')
                ->get()->getResultArray();
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    public function getParamsCsatu($slug = false)
    {

        if ($slug == false) {
            return $this->db->table('tb_p_c1 p')
                ->join('tb_layanan l', 'l.id_layanan=p.id_layanan')
                // ->join('tb_master_qmscore qm', 'k.id_karyawan = qm.id_parner_qa')
                ->select('l.layanan, l.id_layanan, p.id , p.parameter')
                ->groupBy('p.parameter')
                ->where('l.id_layanan = p.id_layanan and l.layanan="L0 VOICE"')
                ->get()->getResultArray();
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    public function getParamsCdua($slug = false)
    {

        if ($slug == false) {
            return $this->db->table('tb_p_c2 p')
                ->join('tb_layanan l', 'l.id_layanan=p.id_layanan')
                // ->join('tb_master_qmscore qm', 'k.id_karyawan = qm.id_parner_qa')
                ->select('l.layanan, l.id_layanan, p.id , p.parameter')
                ->groupBy('p.parameter')
                ->where('l.id_layanan = p.id_layanan and l.layanan="L0 VOICE"')
                ->get()->getResultArray();
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    public function getParamsCtiga($slug = false)
    {

        if ($slug == false) {
            return $this->db->table('tb_p_c3 p')
                ->join('tb_layanan l', 'l.id_layanan=p.id_layanan')
                // ->join('tb_master_qmscore qm', 'k.id_karyawan = qm.id_parner_qa')
                ->select('l.layanan, l.id_layanan, p.id , p.parameter')
                ->groupBy('p.parameter')
                ->where('l.id_layanan = p.id_layanan and l.layanan="L0 VOICE"')
                ->get()->getResultArray();
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
