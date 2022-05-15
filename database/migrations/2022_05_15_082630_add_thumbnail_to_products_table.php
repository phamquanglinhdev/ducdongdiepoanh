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
        Schema::table('products', function (Blueprint $table) {
            $table->longText("first_thumbnail");
            $table->longText("second_thumbnail");
            $table->longText("third_thumbnail")->nullable();
            $table->longText("four_thumbnail")->nullable();
            $table->longText("five_thumbnail")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn("first_thumbnail");
            $table->dropColumn("second_thumbnail");
            $table->dropColumn("third_thumbnail");
            $table->dropColumn("four_thumbnail");
            $table->dropColumn("five_thumbnail");
        });
    }
};
