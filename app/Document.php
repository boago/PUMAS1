<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Document extends Model
{
    //
    use SoftDeletes;

    protected $fillable = [
      'Document Name',
      'Description',
      'Field of Study'
      'University'
        
    ];

    public function user()
    {
      return $this->belongsTo(User::class);
    }
}
