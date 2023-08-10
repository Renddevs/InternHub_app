<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrsPendaftaranKp extends Model
{
    use HasFactory, HasUuids;
    
    protected $table = 'trs_pendaftaran_kp';
}
