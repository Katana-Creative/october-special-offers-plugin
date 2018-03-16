<?php namespace Katana\SpecialOffers\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateSpecialOffersTable extends Migration
{
    public function up()
    {
        Schema::create('katana_special_offers', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->char('name');
            $table->text('description');
            $table->char('buy_url');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('katana_special_offers');
    }
}
