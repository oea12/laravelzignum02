<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateThorPicturesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('pictures', function(Blueprint $table) {
                    $table->increments('id')->unsigned();
                    $table->integer('album_id')->unsigned()->nullable()->default(null);
$table->foreign('album_id')->references('id')->on('albums');
                    $table->string('title')->nullable()->default(null);
                    $table->string('picture')->nullable()->default(null);
                    $table->timestamps();
                });
                
                                
        Schema::create('picture_texts', function(Blueprint $table) {
                    $table->increments('id')->unsigned();
                    $table->integer('picture_id')->unsigned();
                    $table->integer('language_id')->unsigned();
                    $table->foreign('picture_id')->references('id')->on('pictures')->onDelete('cascade');
                    $table->foreign('language_id')->references('language_id')->on('languages')->onDelete('cascade');
                    $table->integer('album_id')->unsigned()->nullable()->default(null);
$table->foreign('album_id')->references('id')->on('albums');
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
            Schema::table('picture', function(Blueprint $table) {
$table->dropForeign('picture_album_id_foreign');
                });
                                
        Schema::table('picture_texts', function(Blueprint $table) {
                    $table->dropForeign('picture_texts_picture_id_foreign');
                    $table->dropForeign('picture_texts_language_id_foreign');
$table->dropForeign('picture_texts_album_id_foreign');
                });
        Schema::drop('picture_texts');
                        Schema::drop('pictures');
    }

}
