<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\SoftDeletes;

return new class extends Migration
{
    use SoftDeletes;
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->boolean('status')->default(1);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();


            // $table->unsignedBigInteger('created_by')->nullable();
            // $table->unsignedBigInteger('updated_by')->nullable();
            // $table->unsignedBigInteger('deleted_by')->nullable();

            // $table->foreign('created_by')->references('id')->on('admins')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreign('updated_by')->references('id')->on('admins')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreign('deleted_by')->references('id')->on('admins')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
