<?php

use App\Models\Gie;
use App\Models\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('demande_clients', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->string('reference');
            $table->string('desc');
            $table->integer('status')->default(0);
            $table->integer('amount')->nullable();
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Gie::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demande_clients');
    }
};
