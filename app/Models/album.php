<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class album extends Model
{
    protected $fillable = ['img', 'desc', 'title'];

    public function getImgAttribute($value)
    {
        return asset('storage/' . $value);
    }
}
