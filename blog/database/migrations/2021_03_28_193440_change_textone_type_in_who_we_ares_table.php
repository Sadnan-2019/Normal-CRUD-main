<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeTextoneTypeInWhoWeAresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('who_we_ares', function (Blueprint $table) {
            //

            $table->longText('textone')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('who_we_ares', function (Blueprint $table) {
            $table->string('textone')->change();
            //
        });
    }
}
