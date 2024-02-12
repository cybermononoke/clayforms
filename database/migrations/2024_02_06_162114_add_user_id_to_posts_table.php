<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            // Add the user_id column
            $table->unsignedBigInteger('user_id')->nullable();

            // Add a foreign key constraint to link the user_id column to the id column in the users table
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            // Drop the user_id column
            $table->dropColumn('user_id');
        });
    }
};
