<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
          $table->id();
        $table->foreignId('etudiant_id')->constrained()->onDelete('cascade');
        $table->foreignId('module_id')->constrained()->onDelete('cascade');
        $table->float('note_intra');
        $table->float('note_projet');
        $table->float('note_final');
        $table->float('moyenne');
        // contrainte : une seule note par étudiant et par module
        $table->unique(['etudiant_id', 'module_id']);
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
        Schema::dropIfExists('notes');
    }
}
