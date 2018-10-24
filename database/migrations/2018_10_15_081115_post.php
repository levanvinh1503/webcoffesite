<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Post extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->unsigned();
            $table->integer('user_id');
            $table->string('name');
            $table->string('slug')->unique();
            $table->mediumText('description');
            $table->text('content');
            $table->string('image');
            $table->integer('view');
            $table->boolean('status')->default(0);
            $table->timestamps();
        });
    }
}
