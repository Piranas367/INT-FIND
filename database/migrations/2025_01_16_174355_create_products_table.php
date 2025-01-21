<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
    DB::table('products')->insert([
        [
            'name' => 'Dell XPS 13',
            'description' => 'Compact and powerful laptop with InfinityEdge display',
        ],
        [
            'name' => 'Bose SoundLink Revolve',
            'description' => 'Portable Bluetooth speaker with deep and immersive sound',
        ],
    ]);
}



    /**
     * Reverse the migrations.
     */     
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
