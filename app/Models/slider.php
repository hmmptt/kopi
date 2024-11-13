<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class slider extends Model
{
    use HasFactory;

    protected $fillable = ['img', 'desc', 'title'];

    public function getImgAttribute($value)
    {
        return asset('storage/' . $value);
    }
}
