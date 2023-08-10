<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefProdi extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'ref_prodi';

    public function MstDosen() : HasMany
    {
        return $this->hasMany(MstDosen::class, 'id_ref_prodi');
    }

    public function MstMahasiswa() : HasMany
    {
        return $this->hasMany(MstMahasiswa::class, 'id_ref_role');
    }
}
