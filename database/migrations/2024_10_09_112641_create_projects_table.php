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
        Schema::create('projects', function (Blueprint $table) {
            $table->id(); // id integer PRIMARY KEY AUTO_INCREMENT
            $table->string('title'); // title string
            $table->text('description')->comment('Content of the post'); // description text COMMENT 'Content of the post'
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // user_id fk
            $table->string('status'); // status string
            $table->json('tech_stack')->nullable(); // tech_stack json
            $table->timestamps(); // created_at and updated_at
            $table->timestamp('ends_at')->nullable(); // ends_at timestamp
        });
    }

    public function down()
    {
        Schema::dropIfExists('projects');
    }
};
