<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = ['address_name', 'country', 'state', 'city'];
    public function customer(){
        return $this->belongsTo('App\Customer');
    }
}
