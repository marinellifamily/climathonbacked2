<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolutionsLawsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solutions_laws', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('solution_id')->unsigned()->index();
            $table->integer('law_id')->unsigned()->index();
            $table->timestamps();

            $table->foreign('solution_id')->references('id')->on('solutions');
            $table->foreign('law_id')->references('id')->on('laws');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solutions_laws');
    }
}
