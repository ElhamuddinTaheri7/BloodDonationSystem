<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Donations extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $table = 'donations';
    protected $fillable = ['user_id','blood_group','blood_cost','blood_amount'];
}
