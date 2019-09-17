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
            $table->string('author')->default('nepoznat');
            $table->string('publisher')->default('nepoznato');   
            $table->string('year')->nullable();         
            $table->string('edition')->nullable();  
            $table->text('description')->nullable();     

            $table->string('code')->default('nema');     
            $table->integer('price')->nullable();      

            $table->string('category')->default('nedefinisano');        
            $table->string('subcategory')->default('nedefinisano'); 

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
