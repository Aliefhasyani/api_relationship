<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';

    protected $fillable = ['content','profile_id'];
    public $timestamps = 'false';
    public function profile(){
        return $this->belongsTo(Profile::class);
    }
}
