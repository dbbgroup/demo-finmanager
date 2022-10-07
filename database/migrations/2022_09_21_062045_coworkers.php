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
        Schema::create('coworkers', function (Blueprint $table) {
            $table->id();
            $table->integer('company_id');
            $table->text('name');
            $table->text('role');
            $table->date('dob');
            $table->timestamp('created_at')->useCurrent();
            $table->text('additional');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
