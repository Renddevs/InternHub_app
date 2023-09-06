<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrsDosenPembimbing extends Model
{
    use HasFactory, HasUuids;
    
    protected $table = 'trs_dosen_pembimbing';
    public $timestamps = false;
}
