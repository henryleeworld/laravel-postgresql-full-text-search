<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->text('title');
            $table->text('content')->nullable();
            // $table->integer('user_id');
            $table->timestamps();
        });

        DB::statement('ALTER TABLE posts ADD searchable tsvector NULL');
        DB::statement('CREATE INDEX posts_searchable_index ON posts USING GIN (searchable)');
        // Or alternatively
        // DB::statement('CREATE INDEX posts_searchable_index ON posts USING GIST (searchable)');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
