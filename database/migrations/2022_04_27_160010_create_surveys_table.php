<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surveys', function (Blueprint $table) {
            $table->id();
            $table->string("email");
            $table->integer("age")->length(2);
            $table->string("sex");
            $table->integer("family_members");
            $table->string("job", 255);
            $table->string("used_vr");
            $table->string("vr_content_store");
            $table->string("futur_vr");
            $table->integer("bs_users");
            $table->string("bs_use");
            $table->integer("bs_pics_score");
            $table->integer("bs_comfort_score");
            $table->integer("bs_network_score");
            $table->integer("bs_3d_score");
            $table->integer("bs_audio_score");
            $table->string("bs_notif");
            $table->string("smartphone_use");
            $table->integer("record_shows");
            $table->integer("exclusive_games");
            $table->string("dream_features", 255);
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
        Schema::dropIfExists('surveys');
    }
}
