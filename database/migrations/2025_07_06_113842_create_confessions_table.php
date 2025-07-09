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
            $table->string('fullname');
            $table->string('photo')->nullable();
            $table->date('dob');
            $table->enum('gender', ['male', 'female']);
            $table->string('phone_number')->nullable();
            $table->text('address')->nullable();
            $table->enum('marital_status', ['single', 'married', 'divorced', 'widowed']);
            $table->string('work')->nullable();
            $table->text('talents')->nullable();
            $table->enum('service_type', ['child', 'Preparatory', 'Secondary', 'Youth', 'Adult']);
            $table->boolean('is_deacon')->default(false);
            $table->date('lastvisit');
            $table->date('nextvisit');
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
