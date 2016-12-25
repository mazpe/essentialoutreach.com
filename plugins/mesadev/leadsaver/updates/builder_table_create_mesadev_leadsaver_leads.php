<?php namespace MesaDev\LeadSaver\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMesadevLeadsaverLeads extends Migration
{
    public function up()
    {
        Schema::create('mesadev_leadsaver_leads', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('source');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->nullable();
            $table->text('description')->nullable();
            $table->string('interest')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('mesadev_leadsaver_leads');
    }
}
