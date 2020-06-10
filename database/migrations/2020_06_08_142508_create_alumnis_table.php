<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnis', function (Blueprint $table) {
            $table->increments('idapp');
            $table->char('nom');
            $table->char('prenom');
            $table->date('dateDeNaissance');
            $table->char('sexe');
            $table->char('formation');
            $table->char('etablissement');
            $table->integer('telephone');
            $table->char('promotion');
            $table->char('entrepriseActuelle');
            $table->char('fonction');
            $table->char('nationalite');
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
        Schema::dropIfExists('alumnis');
    }
}
