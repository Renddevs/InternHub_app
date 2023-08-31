<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrsPembayaranKp extends Model
{
    use HasUuids, HasFactory;

    protected $table = 'trs_pembayaran_kp';
    public $timestamps = false;
}
