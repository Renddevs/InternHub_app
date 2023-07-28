<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class RefRole extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'ref_role';

    public function User() : HasMany
    {
        return $this->hasMany(User::class, 'id_role');
    }
}
