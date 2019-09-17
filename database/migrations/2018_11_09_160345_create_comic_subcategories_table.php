<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComicSubcategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comic_subcategories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->integer('category_id');     // bitno + dodati key
            $table->integer('parent_id')->unsigned()->nullable()->default(null);
            
            //$table->string('description')->default('none');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comic_subcategories');
    }
}
