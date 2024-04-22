<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateThorAlbumsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('albums', function(Blueprint $table) {
                    $table->increments('id')->unsigned();
                    $table->string('album_name')->nullable()->default(null);
                    $table->text('description')->nullable()->default(null);
                    $table->timestamps();
                });
                
                                
        Schema::create('album_texts', function(Blueprint $table) {
                    $table->increments('id')->unsigned();
                    $table->integer('album_id')->unsigned();
                    $table->integer('language_id')->unsigned();
                    $table->foreign('album_id')->references('id')->on('albums')->onDelete('cascade');
                    $table->foreign('language_id')->references('language_id')->on('languages')->onDelete('cascade');
                    $table->string('album_name')->nullable()->default(null);
                    $table->text('description')->nullable()->default(null);
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
            Schema::table('album', function(Blueprint $table) {
                });
                                
        Schema::table('album_texts', function(Blueprint $table) {
                    $table->dropForeign('album_texts_album_id_foreign');
                    $table->dropForeign('album_texts_language_id_foreign');
                });
        Schema::drop('album_texts');
                        Schema::drop('albums');
    }

}
