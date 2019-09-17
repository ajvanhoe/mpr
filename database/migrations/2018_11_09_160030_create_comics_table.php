<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->increments('id');

            $table->string('title');                        
            $table->string('author')->nullable()->default('nepoznat');
            $table->string('publisher')->nullable()->default('nepoznato');   
            $table->string('press')->nullable()->default('nepoznato'); 

            $table->string('year')->nullable();         
            $table->string('edition')->nullable();  
            $table->text('description')->nullable();     

            $table->string('code')->nullable()->default('nema');     
            $table->integer('price')->nullable();      

            $table->string('category')->nullable()->default('nedefinisano');        
            $table->string('subcategory')->nullable()->default('nedefinisano'); 

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
        Schema::dropIfExists('comics');
    }
}
