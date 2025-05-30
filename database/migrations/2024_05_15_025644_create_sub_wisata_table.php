<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sub_wisatas', function (Blueprint $table) {
            $table->id();
            $table->integer('wisata_id');
            $table->string('nama');
            $table->string('slug');
            $table->string('coordinate');
            $table->longText('deskripsi');
            $table->string('alamat');
            $table->string('link_video');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_wisatas');
    }
};
