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
    Schema::create('livres', function (Blueprint $table) {
        $table->string('ISBN')->primary();
        $table->string('nom');
        $table->string('auteur');
        $table->date('date_publication');
        $table->integer('stock');
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
        Schema::dropIfExists('livres');
    }
};
