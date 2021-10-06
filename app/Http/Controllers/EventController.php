<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\User;

class EventController extends Controller
{
  
  public function __construct() // admin authorization check
  {
    $this->middleware('auth');
  }
  
  public function index()
  {
    // main chart start
    $wilayah = ['jp','ju','jb','js','jt'];
    $wilayah20 = [];
    $wilayah19 = [];
      
    $w20 = Event::where([
      [function ($query) {
        $query->orWhere('waktu', 'LIKE', '%' . '2020' . '%')->get();
      }]
    ])->get();

    $w19 = Event::where([
      [function ($query) {
        $query->orWhere('waktu', 'LIKE', '%' . '2019' . '%')->get();
      }]
    ])->get();

    $total20  = 0;
    $total19  = 0;
    foreach($wilayah as $wil)
    {
      $temp   = 0;
      foreach($w20 as $w) { 
        $temp += $w->$wil; 
      }
      $total20  += $temp;
      $wilayah20[] = $temp;

      $temp   = 0;
      foreach($w19 as $w) { 
        $temp += $w->$wil; 
      }
      $total19  += $temp;
      $wilayah19[] = $temp;
    }
    $wilayah20[]  = $total20;
    $wilayah19[]  = $total19;
    $data['wilayah20']  = $wilayah20;
    $data['wilayah19']  = $wilayah19;
      
    $wilayah = ['Jakarta Pusat','Jakarta Utara','Jakarta Barat','Jakarta Selatan','Jakarta Timur'];
      // main chart end

      // sec-1 chart start
    $bulan = ['01','02','03','04','05','06','07','08','09','10', '11', '12'];
    $bulan20 = [];
    $bulan19 = [];

    foreach($bulan as $value) {
      $param1 = '2020-' . $value;
      $b20 = Event::where([
          [function ($query) use ($param1) {
              $query->orWhere('waktu', 'LIKE', '%' . $param1 . '%')->get();
          }]
      ])->get();
      $temp = 0;
      foreach($b20 as $b) { $temp += $b->jp + $b->ju + $b->jb + $b->js + $b->jt; }
      $bulan20[] = $temp;
      $param2 = '2019-' . $value;
      $b19 = Event::where([
          [function ($query) use ($param2) {
              $query->orWhere('waktu', 'LIKE', '%' . $param2 . '%')->get();
          }]
      ])->get();
      $temp = 0;
      foreach($b19 as $b) { $temp += $b->jp + $b->ju + $b->jb + $b->js + $b->jt; }
      $bulan19[] = $temp;
    }
    $data['bulan20']  = $bulan20;
    $data['bulan19']  = $bulan19;
    
      
    $bulan = ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober', 'November', 'Desember'];
    // sec-1 chart end

    // sec-2 chart start
    $klausa = ['k_ls','k_gas','k_lln','k_ms','k_rk','k_ln'];
    $klausa20 = [];
    $klausa19 = [];

    foreach($klausa as $kl)
    {
      $temp = 0;
      foreach($w20 as $w) { $temp += $w->$kl; }
      $klausa20[$kl] = $temp;
      $temp = 0;
      foreach($w19 as $w) { $temp += $w->$kl; }
      $klausa19[$kl] = $temp;
    }
    $data['klausa20']  = $klausa20;
    $data['klausa19']  = $klausa19;

    $klausa = ['Listrik','Gas','Lilin','Membakar Sampah','Rokok','Lain-lain'];
    // sec-2 chart end

    // sec-4 chart start
    $objek = ['o_bp','o_bup','o_bi','o_kd','o_ilg','o_tb','o_lpk','o_s','o_ln'];
    $objek20 = [];
    $objek19 = [];
      
    foreach($objek as $o)
    {
      $temp = 0;
      foreach($w20 as $w) { $temp += $w->$o; }
      $objek20[] = $temp;
      $temp = 0;
      foreach($w19 as $w) { $temp += $w->$o; }
      $objek19[] = $temp;
    }

    $objek = ['Bangunan Perumahan','Bangunan Umum dan Perdagangan','Bangunan Industri','Kendaraan','Instalasi Luar Gedung','Tumbuhan','Lapak','Sampah','Lain-lain'];
      // sec-4 chart end

      // sec-6 chart start

    $masy = ['2020','2019'];
    $masyTrue = [];
    $masyFalse = [];

    foreach($masy as $value) {
        if($value == '2020') {
            $temp = 0;
            foreach($w20 as $w) { $temp += $w->jp + $w->ju + $w->jb + $w->js + $w->jt; }
            $masyTrue[] = $temp;
            $temp = 0;
            foreach($w20 as $w) { $temp += $w->jp_d + $w->ju_d + $w->jb_d + $w->js_d + $w->jt_d; }
            $masyFalse[] = $temp;
        } else if($value == '2019') {
            $temp = 0;
            foreach($w19 as $w) { $temp += $w->jp + $w->ju + $w->jb + $w->js + $w->jt; }
            $masyTrue[] = $temp;
            $temp = 0;
            foreach($w19 as $w) { $temp += $w->jp_d + $w->ju_d + $w->jb_d + $w->js_d + $w->jt_d; }
            $masyFalse[] = $temp;
        }
    }
      // sec-6 chart 
      
      // sec-7 chart start
      $wilayah_d = ['jp_d','ju_d','jb_d','js_d','jt_d'];
      $wilayah20_d = [];
      $wilayah19_d = [];
      foreach($wilayah_d as $wil)
      {
          $temp = 0;
          foreach($w20 as $w) { $temp += $w->$wil; }
          $wilayah20_d[] = $temp;
          $temp = 0;
          foreach($w19 as $w) { $temp += $w->$wil; }
          $wilayah19_d[] = $temp;
      }

      $wilmasy = ['JP','JU','JB','JS','JT'];
      $wilmasy20 = [];
      $wilmasy19 = [];
      $i = 0;
      foreach ($wilmasy as $value) {
          $tempTrue = $wilayah20[$i];
          $tempFalse = $wilayah20_d[$i];
          if($tempTrue == 0){
              $wilmasy20[] = '0';
          } else {
              $wilmasy20[] = ($tempFalse / $tempTrue * 100);
          }
          $tempTrue = $wilayah19[$i];
          $tempFalse = $wilayah19_d[$i];
          if($tempTrue == 0){
              $wilmasy19[] = '0';
          } else {
              $wilmasy19[] = ($tempFalse / $tempTrue * 100);
          }
          $i++;
      }
      $wilmasy = ['Jakarta Pusat','Jakarta Utara','Jakarta Barat','Jakarta Selatan','Jakarta Timur'];
      // sec-7 chart end
      
    return view('welcome', $data)
      ->with('objek',json_encode($objek,JSON_NUMERIC_CHECK))->with('objek20',json_encode($objek20,JSON_NUMERIC_CHECK))->with('objek19',json_encode($objek19,JSON_NUMERIC_CHECK))
      ->with('masy',json_encode($masy,JSON_NUMERIC_CHECK))->with('masyTrue',json_encode($masyTrue,JSON_NUMERIC_CHECK))->with('masyFalse',json_encode($masyFalse,JSON_NUMERIC_CHECK))
      ->with('wilmasy',json_encode($wilmasy,JSON_NUMERIC_CHECK))->with('wilmasy20',json_encode($wilmasy20,JSON_NUMERIC_CHECK))->with('wilmasy19',json_encode($wilmasy19,JSON_NUMERIC_CHECK));
  }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    public function bulk_create()
    {
        return view('bulk_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => ['required', 'string'],
            'waktu' => ['required', 'date'],
            'wilayah' => ['required', 'string'],
            'objek' => ['required', 'string'],
            'klausa' => ['required', 'string'],
            'masy' => ['required', 'string'],
            'jiwa_petugas_luka' => ['required', 'integer', 'min:0'],
            'jiwa_petugas_mati' => ['required', 'integer', 'min:0'],
            'jiwa_warga_luka' => ['required', 'integer', 'min:0'],
            'jiwa_warga_mati' => ['required', 'integer', 'min:0'],
            'rugi_unit' => ['required', 'integer', 'min:0'],
            'rugi_areal' => ['required', 'integer', 'min:0'],
            'rugi_bp_' => ['required', 'integer', 'min:0'],
            'rugi_bup_' => ['required', 'integer', 'min:0'],
            'rugi_bi_' => ['required', 'integer', 'min:0'],
            'rugi_kd_' => ['required', 'integer', 'min:0'],
            'rugi_ilg_' => ['required', 'integer', 'min:0'],
            'rugi_tb_' => ['required', 'integer', 'min:0'],
            'rugi_lpk_' => ['required', 'integer', 'min:0'],
            'rugi_s_' => ['required', 'integer', 'min:0'],
            'rugi_ln_' => ['required', 'integer', 'min:0'],
            'rugi_kk' => ['required', 'integer', 'min:0'],
            'rugi_jiwa' => ['required', 'integer', 'min:0'],
            'rugi_rupiah' => ['required', 'integer', 'min:0'],
        ]);

