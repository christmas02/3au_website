<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projets', function (Blueprint $table) {
            $table->id();
            $table->string('picture_projet');
            $table->string('titre_projet');
            $table->string('sous_titre_projet');
            $table->text('description');
            $table->string('id_type_projet');
            $table->string('slug_type_projet');
            $table->string('id_service');
            $table->string('client_projet');
            $table->string('status');
            $table->string('temps');
            $table->string('phrase_acceroche');
            $table->string('slug_service');
            $table->string('is_deleted')->default('0');
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
        Schema::dropIfExists('projets');
    }
}
