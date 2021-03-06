<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreign('id')->references('id')->on('articles')->onDelete('cascade');
            $table->string('image1',100);
            $table->string('image2',100)->nullable();
            $table->string('image3',100)->nullable();
            $table->string('image4',100)->nullable();
            $table->string('image5',100)->nullable();
            $table->string('image6',100)->nullable();

            $table->text('text1');
            $table->text('text2')->nullable();
            $table->text('text3')->nullable();
            $table->text('text4')->nullable();
            $table->text('text5')->nullable();
            $table->text('text6')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
