<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcceuilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acceuils', function (Blueprint $table) {
            $table->id();
            $table->string('titre_section_one')->nullable();
            $table->string('sous_titre_section_one')->nullable();
            $table->text('description_section_one')->nullable();
            $table->text('contenue_section_one')->nullable();
            $table->string('titre_section_two')->nullable();
            $table->string('sous_titre_section_two')->nullable();
            $table->text('description_section_two')->nullable();
            $table->text('contenue_section_two')->nullable();
            $table->string('signature_image_path')->nullable();
            $table->string('nom_signataire')->nullable();
            $table->string('image_directeur')->nullable();
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
        Schema::dropIfExists('acceuils');
    }
}
