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
            $table->string('titre_section_one');
            $table->string('sous_titre_section_one');
            $table->text('description_section_one');
            $table->string('titre_section_two');
            $table->string('sous_titre_section_two');
            $table->text('description_section_two');
            $table->string('signature_image_path');
            $table->string('nom_signataire');
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
