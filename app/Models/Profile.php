<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profiles';
    public $timestamps = 'false';

    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
