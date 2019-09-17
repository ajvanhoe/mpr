<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookSubcategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_subcategories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->integer('category_id');     // bitno + dodati key
            $table->integer('parent_id')->unsigned()->nullable()->default(null);

            //$table->string('description')->nullable()->default('none');
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
        Schema::dropIfExists('book_subcategories');
    }
}
