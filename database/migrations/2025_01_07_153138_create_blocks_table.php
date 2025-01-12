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
        Schema::create('blocks', function (Blueprint $table) {
            $table->id();
            $table->string('block_title');
            $table->string('title')->nullable();
            $table->string('title1')->nullable();
            $table->string('title2')->nullable();
            $table->string('title3')->nullable();
            $table->string('title4')->nullable();
            $table->string('title5')->nullable();
            $table->unsignedBigInteger('landingpage_id');
            $table->timestamps();
            $table->foreign('landingpage_id')->references('id')->on('landingpages')->onDelete('cascade'); //tạo khóa ngoại tham chiếu đến cột id trong bản landingpages, tự động cập nhật xóa nếu xóa ở langdingpages.
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blocks');
    }
};
