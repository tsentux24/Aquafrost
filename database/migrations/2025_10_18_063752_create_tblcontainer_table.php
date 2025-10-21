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
        Schema::create('tblcontainer', function (Blueprint $table) {
            $table->id();
            $table->string('judul',55);
            $table->text('isi');
            $table->string('class-ikon',55);
            $table->enum('status',['Aktiv','Non-Aktiv'])->default('Aktiv');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tblcontainer');
    }
};
