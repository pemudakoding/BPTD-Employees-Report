<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivityPhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity_photos', function (Blueprint $table) {
            $table->id();
            $table->string('file_name');
            $table->foreignId('activity_report_id');
            $table->timestamps();

            $table->foreign('activity_report_id')
                ->references('id')
                ->on('activity_reports')
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activity_photos');
    }
}
