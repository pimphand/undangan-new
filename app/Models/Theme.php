<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Theme extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    protected $appends = ['image', 'url'];
    public function getImageAttribute()
    {
        return Storage::url($this->attributes['image']);
    }

    public function getUrlAttribute($value)
    {
        return route('demo', $this->attributes['slug']);
    }
}
