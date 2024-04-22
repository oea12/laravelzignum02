<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateThorCompanionsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('companions', function(Blueprint $table) {
                    $table->increments('id')->unsigned();
                    $table->string('title')->nullable()->default(null);
                    $table->string('icon')->nullable()->default(null);
                    $table->timestamps();
                });
                
                                
        Schema::create('companion_texts', function(Blueprint $table) {
                    $table->increments('id')->unsigned();
                    $table->integer('companion_id')->unsigned();
                    $table->integer('language_id')->unsigned();
                    $table->foreign('companion_id')->references('id')->on('companions')->onDelete('cascade');
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
            Schema::table('companion', function(Blueprint $table) {
                });
                                
        Schema::table('companion_texts', function(Blueprint $table) {
                    $table->dropForeign('companion_texts_companion_id_foreign');
                    $table->dropForeign('companion_texts_language_id_foreign');
                });
        Schema::drop('companion_texts');
                        Schema::drop('companions');
    }

}
