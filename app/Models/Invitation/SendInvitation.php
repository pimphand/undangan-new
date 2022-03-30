<?php

namespace App\Models\Invitation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SendInvitation extends Model
{
    use HasFactory, softDeletes;
    protected $guarded = ['id'];
}
