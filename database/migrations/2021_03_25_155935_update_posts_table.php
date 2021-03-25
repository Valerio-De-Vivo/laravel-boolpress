<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            // $table->unsignedBigInteger('user_id');

            $table->foreignId('user_id')->constrained();
        });

    }


    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            // cancello la relazione 
            $table->dropForeign('posts_user_id_foreign');
            // cancello la colonna 
            $table->dropColumn('user_id');
        });
    }
}
