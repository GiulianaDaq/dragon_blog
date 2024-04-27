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
        Schema::create('adventure_tag', function (Blueprint $table) {
            //chiave della tabella adventure_tag
            $table->id();

            //definiamo chiave esterna per tabella adventures
            $table->unsignedBigInteger('adventure_id');
            $table->foreign('adventure_id')->references('id')->on('adventures')->onDelete('cascade');;
            
            //definiamo chiave esterna tabella tag
            $table->unsignedBigInteger('tag_id');
            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');;
            
            //created_at e updated_at
            $table->timestamps();
        });
    }

  

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
      
        Schema::dropIfExists('adventure_tag');
    }
};
