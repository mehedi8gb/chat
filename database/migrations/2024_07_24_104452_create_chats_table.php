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
        Schema::create('chats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            // $table->foreignId('inbox_id')->constrained()->cascadeOnDelete();
            $table->text('message');
            $table->boolean('is_read')->default(false);
            $table->boolean('is_deleted')->default(false);
            $table->timestamp('deleted_at')->nullable();
            $table->timestamp('read_at')->nullable();
            $table->timestamp('sent_at')->nullable();
            $table->timestamp('edited_at')->nullable();
            $table->timestamp('forwarded_at')->nullable();
            $table->timestamp('replied_at')->nullable();
            $table->timestamp('quoted_at')->nullable();
            $table->timestamp('pinned_at')->nullable();
            $table->timestamp('starred_at')->nullable();
            $table->timestamp('archived_at')->nullable();
            $table->timestamp('muted_at')->nullable();
            $table->timestamp('unmuted_at')->nullable();
            $table->timestamp('deleted_for_everyone_at')->nullable();
            $table->timestamp('edited_for_everyone_at')->nullable();
            $table->timestamp('forwarded_for_everyone_at')->nullable();
            $table->timestamp('replied_for_everyone_at')->nullable();
            $table->timestamp('quoted_for_everyone_at')->nullable();
            $table->timestamp('pinned_for_everyone_at')->nullable();
            $table->timestamp('starred_for_everyone_at')->nullable();
            $table->timestamp('archived_for_everyone_at')->nullable();
            $table->timestamp('muted_for_everyone_at')->nullable();
            $table->timestamp('unmuted_for_everyone_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chats');
    }
};
