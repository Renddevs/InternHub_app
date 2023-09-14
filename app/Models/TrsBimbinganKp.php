<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrsBimbinganKp extends Model
{
    use HasFactory, HasUuids;
    
    protected $table = 'trs_bimbingan_kp';
    public $timestamps = false;
}
