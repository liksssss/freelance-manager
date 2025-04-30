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
        Schema::table('users', function (Blueprint $table) {
            $table->enum('role', ['admin', 'freelance', 'client'])->default('client')->after('password');
            $table->string('phone')->nullable()->after('role');
            $table->text('bio')->nullable()->after('phone');
            $table->string('skills')->nullable()->after('bio');
            $table->string('profile_photo')->nullable()->after('skills');
        });
    }
    
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['role', 'phone', 'bio', 'skills', 'profile_photo']);
        });
    }
    
};