<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();

            $table->string('image')->nullable();
            $table->string('title');
            $table->string('author');
            $table->text('content');

            $table->string('SEOtitles')->nullable();
            $table->string('SEOdescriptions')->nullable();
            $table->string('SEOkeywords')->nullable();

            $table->date('date_of_creation');
            $table->string('visibility');


            $table->string('views')->nullable();
            $table->string('type')->nullable();

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
        Schema::dropIfExists('news');
    }
};
