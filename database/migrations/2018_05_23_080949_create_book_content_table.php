<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookContentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_content', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',55)->index()->comment('标题');
            $table->text('audio')->comment('语音地址');
            $table->text('text')->comment('文本内容');
            $table->tinyInteger('sex')->default(1)->comment('播音员性别，1：男，2：女');
            $table->integer('books_id')->index()->comment('专辑ID');
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
        Schema::dropIfExists('book_content');
    }
}
