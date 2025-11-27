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
        Schema::create('settingseos', function (Blueprint $table) {
            $table->id();
            $table->string('meta_title', 150)->nullable();
            $table->string('meta_description', 255)->nullable();
            $table->string('meta_keywords', 255)->nullable();
            $table->string('robots', 50)->default('index, follow');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settingseos');
    }

    private function dropSettingseosTable(): void {
        if (!Schema::hasTable('settingseos')){
            return;
        }
        
        // Matikan cek FK (opsional; aman kalau ada FK yang mengarah ke Settingseos)
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Schema::dropIfExists('settingseos');
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
};
