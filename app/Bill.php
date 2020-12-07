<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table = "bills";
    public function customer(){
        return $this->belongsto('App\Customer','id_customer','id');
    }
    public function bill_detail(){
        return $this->hasMany('App\Bill_Detail','id_bill','id');
    }
}