        Event::create([
            'nama' => $request['nama'],
            'waktu' => $request['waktu'],
            'wilayah' => $request['wilayah'],
            'objek' => $request['objek'],
            'klausa' => $request['klausa'],
            'masy' => $request['masy'],
            'jiwa_petugas_luka' => $request['jiwa_petugas_luka'],
            'jiwa_petugas_mati' => $request['jiwa_petugas_mati'],
            'jiwa_warga_luka' => $request['jiwa_warga_luka'],
            'jiwa_warga_mati' => $request['jiwa_warga_mati'],
            'rugi_unit' => $request['rugi_unit'],
            'rugi_areal' => $request['rugi_areal'],
            'rugi_bp_' => $request['rugi_bp_'],
            'rugi_bup_' => $request['rugi_bup_'],
            'rugi_bi_' => $request['rugi_bi_'],
            'rugi_kd_' => $request['rugi_kd_'],
            'rugi_ilg_' => $request['rugi_ilg_'],
            'rugi_tb_' => $request['rugi_tb_'],
            'rugi_lpk_' => $request['rugi_lpk_'],
            'rugi_s_' => $request['rugi_s_'],
            'rugi_ln_' => $request['rugi_ln_'],
            'rugi_kk' => $request['rugi_kk'],
            'rugi_jiwa' => $request['rugi_jiwa'],
            'rugi_rupiah' => $request['rugi_rupiah'],
        ]);

