<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('milk_receptions', function (Blueprint $table) {
            $table->id();

            $table->foreignId('id_user')
                ->restrictOnDelete('cascade')
                ->constrained('users');

            $table->foreignId('id_client')
                ->restrictOnDelete('cascade')
                ->constrained('clients');

            $table->string('period');

            $table->float('quantity', 8, 2);
            $table->string('density');

            $table->float('heat', 8, 2);
            $table->date('date_payment')->nullable();

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
        Schema::dropIfExists('milk_receptions');
    }
};