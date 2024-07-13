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
            $table->id('Id');
            $table->string('Name');
            $table->unsignedBigInteger('Fk_department');
            $table->unsignedBigInteger('Fk_designation');
            $table->string('Phone_number');
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('Fk_department')->references('id')->on('departments')->onDelete('cascade');
            $table->foreign('Fk_designation')->references('id')->on('designations')->onDelete('cascade');
        });   
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
       
    }
};
