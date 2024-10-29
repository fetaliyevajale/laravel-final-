<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // İstifadəçi adı
            $table->string('email')->unique(); // E-poçt unikal olmalıdır
            $table->string('password'); // Şifrə
            $table->rememberToken(); // "Remember me" funksiyası üçün
            $table->timestamps(); // Yaradılma və yenilənmə vaxtları
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}

