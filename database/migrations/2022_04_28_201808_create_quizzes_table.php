<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Quiz;

class CreateQuizzesTable extends Migration{

    public function up(){
        Schema::create('quizzes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->text('description');
            $table->enum('status',[Quiz::DISABLED, Quiz::ENABLED])->default(Quiz::DISABLED);
            $table->integer('watch')->default(0);
            $table->unsignedBigInteger('level_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('level_id')->references('id')->on('levels');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('quizzes');
    }
}