        return redirect('/data');
    }

    public function bulk_store(Request $request)
    {
        $request->validate([
            'bulan' => ['required', 'integer', 'min:1', 'max:12'],
            'tahun' => ['required', 'integer', 'min:2018', 'max:2025'],
            'unit' => ['required', 'integer', 'min:0'],

            'jp' => ['required', 'integer', 'min:0'],
            'jp_d' => ['required', 'integer', 'min:0'],
            'ju' => ['required', 'integer', 'min:0'],
            'ju_d' => ['required', 'integer', 'min:0'],
            'jb' => ['required', 'integer', 'min:0'],
            'jb_d' => ['required', 'integer', 'min:0'],
            'js' => ['required', 'integer', 'min:0'],
            'js_d' => ['required', 'integer', 'min:0'],
            'jt' => ['required', 'integer', 'min:0'],
            'jt_d' => ['required', 'integer', 'min:0'],

            'o_bp' => ['required', 'integer', 'min:0'],
            'o_bup' => ['required', 'integer', 'min:0'],
            'o_bi' => ['required', 'integer', 'min:0'],
            'o_kd' => ['required', 'integer', 'min:0'],
            'o_ilg' => ['required', 'integer', 'min:0'],
            'o_tb' => ['required', 'integer', 'min:0'],
            'o_lpk' => ['required', 'integer', 'min:0'],
            'o_s' => ['required', 'integer', 'min:0'],
            'o_ln' => ['required', 'integer', 'min:0'],

            'k_ls' => ['required', 'integer', 'min:0'],
            'k_gas' => ['required', 'integer', 'min:0'],
            'k_lln' => ['required', 'integer', 'min:0'],
            'k_ms' => ['required', 'integer', 'min:0'],
            'k_rk' => ['required', 'integer', 'min:0'],
            'k_ln' => ['required', 'integer', 'min:0'],

            'jiwa_petugas_luka' => ['required', 'integer', 'min:0'],
            'jiwa_petugas_mati' => ['required', 'integer', 'min:0'],
            'jiwa_warga_luka' => ['required', 'integer', 'min:0'],
            'jiwa_warga_mati' => ['required', 'integer', 'min:0'],

            'rugi_areal' => ['required', 'integer', 'min:0'],
            'rugi_bp_' => ['required', 'integer', 'min:0'],
            'rugi_bup_' => ['required', 'integer', 'min:0'],
            'rugi_bi_' => ['required', 'integer', 'min:0'],
            'rugi_kd_' => ['required', 'integer', 'min:0'],
            'rugi_ilg_' => ['required', 'integer', 'min:0'],
            'rugi_tb_' => ['required', 'integer', 'min:0'],
            'rugi_lpk_' => ['required', 'integer', 'min:0'],
            'rugi_s_' => ['required', 'integer', 'min:0'],
            'rugi_ln_' => ['required', 'integer', 'min:0'],
            'rugi_kk' => ['required', 'integer', 'min:0'],
            'rugi_jiwa' => ['required', 'integer', 'min:0'],
            'rugi_rupiah' => ['required', 'integer', 'min:0'],
        ]);

        $waktu = $request['tahun'] . '-' . $request['bulan'] . '-' . '01';

        Event::create([
            'waktu' => $waktu,
            'unit' => $request['unit'],

            'jp' => $request['jp'],
            'jp_d' => $request['jp_d'],
            'ju' => $request['ju'],
            'ju_d' => $request['ju_d'],
            'jb' => $request['jb'],
            'jb_d' => $request['jb_d'],
            'js' => $request['js'],
            'js_d' => $request['js_d'],
            'jt' => $request['jt'],
            'jt_d' => $request['jt_d'],

            'o_bp' => $request['o_bp'],
            'o_bup' => $request['o_bup'],
            'o_bi' => $request['o_bi'],
            'o_kd' => $request['o_kd'],
            'o_ilg' => $request['o_ilg'],
            'o_tb' => $request['o_tb'],
            'o_lpk' => $request['o_lpk'],
            'o_s' => $request['o_s'],
            'o_ln' => $request['o_ln'],

            'k_ls' => $request['k_ls'],
            'k_gas' => $request['k_gas'],
            'k_lln' => $request['k_lln'],
            'k_ms' => $request['k_ms'],
            'k_rk' => $request['k_rk'],
            'k_ln' => $request['k_ln'],

            'jiwa_petugas_luka' => $request['jiwa_petugas_luka'],
            'jiwa_petugas_mati' => $request['jiwa_petugas_mati'],
            'jiwa_warga_luka' => $request['jiwa_warga_luka'],
            'jiwa_warga_mati' => $request['jiwa_warga_mati'],

            'rugi_areal' => $request['rugi_areal'],
            'rugi_bp_' => $request['rugi_bp_'],
            'rugi_bup_' => $request['rugi_bup_'],
            'rugi_bi_' => $request['rugi_bi_'],
            'rugi_kd_' => $request['rugi_kd_'],
            'rugi_ilg_' => $request['rugi_ilg_'],
            'rugi_tb_' => $request['rugi_tb_'],
            'rugi_lpk_' => $request['rugi_lpk_'],
            'rugi_s_' => $request['rugi_s_'],
            'rugi_ln_' => $request['rugi_ln_'],
            'rugi_kk' => $request['rugi_kk'],
            'rugi_jiwa' => $request['rugi_jiwa'],
            'rugi_rupiah' => $request['rugi_rupiah'],
        ]);

        return redirect('/data');
    }

    public function bulkShow()
    {
        $event = Event::all();
        return view('data', compact('event'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
