<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('employees')){
            return false;
        }
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name',100);
            $table->string('last_name',100);
            $table->unsignedInteger('company_id');
            $table->foreign('company_id')
                ->references('id')->on('companies')->onUpdate('cascade')->onDelete('cascade');
            $table->string('email',100);    
            $table->string('phone',100);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
