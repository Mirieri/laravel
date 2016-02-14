<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    protected $primaryKey="user_id";

    public function  Service_Provider()
    {
        return $this->hasMany(request::class);
    }

//    protected $fillable = [
//        'description',
//    ];
}
