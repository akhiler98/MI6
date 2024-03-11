<?php

namespace App\Models;
use App\Models\Person;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    public function person()
    {
        return $this->hasOne(Person::class);
    }
}
