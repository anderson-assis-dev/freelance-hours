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
        Schema::create('proposals', function (Blueprint $table) {
            $table->id(); // id integer PRIMARY KEY AUTO_INCREMENT
            $table->string('email'); // email string
            $table->integer('hours'); // hours int
            $table->foreignId('project_id')->constrained('projects')->onDelete('cascade'); // project_id fk
            $table->timestamps(); // created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('proposals');
    }
};
