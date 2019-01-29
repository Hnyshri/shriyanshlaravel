<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddColum extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('age')->nullable()->after('name');
            $table->date('dob')->after('age');
            $table->string('gender')->after('dob');
            $table->bigInteger('mobileNumber')->after('email');
            $table->string('address')->after('mobileNumber');
            $table->string('city')->after('address');
            $table->integer('pinCode')->after('city');
            $table->string('cityState')->after('pinCode');
            $table->string('fileName')->after('cityState');
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
        Schema::table('users', function (Blueprint $table) {
           $table->dropColumn('age');
            $table->dropColumn('dob');
            $table->dropColumn('gender');
            $table->dropColumn('mobileNumber');
            $table->dropColumn('address');
            $table->dropColumn('city');
            $table->dropColumn('pinCode');
            $table->dropColumn('cityState');
            $table->dropColumn('fileName');
        });
    }
}
