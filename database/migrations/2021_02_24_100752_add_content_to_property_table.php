<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddContentToPropertyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('property', function (Blueprint $table) {
            //
            $table-> string('name');
            $table-> string('location');
            $table-> string('type');
            $table-> double('area');
            $table-> double('bed');
            $table-> double('bath');
            $table-> double('garage');
            $table-> string('agent');
   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('property', function (Blueprint $table) {
            $table->dropColumn(['name','location','type','area','bed','bath','garage','agent']);
        });
    }
}
