<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
     Schema::table('posts', function (Blueprint $table) {
        $table->tinyInteger('status');
        $table->integer('user_id')->unsigned();
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');;
        $table->string('title',100)->change();
        $table->string('slug',100)->change();
        $table->string('content', 1000)->change();
        $table->string('feature_image',100)->change();
    });
 }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
     Schema::table('posts', function ($table) {
        $table->dropColumn('status');
        $table->dropColumn('user_id');
        $table->string('title')->change();
        $table->string('slug')->change();
        $table->string('content')->change();
        $table->string('feature_image')->change();
     });
        //
    }
}
