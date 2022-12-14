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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();

            $table->foreignId('id_client')
                ->restrictOnDelete('cascade')
                ->constrained('clients');

            $table->foreignId('id_user')
                ->restrictOnDelete('cascade')
                ->constrained('users');

            $table->string('debu');
            $table->string('fin');
            $table->string('prix');
            $table->string('qantiter');
            $table->string('total');
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
        Schema::dropIfExists('invoices');
    }
};