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
        if (! Schema::hasTable('transfers')) {
            Schema::create('transfers', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->integer('transferFrom')->unsigned();
                $table->integer('transferTo')->unsigned();
                $table->float('amount', 8,2);
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transfers');
    }
};
