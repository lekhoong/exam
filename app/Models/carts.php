<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class carts extends Model
{
    protected $filleable=['user_id','p_id','cart_id','cart_mass','status'];
}
