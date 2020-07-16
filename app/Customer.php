<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['firstname', 'lastname', 'email', 'address_id'];

    public function Address(){
        return $this->hasMany('App\Address');
    }
}
