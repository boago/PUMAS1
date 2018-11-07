<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema ::create('documents',function(Blueprint $table)
                        {
                            $table -> increments('docID');
                            $table -> string('author');
                            $table -> string('description');
                            $table -> string('fieldStudy');
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
