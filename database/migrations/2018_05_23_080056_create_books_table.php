<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',55)->index('title')->comment('标题');
            $table->string('sort',20)->index('sort')->comment('分类');
            $table->text('summary')->comment('简介');
            $table->string('thumb',150)->comment('封面');
            $table->string('link',150)->comment('链接');
            $table->integer('quantity')->default(0)->comment('章节数');
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
        Schema::dropIfExists('books');
    }
}
