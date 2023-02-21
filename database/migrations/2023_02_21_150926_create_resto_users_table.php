<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resto_users', function (Blueprint $table) {
            $table->id();
            $table->string(username);
            $table->string(password);
            $table->integer(is_deleted);
            $table->integer(id_restaurant);
            $table->integer(id_subscription);
            $table->integer(id_client);
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
        Schema::dropIfExists('resto_users');
    }
};
