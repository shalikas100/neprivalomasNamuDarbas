<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Author;
use App\Book;

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

            $table->bigIncrements('id');
            $table->unsignedBigInteger('author_id');
            // $table->foreign('author_id')->references('id')->on('author');
            $table->string('title');
            $table->string('isbn');
            $table->string('pages');
            $table->string('about');
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
