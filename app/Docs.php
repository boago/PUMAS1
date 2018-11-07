<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docs extends Model
{
    
protected $fillable = ['user_id','name', 'item_id', 'filename'];
}
