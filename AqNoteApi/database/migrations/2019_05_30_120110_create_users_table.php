<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('idU');
            $table->timestamps();
            $table->string('name', 20 );
            $table->string('surname', 50);
            $table->string('mail', 50);
            $table->text('password',255 )->nullable();
            $table->unsignedInteger('matriculationNumber');
            $table->string('api_key')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
