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
        Schema::create('cameras', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // e.g., Front Door
            $table->string('location'); // e.g., Warehouse A
            $table->string('ip_address');
            $table->integer('port')->default(554); // Default RTSP port
            $table->string('username')->nullable();
            $table->string('password')->nullable();
            $table->string('stream_url'); // The full RTSP or HTTP path
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cameras');
    }
};
