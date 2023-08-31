<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MstMedia extends Model
{
    use HasUuids,HasFactory;

    protected $table = 'mst_media';
    public $timestamps = false;
}
