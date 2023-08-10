<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MstMahasiswa extends Model
{
    use HasFactory,HasUuids;

    protected $table = 'mst_mahasiswa';

    public function User() : BelongsTo
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function RefProdi() : BelongsTo
    {
        return $this->belongsTo(RefProdi::class, 'id_ref_prodi');
    }

}
