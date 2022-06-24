<?php

namespace App\Models;

use CodeIgniter\Model;

class SimpleModel extends Model
{

    protected $table      = 'tb_master_qmscore qm';
    protected $primaryKey = 'id_master';
    protected $useTimestamps = true;

    // Tenure 
    public function getTenure($slug = false)
    {

        if ($slug == false) {
            return $this->db->table('tb_tenure_agent t')
                ->join('tb_layanan l', 'l.id_layanan=t.id_layanan')
                // ->join('tb_master_qmscore qm', 'k.id_karyawan = qm.id_parner_qa')
                ->select('l.layanan, t.id_layanan, t.id_tenure, t.tenure_agent')
                ->groupBy('t.tenure_agent')
                ->where('l.id_layanan = t.id_layanan and l.layanan="L0 VOICE"')
                ->get()->getResultArray();
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    // Periode Tapping 
    public function getPeriode($slug = false)
    {

        if ($slug == false) {
            return $this->db->table('tb_periode_tapping p')
                ->join('tb_layanan l', 'l.id_layanan=p.id_layanan')
                // ->join('tb_master_qmscore qm', 'k.id_karyawan = qm.id_parner_qa')
                ->select('l.layanan, l.id_layanan, p.id_periode, p.periode_tapping')
                ->groupBy('p.periode_tapping')
                ->where('l.id_layanan = p.id_layanan and l.layanan="L0 VOICE"')
                ->get()->getResultArray();
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    // Roster Agent 
    public function getRoster($slug = false)
    {

        if ($slug == false) {
            return $this->db->table('tb_roster_agent r')
                ->join('tb_layanan l', 'l.id_layanan=r.id_layanan')
                // ->join('tb_master_qmscore qm', 'k.id_karyawan = qm.id_parner_qa')
                ->select('l.layanan, l.id_layanan, r.id_roster, r.roster_agent')
                ->groupBy('r.roster_agent')
                ->where('l.id_layanan = r.id_layanan and l.layanan="L0 VOICE"')
                ->get()->getResultArray();
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    // Sample Tapping 
    public function getSample($slug = false)
    {

        if ($slug == false) {
            return $this->db->table('tb_sample_tapping s')
                ->join('tb_layanan l', 'l.id_layanan=s.id_layanan')
                // ->join('tb_master_qmscore qm', 'k.id_karyawan = qm.id_parner_qa')
                ->select('l.layanan, l.id_layanan, s.id_sample, s.sample_tapping')
                ->groupBy('s.sample_tapping')
                ->where('l.id_layanan = s.id_layanan and l.layanan="L0 VOICE"')
                ->get()->getResultArray();
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    // Sample Tapping 
    public function getDetailInteraksi($slug = false)
    {

        if ($slug == false) {
            return $this->db->table('tb_detail_interaksi d')
                ->join('tb_layanan l', 'l.id_layanan=d.id_layanan')
                // ->join('tb_master_qmscore qm', 'k.id_karyawan = qm.id_parner_qa')
                ->select('l.layanan, l.id_layanan, d.id_detail_interaksi , d.detail_interaksi')
                ->groupBy('d.detail_interaksi')
                ->where('l.id_layanan = d.id_layanan and l.layanan="L0 VOICE"')
                ->get()->getResultArray();
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    // Penyebab Handling  
    public function getPenyebabHandling($slug = false)
    {

        if ($slug == false) {
            return $this->db->table('tb_penyebab_handling p')
                ->join('tb_layanan l', 'l.id_layanan=p.id_layanan')
                // ->join('tb_master_qmscore qm', 'k.id_karyawan = qm.id_parner_qa')
                ->select('l.layanan, l.id_layanan, p.id_handling , p.penyebab_handling_time')
                ->groupBy('p.penyebab_handling_time')
                ->where('l.id_layanan = p.id_layanan and l.layanan="L0 VOICE"')
                ->get()->getResultArray();
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    // Channel 
    public function getChennel($slug = false)
    {

        if ($slug == false) {
            return $this->db->table('tb_layanan l')
                ->select('l.layanan, l.id_layanan')
                ->where('l.layanan="L0 VOICE"')
                ->get()->getResultArray();
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    // Kategori Non Conformity  
    public function getKatNonConformity($slug = false)
    {

        if ($slug == false) {
            return $this->db->table('tb_kategori_non_conformity p')
                ->join('tb_layanan l', 'l.id_layanan=p.id_layanan')
                // ->join('tb_master_qmscore qm', 'k.id_karyawan = qm.id_parner_qa')
                ->select('l.layanan, l.id_layanan, p.id_kategori_non_conformity  , p.kategori_non_conformity')
                ->groupBy('p.kategori_non_conformity')
                ->where('l.id_layanan = p.id_layanan and l.layanan="L0 VOICE"')
                ->get()->getResultArray();
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    // Detail Non Conformity  
    public function getDetNonConformity($slug = false)
    {

        if ($slug == false) {
            return $this->db->table('tb_detail_non_conformity p')
                ->join('tb_layanan l', 'l.id_layanan=p.id_layanan')
                // ->join('tb_master_qmscore qm', 'k.id_karyawan = qm.id_parner_qa')
                ->select('l.layanan, l.id_layanan, p.id_detail_non_conformity , p.detail_non_confirmity')
                ->groupBy('p.detail_non_confirmity')
                ->where('l.id_layanan = p.id_layanan and l.layanan="L0 VOICE"')
                ->get()->getResultArray();
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    // Rekomendasi Untuk Agent 
    public function getRekomsAgent($slug = false)
    {

        if ($slug == false) {
            return $this->db->table('tb_rekomendasi_untuk_agent p')
                ->join('tb_layanan l', 'l.id_layanan=p.id_layanan')
                // ->join('tb_master_qmscore qm', 'k.id_karyawan = qm.id_parner_qa')
                ->select('l.layanan, l.id_layanan, p.id_rekomendasi_untuk_agent , p.rekomendasi_untuk_agent')
                ->groupBy('p.rekomendasi_untuk_agent')
                ->where('l.id_layanan = p.id_layanan and l.layanan="L0 VOICE"')
                ->get()->getResultArray();
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
