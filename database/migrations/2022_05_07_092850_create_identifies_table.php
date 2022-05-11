<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdentifiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('identifies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('answer_id')->constrained();
            $table->string('token');
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
        Schema::dropIfExists('identifies');
    }

    /**
     * Get the answer that owns the 2022_05_07_092850_create_identifies_table
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function answer(): BelongsTo
    {
        return $this->belongsTo(Answer::class, "answer_id");
    }
}
