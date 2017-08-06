<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDistrictEstsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('district_ests', function (Blueprint $table) {
            $table->char('dist_id', 10);
            $table->integer('est_id');
            $table->timestamps();
            $table->foreign('dist_id')->references('dist_code')->on('districts')->onDelete('restrict');
            $table->foreign('est_id')->references('est_code')->on('establishments')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('district_ests');
    }
}
