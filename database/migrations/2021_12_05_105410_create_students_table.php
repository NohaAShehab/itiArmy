<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id(); // unsigned bigint for id -- auto incremented
            # id not null , # primary key

            # column studentname doesn't accept null
            $table->string("studentname",100);
            #column img --> accept null
            $table->string("img")->nullable();
            $table->integer("grade")->default(100);
            $table->boolean("is_absent")->default(false)->nullable();
            $table->timestamps();
            # create 2 columns created_at, updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
