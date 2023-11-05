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
        Schema::create('thoughts', function (Blueprint $table) {
            $table->id();
            $table->integer("chapter_id");
            $table->text("prehtml")->nullable();
            $table->unsignedBigInteger("work_fk");
            $table->timestamps();

            $table->foreign("work_fk")
                ->references("id")
                ->on("works")
                ->onDelete("cascade")
                ->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('thoughts');
    }
};
