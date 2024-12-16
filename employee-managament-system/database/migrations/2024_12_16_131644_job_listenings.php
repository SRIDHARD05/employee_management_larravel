<?php

use App\Models\Employer;
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
    public function up() : void
    {
        Schema::create('job', function(Blueprint $table){
            $table->id();
            $table->foreignIdFor(\App\Models\Employer::class);
            $table->string('title');
            $table->string('salary');
            // Correct usage: specify a column name for the timestamp
            $table->timestamp('created_at')->nullable();  // Example: created_at column
            $table->timestamp('updated_at')->nullable();  // Example: updated_at column
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() : void
    {
        Schema::dropIfExists('job');
    }
};
