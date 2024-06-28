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
            if (! Schema::hasTable('withdraws')) {

                Schema::create('withdraws', function (Blueprint $table) {
                    $table->bigIncrements('id');
                    $table->integer('user_id')->unsigned();
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
            Schema::dropIfExists('withdraws');
        }
    };
