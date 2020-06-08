<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChampionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('champions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('class');
            $table->float('baseAd');
            $table->float('baseArmor');
            $table->float('baseMr');
            $table->float('baseHp');
            $table->float('baseAs');
            $table->float('adPerLevel');
            $table->float('arPerLevel');
            $table->float('mrPerLevel');
            $table->float('hpPerLevel');
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
        Schema::dropIfExists('champions');
    }
}
