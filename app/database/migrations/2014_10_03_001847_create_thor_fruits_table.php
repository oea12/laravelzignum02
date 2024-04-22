<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateThorFruitsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('fruits', function(Blueprint $table) {
                    $table->increments('id')->unsigned();
                    $table->string('title')->nullable()->default(null);
                    $table->string('icon')->nullable()->default(null);
                    $table->timestamps();
                });
                
                                
        Schema::create('fruit_texts', function(Blueprint $table) {
                    $table->increments('id')->unsigned();
                    $table->integer('fruit_id')->unsigned();
                    $table->integer('language_id')->unsigned();
                    $table->foreign('fruit_id')->references('id')->on('fruits')->onDelete('cascade');
                    $table->foreign('language_id')->references('language_id')->on('languages')->onDelete('cascade');
                    $table->string('title')->nullable()->default(null);
                    $table->boolean('is_translated')->nullable()->default(null);
                                        $table->timestamps();
                });
                    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
            Schema::table('fruit', function(Blueprint $table) {
                });
                                
        Schema::table('fruit_texts', function(Blueprint $table) {
                    $table->dropForeign('fruit_texts_fruit_id_foreign');
                    $table->dropForeign('fruit_texts_language_id_foreign');
                });
        Schema::drop('fruit_texts');
                        Schema::drop('fruits');
    }

}
