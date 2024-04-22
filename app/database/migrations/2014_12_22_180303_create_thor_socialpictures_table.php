<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateThorSocialpicturesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('socialpictures', function(Blueprint $table) {
                    $table->increments('id')->unsigned();
                    $table->string('image')->nullable()->default(null);
                    $table->string('url')->nullable()->default(null);
                    $table->timestamps();
                });
                
                    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
            Schema::table('socialpicture', function(Blueprint $table) {
                });
                        Schema::drop('socialpictures');
    }

}
