<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlbumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albums', function (Blueprint $table) {
            $table->increments('id');
		    $table->string('title');                        
			$table->string('publisher')->nullable()->default('nepoznato');     
            $table->string('press')->nullable()->default('nepoznato');     
			$table->string('year')->nullable();         
			$table->integer('edition')->nullable();     
			
			$table->string('code')->nullable()->default('nema');     
			$table->text('description')->nullable();     
			$table->integer('price')->nullable();        
			
            // 'popunjeni', 'prazni', 'zapopunjavanje', 'materijali', 'slabopopunjeni'  
			$table->string('type')->nullable()->default('nedefinisano'); 
                            
			$table->string('category')->nullable()->default('nedefinisano');        
			$table->string('subcategory')->nullable()->default('nedefinisano');  
			
            $table->timestamps();

            //$table->foreign('category')->references('title')->on('album_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('albums');
    }
}
