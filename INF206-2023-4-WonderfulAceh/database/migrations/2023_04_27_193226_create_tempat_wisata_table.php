<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('tempat_wisata', function (Blueprint $table) {
        $table->bigIncrements('id')->comment('The Primary Key for the table.');
        $table->string('slug');
        $table->string('nama_tempat');
        $table->string('alamat');
        $table->string('nama_pemilik');
        $table->string('nomor_pemilik');
        $table->foreignId('category_id');
        $table->text('deskripsi');
        $table->string('image');
        $table->foreignId('user_id');
        $table->timestamps();
    });
    
}
public function down()
{
    Schema::dropIfExists('tempat_wisata');
}


};
