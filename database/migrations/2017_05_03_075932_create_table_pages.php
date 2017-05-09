<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('href', 150)->nullable();
            $table->string('short_desc')->nullable();
            $table->text('text')->nullable();
            $table->string('shortcut')->nullable();
            $table->string('main_img')->nullable();
            $table->integer('parent_id')->nullable();
            $table->timestamps();

            $table->unique('href');
            $table->index(['parent_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pages');
    }
}
