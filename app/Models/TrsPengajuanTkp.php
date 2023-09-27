<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrsPengajuanTkp extends Model
{
    use HasFactory, HasUuids;
    
    protected $table = 'trs_pengajuan_tkp';
}
