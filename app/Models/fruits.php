<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fruits extends Model
{
    protected $filleable=['p_name','p_mass','p_price'];
}
