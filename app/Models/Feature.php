<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Feature extends Model
{
    use HasFactory, softDeletes;
    protected $guarded = ['id'];

    protected $appends = ['icon_url'];
    public function getIconAttribute()
    {
        return Storage::url($this->attributes['icon']);
    }
}
