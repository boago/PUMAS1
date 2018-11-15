<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Document extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        //
        Schema ::create('document',function(Blueprint $table)
                        {
                            $table -> increments('docID');
                            $table -> string('author');

							$table -> string('Id');
							$table -> string('file_title');
                            $table -> string('description');
                            $table -> string('fieldofstudy');
                            $table -> string('university');
                            $table -> string('file_type');
                            $table -> string('file_name');
                            $table -> string('api_key')->nullable() ->unique();
                            $table->timestamp('created_at')->useCurrent();
                            $table->timestamp('updated_at')->useCurrent();
                            
                        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
		Schema::drop('document');
        //
    }
}
