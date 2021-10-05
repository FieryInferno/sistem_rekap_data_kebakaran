<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'waktu',
        'unit',

        'jp',
        'jp_d',
        'ju',
        'ju_d',
        'jb',
        'jb_d',
        'js',
        'js_d',
        'jt',
        'jt_d',

        'o_bp',
        'o_bup',
        'o_bi',
        'o_kd',
        'o_ilg',
        'o_tb',
        'o_lpk',
        'o_s',
        'o_ln',

        'k_ls',
        'k_gas',
        'k_lln',
        'k_ms',
        'k_rk',
        'k_ln',

        'jiwa_petugas_luka',
        'jiwa_petugas_mati',
        'jiwa_warga_luka',
        'jiwa_warga_mati',

        'rugi_areal',
        'rugi_bp_',
        'rugi_bup_',
        'rugi_bi_',
        'rugi_kd_',
        'rugi_ilg_',
        'rugi_tb_',
        'rugi_lpk_',
        'rugi_s_',
        'rugi_ln_',
        'rugi_kk',
        'rugi_jiwa',
        'rugi_rupiah',
    ];
    
}
