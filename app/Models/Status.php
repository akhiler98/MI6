<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    public function people(): HasMany
    {
        return $this->hasMany(Person::class);
    }
}
