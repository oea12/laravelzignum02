<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateThorPlacesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('places', function(Blueprint $table) {
                    $table->increments('id')->unsigned();
                    $table->string('title')->nullable()->default(null);
                    $table->string('icon')->nullable()->default(null);
                    $table->timestamps();
                });
                
                                
        Schema::create('place_texts', function(Blueprint $table) {
                    $table->increments('id')->unsigned();
                    $table->integer('place_id')->unsigned();
                    $table->integer('language_id')->unsigned();
                    $table->foreign('place_id')->references('id')->on('places')->onDelete('cascade');
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
            Schema::table('place', function(Blueprint $table) {
                });
                                
        Schema::table('place_texts', function(Blueprint $table) {
                    $table->dropForeign('place_texts_place_id_foreign');
                    $table->dropForeign('place_texts_language_id_foreign');
                });
        Schema::drop('place_texts');
                        Schema::drop('places');
    }

}
