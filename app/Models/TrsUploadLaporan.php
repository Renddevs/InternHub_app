<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrsUploadLaporan extends Model
{
    use HasFactory, HasUuids;
    
    protected $table = 'trs_upload_laporan';
    public $timestamps = false;
}
