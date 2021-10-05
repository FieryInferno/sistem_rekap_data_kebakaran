@extends('layouts.app')
@section('title', 'Tambah Kasus')
@section('content')
<div class="container-xxl">
    <h1 class="pb-2">Tambah kasus</h1>
    <div class="card border-white shadow-sm mb-3">
        <form class="pt-4 px-4" method="POST" action="{{ route('bulk_store') }}">
            @csrf
            <div class="pb-3">
                <div class="mb-3">
                    <h4>Detail kasus</h4>
                </div>
                <div class="mb-3 row g-3">
                    <div class="col-md-6">
                        <label for="bulan" class="form-label">{{ __('Bulan Kejadian') }}</label>
                        <input id="bulan" type="number" class="form-control @error('bulan') is-invalid @enderror" name="bulan" value="{{ old('bulan') }}" required autocomplete="bulan" autofocus>
                        @error('bulan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="tahun" class="form-label">{{ __('Tahun Kejadian') }}</label>
                        <input id="tahun" type="number" class="form-control @error('tahun') is-invalid @enderror" name="tahun" value="{{ old('tahun') }}" required autocomplete="tahun" autofocus>
                        @error('tahun')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <div class="col-md-8">
                        <label for="unit" class="form-label">{{ __('Unit') }}</label>
                        <input id="unit" type="number" class="form-control @error('unit') is-invalid @enderror" name="unit" value="{{ old('unit') }}" required autocomplete="unit" autofocus>
                        @error('unit')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="pb-3">
                <div class="mb-3">
                    <h4>Wilayah</h4>
                </div>
                <div class="mb-3 row g-3">
                    <div class="col-md-6">
                        <label for="jp" class="form-label">{{ __('Jakarta Pusat') }}</label>
                        <input id="jp" type="number" class="form-control @error('jp') is-invalid @enderror" name="jp" value="{{ old('jp') }}" required autocomplete="jp" autofocus>
                        @error('jp')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="jp_d" class="form-label">{{ __('Diatasi masyarakat') }}</label>
                        <input id="jp_d" type="number" class="form-control @error('jp_d') is-invalid @enderror" name="jp_d" value="{{ old('jp_d') }}" required autocomplete="jp_d" autofocus>
                        @error('jp_d')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 row g-3">
                    <div class="col-md-6">
                        <label for="ju" class="form-label">{{ __('Jakarta Utara') }}</label>
                        <input id="ju" type="number" class="form-control @error('ju') is-invalid @enderror" name="ju" value="{{ old('ju') }}" required autocomplete="ju" autofocus>
                        @error('ju')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="ju_d" class="form-label">{{ __('Diatasi masyarakat') }}</label>
                        <input id="ju_d" type="number" class="form-control @error('ju_d') is-invalid @enderror" name="ju_d" value="{{ old('ju_d') }}" required autocomplete="ju_d" autofocus>
                        @error('ju_d')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 row g-3">
                    <div class="col-md-6">
                        <label for="jb" class="form-label">{{ __('Jakarta Barat') }}</label>
                        <input id="jb" type="number" class="form-control @error('jb') is-invalid @enderror" name="jb" value="{{ old('jb') }}" required autocomplete="jb" autofocus>
                        @error('jb')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="jb_d" class="form-label">{{ __('Diatasi masyarakat') }}</label>
                        <input id="jb_d" type="number" class="form-control @error('jb_d') is-invalid @enderror" name="jb_d" value="{{ old('jb_d') }}" required autocomplete="jb_d" autofocus>
                        @error('jb_d')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 row g-3">
                    <div class="col-md-6">
                        <label for="js" class="form-label">{{ __('Jakarta Selatan') }}</label>
                        <input id="js" type="number" class="form-control @error('js') is-invalid @enderror" name="js" value="{{ old('js') }}" required autocomplete="js" autofocus>
                        @error('js')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="js_d" class="form-label">{{ __('Diatasi masyarakat') }}</label>
                        <input id="js_d" type="number" class="form-control @error('js_d') is-invalid @enderror" name="js_d" value="{{ old('js_d') }}" required autocomplete="js_d" autofocus>
                        @error('js_d')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 row g-3">
                    <div class="col-md-6">
                        <label for="jt" class="form-label">{{ __('Jakarta Timur') }}</label>
                        <input id="jt" type="number" class="form-control @error('jt') is-invalid @enderror" name="jt" value="{{ old('jt') }}" required autocomplete="jt" autofocus>
                        @error('jt')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="jt_d" class="form-label">{{ __('Diatasi masyarakat') }}</label>
                        <input id="jt_d" type="number" class="form-control @error('jt_d') is-invalid @enderror" name="jt_d" value="{{ old('jt_d') }}" required autocomplete="jt_d" autofocus>
                        @error('jt_d')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="pb-3">
                <div class="mb-3">
                    <h4>Objek bencana</h4>
                </div>
                <div class="mb-3 row g-3">
                    <div class="col-md-6">
                        <label for="o_bp" class="form-label">{{ __('Bangunan Perumahan') }}</label>
                        <input id="o_bp" type="number" class="form-control @error('o_bp') is-invalid @enderror" name="o_bp" value="{{ old('o_bp') }}" required autocomplete="o_bp" autofocus>
                        @error('o_bp')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="o_bup" class="form-label">{{ __('Bangunan Umum dan Perdangan') }}</label>
                        <input id="o_bup" type="number" class="form-control @error('o_bup') is-invalid @enderror" name="o_bup" value="{{ old('o_bup') }}" required autocomplete="o_bup" autofocus>
                        @error('o_bup')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 row g-3">
                    <div class="col-md-6">
                        <label for="o_bi" class="form-label">{{ __('Bangunan Industri') }}</label>
                        <input id="o_bi" type="number" class="form-control @error('o_bi') is-invalid @enderror" name="o_bi" value="{{ old('o_bi') }}" required autocomplete="o_bi" autofocus>
                        @error('o_bi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="o_kd" class="form-label">{{ __('Kendaraan') }}</label>
                        <input id="o_kd" type="number" class="form-control @error('o_kd') is-invalid @enderror" name="o_kd" value="{{ old('o_kd') }}" required autocomplete="o_kd" autofocus>
                        @error('o_kd')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 row g-3">
                    <div class="col-md-6">
                        <label for="o_ilg" class="form-label">{{ __('Instalasi Luar Gedung') }}</label>
                        <input id="o_ilg" type="number" class="form-control @error('o_ilg') is-invalid @enderror" name="o_ilg" value="{{ old('o_ilg') }}" required autocomplete="o_ilg" autofocus>
                        @error('o_ilg')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="o_tb" class="form-label">{{ __('Tumbuhan') }}</label>
                        <input id="o_tb" type="number" class="form-control @error('o_tb') is-invalid @enderror" name="o_tb" value="{{ old('o_tb') }}" required autocomplete="o_tb" autofocus>
                        @error('o_tb')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 row g-3">
                    <div class="col-md-6">
                        <label for="o_lpk" class="form-label">{{ __('Lapak') }}</label>
                        <input id="o_lpk" type="number" class="form-control @error('o_lpk') is-invalid @enderror" name="o_lpk" value="{{ old('o_lpk') }}" required autocomplete="o_lpk" autofocus>
                        @error('o_lpk')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="o_s" class="form-label">{{ __('Sampah') }}</label>
                        <input id="o_s" type="number" class="form-control @error('o_s') is-invalid @enderror" name="o_s" value="{{ old('o_s') }}" required autocomplete="o_s" autofocus>
                        @error('o_s')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <div class="col-md-6">
                        <label for="o_ln" class="form-label">{{ __('Lain-lain') }}</label>
                        <input id="o_ln" type="number" class="form-control @error('o_ln') is-invalid @enderror" name="o_ln" value="{{ old('o_ln') }}" required autocomplete="o_ln" autofocus>
                        @error('o_ln')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="pb-3">
                <div class="mb-3">
                    <h4>Dugaan Penyebab</h4>
                </div>
                <div class="mb-3 row g-3">
                    <div class="col-md-6">
                        <label for="k_ls" class="form-label">{{ __('Listrik') }}</label>
                        <input id="k_ls" type="number" class="form-control @error('k_ls') is-invalid @enderror" name="k_ls" value="{{ old('k_ls') }}" required autocomplete="k_ls" autofocus>
                        @error('k_ls')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="k_gas" class="form-label">{{ __('Gas') }}</label>
                        <input id="k_gas" type="number" class="form-control @error('k_gas') is-invalid @enderror" name="k_gas" value="{{ old('k_gas') }}" required autocomplete="k_gas" autofocus>
                        @error('k_gas')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 row g-3">
                    <div class="col-md-6">
                        <label for="k_lln" class="form-label">{{ __('Lilin') }}</label>
                        <input id="k_lln" type="number" class="form-control @error('k_lln') is-invalid @enderror" name="k_lln" value="{{ old('k_lln') }}" required autocomplete="k_lln" autofocus>
                        @error('k_lln')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="k_ms" class="form-label">{{ __('Membakar sampah') }}</label>
                        <input id="k_ms" type="number" class="form-control @error('k_ms') is-invalid @enderror" name="k_ms" value="{{ old('k_ms') }}" required autocomplete="k_ms" autofocus>
                        @error('k_ms')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 row g-3">
                    <div class="col-md-6">
                        <label for="k_rk" class="form-label">{{ __('Rokok') }}</label>
                        <input id="k_rk" type="number" class="form-control @error('k_rk') is-invalid @enderror" name="k_rk" value="{{ old('k_rk') }}" required autocomplete="k_rk" autofocus>
                        @error('k_rk')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="k_ln" class="form-label">{{ __('Lain-lain') }}</label>
                        <input id="k_ln" type="number" class="form-control @error('k_ln') is-invalid @enderror" name="k_ln" value="{{ old('k_ln') }}" required autocomplete="k_ln" autofocus>
                        @error('k_ln')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="pb-3">
                <div class="mb-3">
                    <h4>Kerugian jiwa</h4>
                </div>
                <div class="mb-3 row g-3">
                    <div class="col-md-6">
                        <label for="jiwa_petugas_luka" class="form-label">{{ __('Petugas Luka') }}</label>
                        <input id="jiwa_petugas_luka" type="number" class="form-control @error('jiwa_petugas_luka') is-invalid @enderror" name="jiwa_petugas_luka" value="{{ old('jiwa_petugas_luka') }}" required autocomplete="jiwa_petugas_luka" autofocus>
                        @error('jiwa_petugas_luka')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="jiwa_petugas_mati" class="form-label">{{ __('Petugas Mati') }}</label>
                        <input id="jiwa_petugas_mati" type="number" class="form-control @error('jiwa_petugas_mati') is-invalid @enderror" name="jiwa_petugas_mati" value="{{ old('jiwa_petugas_mati') }}" required autocomplete="jiwa_petugas_mati" autofocus>
                        @error('jiwa_petugas_mati')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 row g-3">
                    <div class="col-md-6">
                        <label for="jiwa_warga_luka" class="form-label">{{ __('Warga Luka') }}</label>
                        <input id="jiwa_warga_luka" type="number" class="form-control @error('jiwa_warga_luka') is-invalid @enderror" name="jiwa_warga_luka" value="{{ old('jiwa_warga_luka') }}" required autocomplete="jiwa_warga_luka" autofocus>
                        @error('jiwa_warga_luka')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="jiwa_warga_mati" class="form-label">{{ __('Warga Mati') }}</label>
                        <input id="jiwa_warga_mati" type="number" class="form-control @error('jiwa_warga_mati') is-invalid @enderror" name="jiwa_warga_mati" value="{{ old('jiwa_warga_mati') }}" required autocomplete="jiwa_warga_mati" autofocus>
                        @error('jiwa_warga_mati')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="pb-3">
                <div class="mb-3">
                    <h4>Kerugian Harta/Benda</h4>
                </div>
                <div class="mb-3">
                    <div class="col-md-8">
                        <label for="rugi_areal" class="form-label">{{ __('Luas Area (m2)') }}</label>
                        <input id="rugi_areal" type="number" class="form-control @error('rugi_areal') is-invalid @enderror" name="rugi_areal" value="{{ old('rugi_areal') }}" required autocomplete="rugi_areal" autofocus>
                        @error('rugi_areal')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <div class="col-md-8">
                        <label for="rugi_kk" class="form-label">{{ __('Kepala Keluarga') }}</label>
                        <input id="rugi_kk" type="number" class="form-control @error('rugi_kk') is-invalid @enderror" name="rugi_kk" value="{{ old('rugi_kk') }}" required autocomplete="rugi_kk" autofocus>
                        @error('rugi_kk')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <div class="col-md-8">
                        <label for="rugi_jiwa" class="form-label">{{ __('Jiwa') }}</label>
                        <input id="rugi_jiwa" type="number" class="form-control @error('rugi_jiwa') is-invalid @enderror" name="rugi_jiwa" value="{{ old('rugi_jiwa') }}" required autocomplete="rugi_jiwa" autofocus>
                        @error('rugi_jiwa')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <div class="col-md-8">
                        <label for="rugi_rupiah" class="form-label">{{ __('Taksiran Kerugian (Rp)') }}</label>
                        <input id="rugi_rupiah" type="number" class="form-control @error('rugi_rupiah') is-invalid @enderror" name="rugi_rupiah" value="{{ old('rugi_rupiah') }}" required autocomplete="rugi_rupiah" autofocus>
                        @error('rugi_rupiah')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 row g-3">
                    <div class="col-md-6">
                        <label for="rugi_bp_" class="form-label">{{ __('Bangunan Perumahan') }}</label>
                        <input id="rugi_bp_" type="number" class="form-control @error('rugi_bp_') is-invalid @enderror" name="rugi_bp_" value="{{ old('rugi_bp_') }}" required autocomplete="rugi_bp_" autofocus>
                        @error('rugi_bp_')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="rugi_bup_" class="form-label">{{ __('Bangunan Umum dan Perdangan') }}</label>
                        <input id="rugi_bup_" type="number" class="form-control @error('rugi_bup_') is-invalid @enderror" name="rugi_bup_" value="{{ old('rugi_bup_') }}" required autocomplete="rugi_bup_" autofocus>
                        @error('rugi_bup_')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 row g-3">
                    <div class="col-md-6">
                        <label for="rugi_bi_" class="form-label">{{ __('Bangunan Industri') }}</label>
                        <input id="rugi_bi_" type="number" class="form-control @error('rugi_bi_') is-invalid @enderror" name="rugi_bi_" value="{{ old('rugi_bi_') }}" required autocomplete="rugi_bi_" autofocus>
                        @error('rugi_bi_')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="rugi_kd_" class="form-label">{{ __('Kendaraan') }}</label>
                        <input id="rugi_kd_" type="number" class="form-control @error('rugi_kd_') is-invalid @enderror" name="rugi_kd_" value="{{ old('rugi_kd_') }}" required autocomplete="rugi_kd_" autofocus>
                        @error('rugi_kd_')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 row g-3">
                    <div class="col-md-6">
                        <label for="rugi_ilg_" class="form-label">{{ __('Instalasi Luar Gedung') }}</label>
                        <input id="rugi_ilg_" type="number" class="form-control @error('rugi_ilg_') is-invalid @enderror" name="rugi_ilg_" value="{{ old('rugi_ilg_') }}" required autocomplete="rugi_ilg_" autofocus>
                        @error('rugi_ilg_')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="rugi_tb_" class="form-label">{{ __('Tumbuhan') }}</label>
                        <input id="rugi_tb_" type="number" class="form-control @error('rugi_tb_') is-invalid @enderror" name="rugi_tb_" value="{{ old('rugi_tb_') }}" required autocomplete="rugi_tb_" autofocus>
                        @error('rugi_tb_')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 row g-3">
                    <div class="col-md-6">
                        <label for="rugi_lpk_" class="form-label">{{ __('Lapak') }}</label>
                        <input id="rugi_lpk_" type="number" class="form-control @error('rugi_lpk_') is-invalid @enderror" name="rugi_lpk_" value="{{ old('rugi_lpk_') }}" required autocomplete="rugi_lpk_" autofocus>
                        @error('rugi_lpk_')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="rugi_s_" class="form-label">{{ __('Sampah') }}</label>
                        <input id="rugi_s_" type="number" class="form-control @error('rugi_s_') is-invalid @enderror" name="rugi_s_" value="{{ old('rugi_s_') }}" required autocomplete="rugi_s_" autofocus>
                        @error('rugi_s_')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <div class="col-md-6">
                        <label for="rugi_ln_" class="form-label">{{ __('Lain-lain') }}</label>
                        <input id="rugi_ln_" type="number" class="form-control @error('rugi_ln_') is-invalid @enderror" name="rugi_ln_" value="{{ old('rugi_ln_') }}" required autocomplete="rugi_ln_" autofocus>
                        @error('rugi_ln_')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="btn btn-primary mb-3 float-end">
                <button type="submit" class="btn btn-primary">
                    {{ __('Simpan') }}
                </button>
            </div>
            
        </form>
    </div>
 
    <!-- <div class="text-center text-white py-2 bg-primary rounded">Yudha Brama Jaya 2021</div> -->
</div>
@endsection
