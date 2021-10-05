<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('waktu');
            $table->integer('unit');

            $table->integer('jp');
            $table->integer('jp_d');
            $table->integer('ju');
            $table->integer('ju_d');
            $table->integer('jb');
            $table->integer('jb_d');
            $table->integer('js');
            $table->integer('js_d');
            $table->integer('jt');
            $table->integer('jt_d');

            $table->integer('o_bp');
            $table->integer('o_bup');
            $table->integer('o_bi');
            $table->integer('o_kd');
            $table->integer('o_ilg');
            $table->integer('o_tb');
            $table->integer('o_lpk');
            $table->integer('o_s');
            $table->integer('o_ln');


            $table->integer('k_ls');
            $table->integer('k_gas');
            $table->integer('k_lln');
            $table->integer('k_ms');
            $table->integer('k_rk');
            $table->integer('k_ln');


            $table->integer('jiwa_petugas_luka');
            $table->integer('jiwa_petugas_mati');
            $table->integer('jiwa_warga_luka');
            $table->integer('jiwa_warga_mati');
            
            $table->integer('rugi_areal');
            $table->integer('rugi_bp_');
            $table->integer('rugi_bup_');
            $table->integer('rugi_bi_');
            $table->integer('rugi_kd_');
            $table->integer('rugi_ilg_');
            $table->integer('rugi_tb_');
            $table->integer('rugi_lpk_');
            $table->integer('rugi_s_');
            $table->integer('rugi_ln_');
            $table->integer('rugi_kk');
            $table->integer('rugi_jiwa');
            $table->bigInteger('rugi_rupiah');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
