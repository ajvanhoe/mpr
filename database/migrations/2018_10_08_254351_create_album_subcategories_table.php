<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlbumSubcategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('album_subcategories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->integer('category_id');     // bitno + dodati key
            $table->integer('parent_id')->unsigned()->nullable()->default(null);

            //$table->string('description')->nullable()->default('nema');
            //$table->timestamps();

            /* $table->foreign('parent_id')->references('id')->on('categories')->onUpdate('cascade')->onDelete('set null'); */

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('album_subcategories');
    }
}
