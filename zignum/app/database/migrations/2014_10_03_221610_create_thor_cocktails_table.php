<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateThorCocktailsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('cocktails', function(Blueprint $table) {
                    $table->increments('id')->unsigned();
                    $table->string('product')->nullable()->default(null);
                    $table->string('name')->nullable()->default(null);
                    $table->string('cocktailimage')->nullable()->default(null);
                    $table->string('cocktailicon')->nullable()->default(null);
                    $table->mediumtext('instructions')->nullable()->default(null);
                    $table->timestamps();
                });
                
                                
        Schema::create('cocktail_texts', function(Blueprint $table) {
                    $table->increments('id')->unsigned();
                    $table->integer('cocktail_id')->unsigned();
                    $table->integer('language_id')->unsigned();
                    $table->foreign('cocktail_id')->references('id')->on('cocktails')->onDelete('cascade');
                    $table->foreign('language_id')->references('language_id')->on('languages')->onDelete('cascade');
                    $table->string('product')->nullable()->default(null);
                    $table->string('name')->nullable()->default(null);
                    $table->mediumtext('instructions')->nullable()->default(null);
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
            Schema::table('cocktail', function(Blueprint $table) {
                });
                                
        Schema::table('cocktail_texts', function(Blueprint $table) {
                    $table->dropForeign('cocktail_texts_cocktail_id_foreign');
                    $table->dropForeign('cocktail_texts_language_id_foreign');
                });
        Schema::drop('cocktail_texts');
                        Schema::drop('cocktails');
    }

}
