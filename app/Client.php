<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable=['name' , 'email' , 'phone' , 'mm_id' , 'eth_status' , 'wallet_id'];
}
