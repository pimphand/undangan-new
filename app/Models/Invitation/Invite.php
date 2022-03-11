<?php

namespace App\Models\Invitation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Invite extends Model
{
    use HasFactory, softDeletes;
    protected $guarded = ['id'];

    public function event(): HasOne
    {
        return $this->hasOne(Event::class);
    }

    public function bride(): HasOne
    {
        return $this->hasOne(Bride::class);
    }

    public function story(): HasMany
    {
        return $this->HasMany(Story::class);
    }

    public function albums(): HasMany
    {
        return $this->HasMany(Gallery::class);
    }
}
