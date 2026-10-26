<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('plan');
            $table->renameColumn('name', 'full_name');
            $table->dropColumn('remember_token');
            $table->index('email_verified_at');
        });

        DB::table('users')->update(['plan' => 'free']);
    }
};
