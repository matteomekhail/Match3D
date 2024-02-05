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
        Schema::table('users', function () {
            DB::statement('ALTER TABLE users MODIFY documentFront LONGBLOB');
            DB::statement('ALTER TABLE users MODIFY documentBack LONGBLOB');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function () {
            DB::statement('ALTER TABLE users MODIFY documentFront BLOB');
            DB::statement('ALTER TABLE users MODIFY documentBack BLOB');
        });
    }
};
