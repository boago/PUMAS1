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
							$table -> string('title');
                            $table -> string('description');
                            $table -> string('fieldofstudy');
                            $table -> string('university');
                            $table -> timestamps('docDate');
                            $table -> string('api_key')->nullable() ->unique();
                            $table -> rememberToken();
     
                            
                        });
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
