<?php

use App\Enums\Log\LogAction;
use App\Enums\Log\LogMethod;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('logs', function (Blueprint $table) {
            $table->id();
            $table->string('table_name')->nullable(); // Tên bảng bị thay đổi
            $table->enum('action', LogAction::getValues()); // Hành động

            $table->unsignedBigInteger('user_id')->nullable(); // Người thực hiện
            $table->string('user_name')->nullable(); // Tên người thực hiện
            $table->ipAddress('ip_address')->nullable(); // IP của user
            $table->string('user_agent')->nullable(); // Trình duyệt user

            $table->string('url')->nullable(); // URL request
            $table->enum('method', LogMethod::getValues())->nullable();
            $table->integer('status')->nullable();

            $table->timestamps();

            // Khóa ngoại (nếu cần)
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::dropIfExists('logs');
    }
};
