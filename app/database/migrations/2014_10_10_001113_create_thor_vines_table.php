<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateThorVinesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('vines', function(Blueprint $table) {
                    $table->increments('id')->unsigned();
                    $table->string('vine')->nullable()->default(null);
                    $table->timestamps();
                });
                
                    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
            Schema::table('vine', function(Blueprint $table) {
                });
                        Schema::drop('vines');
    }

}
