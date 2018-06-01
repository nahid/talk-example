<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttachmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*Schema::create('attachments', function(Blueprint $tbl) {
            $tbl->increments('id');
            $tbl->integer('message_id');
            $tbl->string('source', 100);
            $tbl->string('name', 150);
            $tbl->string('mime_type', 50)->nullable();
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
