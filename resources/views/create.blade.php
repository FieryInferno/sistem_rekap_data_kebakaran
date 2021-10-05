@extends('layouts.app')
@section('title', 'Tambah Kasus')
@section('content')
<div class="container-xxl">
    <h1 class="pb-2">Tambah kasus</h1>
    <div class="card border-white shadow-sm mb-3">
        <form class="pt-4 px-4" method="POST" action="{{ route('store') }}">
            @csrf
            <div class="pb-3">
                <div class="mb-3">
                    <h4>Detail kasus</h4>
                </div>
                <div class="mb-3 row g-3">
                    <div class="col-md-8">
                        <label for="nama" class="form-label">{{ __('Nama Kejadian') }}</label>
                        <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" required autocomplete="nama" autofocus>
                        @error('nama')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <label for="waktu" class="form-label">{{ __('Tanggal Kejadian') }}</label>
                        <input id="waktu" type="date" class="form-control @error('waktu') is-invalid @enderror" name="waktu" value="{{ old('waktu') }}" required autocomplete="waktu" autofocus>
                        @error('waktu')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <div class="col-md-6">
                        <label for="rugi_unit" class="form-label">{{ __('Unit') }}</label>
                        <input id="rugi_unit" type="number" class="form-control @error('rugi_unit') is-invalid @enderror" name="rugi_unit" value="{{ old('rugi_unit') }}" required autocomplete="rugi_unit" autofocus>
                        @error('rugi_unit')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <div class="col-md-6">
                        <label for="wilayah" class="form-label">{{ __('Wilayah') }}</label>
                        <select class="form-select" name="wilayah">
                            <option value="JP">Jakarta Pusat</option>
                            <option value="JU">Jakarta Utara</option>
                            <option value="JB">Jakarta Barat</option>
                            <option value="JS">Jakarta Selatan</option>
                            <option value="JT">Jakarta Timur</option>
                        </select>
                        @error('wilayah')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <div class="col-md-6">
                        <label for="objek" class="form-label">{{ __('Objek Bencana') }}</label>
                        <select class="form-select" name="objek">
                            <option value="BP">Bangunan Perumahan</option>
                            <option value="BUP">Bangunan Umum dan Perdagangan</option>
                            <option value="BI">Bangunan Industri</option>
                            <option value="KD">Kendaraan</option>
                            <option value="ILG">Instalasi Luar Gedung</option>
                            <option value="TB">Tumbuhan</option>
                            <option value="LPK">Lapak</option>
                            <option value="S">Sampah</option>
                            <option value="LN">Lain-lain</option>
                        </select>
                        @error('objek')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <div class="col-md-6">
                        <label for="klausa" class="form-label">{{ __('Dugaan Penyebab') }}</label>
                        <select class="form-select" name="klausa">
                            <option value="LS">Listrik</option>
                            <option value="GAS">Gas</option>
                            <option value="LLN">Lilin</option>
                            <option value="MS">Membakar Sampah</option>
                            <option value="RK">Rokok</option>
                            <option value="LN">Lain-lain</option>
                        </select>
                        @error('klausa')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <div class="col-md-6">
                        <label for="masy" class="form-label">{{ __('Diatasi Masyarakat') }}</label>
                        <input type="hidden" name="masy" value="0">
                        <input id="masy" type="checkbox" class="form-check-input @error('masy') is-invalid @enderror" name="masy" value="1" required autocomplete="masy" autofocus {{ old('masy') == '1' ? 'checked' : '' }}>
                        @error('masy')
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
