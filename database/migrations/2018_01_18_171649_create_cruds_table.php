<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Crud;

class CreateCrudsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cruds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ime')->default('anonymous');
            $table->string('prezime')->default('anonymous');
            $table->string('email')->unique()->default(Crud::BLANK);
            $table->string('zanimanje')->default(Crud::BLANK);
            // $table->decimal('pare', 10, 8)->default(0.0); umesto ovoga koristim 
            // u koloni pare je uvek pozitivan broj
            $table->unsignedDecimal('pare', 10, 8)->default(0.0);   
            // dozvoljava da se unesu true i false vrednosti kao default
            $table->string('peder')->nullable($value = true);
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
        Schema::dropIfExists('cruds');
    }
}
