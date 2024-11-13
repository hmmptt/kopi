<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'desc', 'tags', 'categories', "img", "price"];



    public function tags()
    {
        return $this->belongsTo(Tag::class, 'id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'id');
    }

    public function getImgAttribute($value)
    {
        return asset('storage/' . $value);
    }
}
