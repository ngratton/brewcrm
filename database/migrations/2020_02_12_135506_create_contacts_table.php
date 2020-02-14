<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('prenom');
            $table->string('nom');
            $table->string('titre')->nullable();
            $table->string('email_1')->unique()->nullable();
            $table->enum('email_1_type', ['work', 'personal'])->nullable();
            $table->string('email_2')->nullable();
            $table->enum('email_2_type', ['work', 'personal'])->nullable();
            $table->string('phone_1')->nullable();
            $table->enum('phone_1_type', ['work','cell','home','pager'])->nullable();
            $table->string('phone_2')->nullable();
            $table->enum('phone_2_type', ['work','cell','home','pager'])->nullable();
            $table->integer('companie_id')->nullable();
            $table->text('notes')->nullable();
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
        Schema::dropIfExists('contacts');
    }
}
