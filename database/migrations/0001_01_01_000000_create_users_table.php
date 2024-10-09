<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // id integer PRIMARY KEY AUTO_INCREMENT
            $table->string('name'); // name string
            $table->string('email'); // email string
            $table->string('avatar')->nullable(); // avatar string
            $table->integer('rating')->default(0); // rating int
            $table->timestamps(); // created_at and updated_at
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
