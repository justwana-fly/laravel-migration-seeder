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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('Azienda', 255);
            $table->string('Stazione_di_partenza', 255);
            $table->string('Stazione_di_arrivo', 255);
            $table->time('Orario_di_partenza');  
            $table->time('Orario_di_arrivo');    
            $table->string('Codice_Treno', 50);  
            $table->integer('Numero_Carrozze');
            $table->boolean('In_orario');       
            $table->boolean('Cancellato');      
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
        Schema::dropIfExists('trains');
    }
};
