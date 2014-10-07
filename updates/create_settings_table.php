<?php namespace Voipdeploy\Multisite\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateSettingsTable extends Migration
{

    public function up()
    {
        Schema::create('voipdeploy_multisite_settings', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('domain');
            $table->text('theme');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('voipdeploy_multisite_settings');
    }

}
