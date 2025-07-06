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
        Schema::create('confessions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('photo')->nullable();
            $table->date('dateofbirth');
            $table->string('work')->nullable();
            $table->string('talent')->nullable();
            $table->enum('Gender',['male', 'female']);
            $table->enum('Marital_Status',['single', 'married', 'divorced', 'widowed']);
            $table->enum('service',['child', 'Preparatory' ,'Secondary','Youth','Other Services']);
            $table->boolean('Deacon')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('confessions');
    }
};
