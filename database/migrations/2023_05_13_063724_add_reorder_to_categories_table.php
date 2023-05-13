<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->dropForeign("category_id");
            $table->renameColumn("category_id", "parent_id");
            $table->integer("depth")->default(0);
            $table->integer("lft")->default(0);
            $table->integer("rgt")->default(0);
            $table->foreign("parent_id")->references("id")->on("categories");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->dropForeign("parent_id");
            $table->dropColumn("lft");
            $table->dropColumn("rgt");
            $table->dropColumn("depth");
            $table->dropColumn("parent_id");
            $table->unsignedBigInteger("category_id")->nullable();
            $table->foreign("category_id")->references("id")->on("categories");
        });
    }
};
