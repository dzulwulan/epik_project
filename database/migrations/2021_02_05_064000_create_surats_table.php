<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surats', function (Blueprint $table) {
            $table->id();
            $table->string('no_regis');
            $table->string('jenis_surat');
            $table->string('name');   
            $table->string('nik');
            $table->string('jenis_kelamin');
            $table->string('tempat_lhr');
            $table->date('tgl_lhr');
            $table->string('agama');
            $table->string('warga_negara');
            $table->string('pekerjaan'); 
            $table->string('alamat');
            $table->text('keperluan');
            $table->string('created_by');
            $table->string('status');
            $table->string('file_path');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surats');
    }
}
