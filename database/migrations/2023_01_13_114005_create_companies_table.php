<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('company_name')->default('AloaPosManagement');
            $table->string('company_address')->default('AloaPosManagement_remote');
            $table->string('company_phone')->default('+256783765062');
            $table->string('company_fax')->default('+256704259828');
            $table->string('company_email')->default('reaganlwasa@gmail.com');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
};