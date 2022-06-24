<?php

namespace App\Models;

use CodeIgniter\Model;

class KaryawanModel extends Model
{

    protected $table      = 'tb_master_qmscore qm';
    protected $primaryKey = 'id_master';
    protected $useTimestamps = true;

    // SPV 
    public function getQA($slug = false)
    {

        if ($slug == false) {
            return $this->db->table('tb_karyawan k')
                ->join('tb_jabatan j', 'j.id_jabatan=k.id_jabatan')
                // ->join('tb_master_qmscore qm', 'k.id_karyawan = qm.id_parner_qa')
                ->select('k.parner, k.full_name, j.jabatan')
                ->groupBy('k.parner')
                ->where('k.id_jabatan = j.id_jabatan and j.jabatan="SPV QA"')
                ->get()->getResultArray();
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    public function getAgent($slug = false)
    {

        if ($slug == false) {
            return $this->db->table('tb_karyawan k')
                ->join('tb_jabatan j', 'j.id_jabatan=k.id_jabatan')
                // ->join('tb_master_qmscore qm', 'k.id_karyawan = qm.id_parner_qa')
                ->select('k.parner, k.full_name, j.jabatan')
                ->groupBy('k.parner')
                ->where('k.id_jabatan = j.id_jabatan and j.jabatan="AGENT T1 VOICE"')
                ->get()->getResultArray();
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    public function getTl($slug = false)
    {

        if ($slug == false) {
            return $this->db->table('tb_karyawan k')
                ->join('tb_jabatan j', 'j.id_jabatan=k.id_jabatan')
                // ->join('tb_master_qmscore qm', 'k.id_karyawan = qm.id_parner_qa')
                ->select('k.parner, k.full_name, j.jabatan')
                ->groupBy('k.parner')
                ->where('k.id_jabatan = j.id_jabatan and j.jabatan="TL VOICE-INDIHOME"')
                ->get()->getResultArray();
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    public function getSpv($slug = false)
    {

        if ($slug == false) {
            return $this->db->table('tb_karyawan k')
                ->join('tb_jabatan j', 'j.id_jabatan=k.id_jabatan')
                // ->join('tb_master_qmscore qm', 'k.id_karyawan = qm.id_parner_qa')
                ->select('k.parner, k.full_name, j.jabatan')
                ->groupBy('k.parner')
                ->where('k.id_jabatan = j.id_jabatan and j.jabatan="SPV VOICE - INDIHOME"')
                ->get()->getResultArray();
            return $this->findAll();
        }


        return $this->where(['slug' => $slug])->first();
    }
}
