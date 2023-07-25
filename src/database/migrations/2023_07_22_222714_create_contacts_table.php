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
            $table->unsignedBigInteger('id');
            $table->string('fullname',255);
            $table->tinyInteger('gender')->unsigned()->comment(' 1:男、2:女');
            $table->string('email',255);
            $table->char('postcode', 8);
            $table->string('address',255);
            $table->string('Building_name',255);
            $table->text('opinion');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
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
