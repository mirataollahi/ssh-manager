<?php

namespace App\Models;

use App\Traits\CreatorRelation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ssh extends Model
{
    use HasFactory , SoftDeletes , CreatorRelation;

    protected $fillable = [
        'name' ,
        'ip' ,
        'username' ,
        'password' ,
        'port' ,
        'domain' ,
        'operation_system' ,
        'reseller' ,
        'user_id' ,
    ];


}
